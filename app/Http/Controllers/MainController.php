<?php
namespace App\Http\Controllers;
use App\AddSubVariant;
use App\AutoDetectGeo;
use App\BankDetail;
use App\Blog;
use App\Brand;
use App\Cart;
use App\Category;
use App\Commission;
use App\CommissionSetting;
use App\Country;
use App\Coupan;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use App\CurrencyNew;
use App\DetailAds;
use App\Genral;
use App\Grandcategory;
use App\Http\Controllers\Web\HomeController;
use App\Http\Requests\ApplyStoreRequest;
use App\Mail\SendReviewMail;
use App\Mostsearched;
use App\Notifications\SendReviewNotification;
use App\Order;
use App\Product;
use App\ProductAttributes;
use App\Seo;
use App\SimpleProduct;
use App\Store;
use App\Subcategory;
use App\TermsSettings;
use App\Testimonial;
use App\User;
use App\UserReview;
use App\Widgetsetting;
use App\Wishlist;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Image;
use Mail;
use ProductPrice;
use Session;
use View;
use App\Gift;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        if (\DB::connection()->getDatabaseName()) {
            if (\Schema::hasTable('seos')) {
                $this->seo = Seo::first();
                $this->setting = Genral::first();
            }
        }
    }
    public function share(Request $request)
    {
        $currentUrl = $_SERVER['QUERY_STRING'];
        $currentUrl = str_replace('url=', '', $currentUrl);
        return response()->json(['cururl' => View::make('front.share', compact('currentUrl'))->render()]);
    }
    public function user_review(Request $request, $id)
{
    // Validate input
    $this->validate($request, [
        "quality" => "required|integer|min:1|max:5",
        "Price" => "required|integer|min:1|max:5", 
        "Value" => "required|integer|min:1|max:5",
        "review" => "nullable|string|max:1000"
    ]);

    // Check if user is authenticated
    if (!Auth::check()) {
        return back()->withErrors(['error' => 'Please login to submit a review']);
    }

    $user_id = Auth::user()->id;
    
    // Check if user already reviewed this product
    $existing_review = UserReview::where('pro_id', $id)
        ->where('user', $user_id)
        ->first();
        
    if ($existing_review) {
        return back()->withErrors(['error' => 'You have already rated this product!']);
    }

    // Check if user purchased this product
    $has_purchased = false;
    $is_delivered = false;
    
    $orders = Order::where('user_id', $user_id)->get();
    
    foreach ($orders as $order) {
        foreach ($order->invoices as $invoice) {
            $variant = AddSubVariant::find($invoice->variant_id);
            
            if ($variant && $variant->products->id == $id) {
                $has_purchased = true;
                
                if ($invoice->status == 'delivered') {
                    $is_delivered = true;
                    break 2; // Break out of both loops
                }
            }
        }
    }

    // Check purchase requirements
    if (!$has_purchased) {
        return back()->withErrors(['error' => 'Please purchase this product to rate & review!']);
    }

    if (!$is_delivered) {
        return back()->withErrors(['error' => 'Thank you for purchasing this product! Please wait until the product is delivered to submit a review.']);
    }

    // Create the review
    try {
        $review = new UserReview();
        $review->pro_id = $id;
        $review->qty = $request->quality;
        $review->price = $request->Price;
        $review->value = $request->Value;
        $review->user = $user_id;
        $review->summary = $request->summary ?? '';
        $review->review = $request->review ?? '';
        $review->save();

        // Send notifications
        $product = Product::find($id);
        
        if ($product) {
            $message = $request->review 
                ? 'A new pending review has been received on your product: ' . $product->name
                : 'A new pending rating has been received on your product: ' . $product->name;

            $admins = User::where('role_id', 'a')
                ->where('status', '1')
                ->get();

            // Send notifications
            \Notification::send($admins, new SendReviewNotification($product->name, $message));

            // Send emails
            try {
                foreach ($admins as $admin) {
                    Mail::to($admin->email)->send(new SendReviewMail(Auth::user()->name, $product->name, $message));
                }
            } catch (\Exception $e) {
                // Log email error but don't fail the review submission
                \Log::error('Failed to send review notification email: ' . $e->getMessage());
            }
        }

        return back()->with('success', 'Review submitted successfully!');

    } catch (\Exception $e) {
        \Log::error('Error saving review: ' . $e->getMessage());
        return back()->withErrors(['error' => 'An error occurred while submitting your review. Please try again.']);
    }
}
    public function search(Request $request)
    {
        $search = $request->keyword;
        $sellerSystem = $this->setting;
        $ifwordExist = Mostsearched::where('keyword', $search)->first();
        if (isset($ifwordExist)) {
            $ifwordExist->count = $ifwordExist->count + 1;
        } else {
            $ifwordExist = new Mostsearched;
            $ifwordExist->keyword = $search;
            $ifwordExist->count = 1;
        }
        $ifwordExist->save();
        if ($request->cat == 'all') {
            $query = Product::where('status', '=', '1')
                ->whereHas('subvariants')
                ->whereHas('vender', function ($query) use ($sellerSystem) {
                    if ($sellerSystem->vendor_enable == 1) {
                        $query->where('status', '=', '1')->where('is_verified', '1');
                    } else {
                        $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                    }
                })
                ->with('subvariants')
                ->where('tags', 'LIKE', '%' . $search . '%')
                ->orwhere('name', 'LIKE', '%' . $search . '%')
                ->get();
            $query2 = SimpleProduct::whereHas('store', function ($query) {
                return $query->where('status', '=', '1');
            })->whereHas('store.user', function ($query) use ($sellerSystem) {
                if ($sellerSystem->vendor_enable == 1) {
                    $query->where('status', '=', '1')->where('is_verified', '1');
                } else {
                    $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                }
            })
                ->where('product_tags', 'like', '%' . $search . '%')
                ->orWhere('product_name', 'like', '%' . $search . '%')
                ->get();
        } else {
            $query = Product::where('status', '=', '1')
                ->whereHas('subvariants')
                ->whereHas('vender', function ($query) use ($sellerSystem) {
                    if ($sellerSystem->vendor_enable == 1) {
                        $query->where('status', '=', '1')->where('is_verified', '1');
                    } else {
                        $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                    }
                })
                ->with('subvariants')
                ->where('tags', 'LIKE', '%' . $search . '%')
                ->where('category_id', '=', $request->catid)
                ->orWhere('name', 'LIKE', '%' . $search . '%')
                ->get();
            $query2 = SimpleProduct::where('status', '=', '1')
                ->whereHas('store', function ($query) {
                    return $query->where('status', '=', '1');
                })->whereHas('store.user', function ($query) use ($sellerSystem) {
                    if ($sellerSystem->vendor_enable == 1) {
                        return $query->where('status', '=', '1')->where('is_verified', '1');
                    } else {
                        return $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                    }
                })
                ->where('category_id', '=', $request->catid)
                ->where('product_tags', 'like', '%' . $search . '%')
                ->orWhere('product_name', 'like', '%' . $search . '%')
                ->get();
        }
        if (count($query) < 1 && count($query2) < 1) {
            $url = url('shop?category=0&start=0&end=1.00&keyword=' . $request->keyword);
            return redirect($url);
        } else {
            require_once 'price.php';
            $search = $request->search;
            $result = array();
            $imageurl = url('variantimages/thumbnails/');
            $infourl = url('images');
            if ($request->catid == 'all') {
                $query = Product::where('status', '=', '1')
                    ->whereHas('vender', function ($query) use ($sellerSystem) {
                        if ($sellerSystem->vendor_enable == 1) {
                            $query->where('status', '=', '1')->where('is_verified', '1');
                        } else {
                            $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                        }
                    })
                    ->where('tags->' . app()->getLocale(), 'LIKE', '%' . $search . '%')
                    ->orWhere('name->' . app()->getLocale(), 'LIKE', '%' . $search . '%')
                    ->get();
                $query2 = SimpleProduct::where('status', '=', '1')
                    ->whereHas('store', function ($query) {
                        return $query->where('status', '=', '1');
                    })->whereHas('store.user', function ($query) use ($sellerSystem) {
                        if ($sellerSystem->vendor_enable == 1) {
                            $query->where('status', '=', '1')->where('is_verified', '1');
                        } else {
                            $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                        }
                    })
                    ->where('product_tags', 'like', '%' . $search . '%')
                    ->orWhere('product_name->' . app()->getLocale(), 'like', '%' . $search . '%')
                    ->get();
            } else {
                $query = Product::where('status', '=', '1')
                    ->whereHas('vender', function ($query) use ($sellerSystem) {
                        if ($sellerSystem->vendor_enable == 1) {
                            $query->where('status', '=', '1')->where('is_verified', '1');
                        } else {
                            $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                        }
                    })
                    ->where('category_id', '=', $request->catid)
                    ->where('tags->' . app()->getLocale(), 'LIKE', '%' . $search . '%')
                    ->orwhere('name->' . app()->getLocale(), 'LIKE', '%' . $search . '%')
                    ->with('subvariants')
                    ->get();
                $query2 = SimpleProduct::where('status', '=', '1')
                    ->whereHas('store', function ($query) {
                        return $query->where('status', '=', '1');
                    })->whereHas('store.user', function ($query) use ($sellerSystem) {
                        if ($sellerSystem->vendor_enable == 1) {
                            $query->where('status', '=', '1')->where('is_verified', '1');
                        } else {
                            $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                        }
                    })
                    ->where('category_id', '=', $request->catid)
                    ->where('product_tags', 'like', '%' . $search . '%')
                    ->orWhere('product_name->' . app()->getLocale(), 'like', '%' . $search . '%')
                    ->get();
            }
            $price_array = array();
            $price_login = Genral::find(1)->login;
            foreach ($query->unique('child') as $searchresult) {
                foreach ($searchresult->subcategory->products as $old) {
                    foreach ($old->subvariants as $orivar) {
                        if ($price_login == 0 || auth()->check()) {
                            $commision_setting = CommissionSetting::first();
                            if ($commision_setting->type == "flat") {
                                $commission_amount = $commision_setting->rate;
                                if ($commision_setting->p_type == 'f') {
                                    if ($old->tax_r != '') {
                                        $cit = $commission_amount * $old->tax_r / 100;
                                        $totalprice = $old->vender_price + $orivar->price + $commission_amount + $cit;
                                        $totalsaleprice = $old->vender_offer_price + $orivar->price + $commission_amount + $cit;
                                    } else {
                                        $totalprice = $old->vender_price + $orivar->price + $commission_amount;
                                        $totalsaleprice = $old->vender_offer_price + $orivar->price + $commission_amount;
                                    }
                                    if ($old->vender_offer_price == 0) {
                                        array_push($price_array, $totalprice);
                                    } else {
                                        array_push($price_array, $totalsaleprice);
                                    }
                                } else {
                                    $totalprice = ($old->vender_price + $orivar->price) * $commission_amount;
                                    $totalsaleprice = ($old->vender_offer_price + $orivar->price) * $commission_amount;
                                    $buyerprice = ($old->vender_price + $orivar->price) + ($totalprice / 100);
                                    $buyersaleprice = ($old->vender_offer_price + $orivar->price) + ($totalsaleprice / 100);
                                    if ($old->vender_offer_price == 0) {
                                        $bprice = round($buyerprice, 2);
                                        array_push($price_array, $bprice);
                                    } else {
                                        $bsprice = round($buyersaleprice, 2);
                                        array_push($price_array, $bsprice);
                                    }
                                }
                            } else {
                                $comm = Commission::where('category_id', $old->category_id)->first();
                                if (isset($comm)) {
                                    if ($comm->type == 'f') {
                                        if ($old->tax_r != '') {
                                            $cit = $comm->rate * $old->tax_r / 100;
                                            $price = $old->vender_price + $comm->rate + $orivar->price + $cit;
                                            $offer = $old->vender_offer_price + $comm->rate + $orivar->price + $cit;
                                        } else {
                                            $price = $old->vender_price + $comm->rate + $orivar->price;
                                            $offer = $old->vender_offer_price + $comm->rate + $orivar->price;
                                        }
                                        if ($old->vender_offer_price == 0) {
                                            array_push($price_array, $price);
                                        } else {
                                            array_push($price_array, $offer);
                                        }
                                    } else {
                                        $commission_amount = $comm->rate;
                                        $totalprice = ($old->vender_price + $orivar->price) * $commission_amount;
                                        $totalsaleprice = ($old->vender_offer_price + $orivar->price) * $commission_amount;
                                        $buyerprice = ($old->vender_price + $orivar->price) + ($totalprice / 100);
                                        $buyersaleprice = ($old->vender_offer_price + $orivar->price) + ($totalsaleprice / 100);
                                        if ($old->vender_offer_price == 0) {
                                            $bprice = round($buyerprice, 2);
                                            array_push($price_array, $bprice);
                                        } else {
                                            $bsprice = round($buyersaleprice, 2);
                                            array_push($price_array, $bsprice);
                                        }
                                    }
                                } else {
                                    $commission_amount = 0;
                                    $totalprice = ($old->vender_price + $orivar->price) * $commission_amount;
                                    $totalsaleprice = ($old->vender_offer_price + $orivar->price) * $commission_amount;
                                    $buyerprice = ($old->vender_price + $orivar->price) + ($totalprice / 100);
                                    $buyersaleprice = ($old->vender_offer_price + $orivar->price) + ($totalsaleprice / 100);
                                    if ($old->vender_offer_price == 0) {
                                        $bprice = round($buyerprice, 2);
                                        array_push($price_array, $bprice);
                                    } else {
                                        $bsprice = round($buyersaleprice, 2);
                                        array_push($price_array, $bsprice);
                                    }
                                }
                            }
                        }
                    }
                }
            }
            foreach ($query2->unique('subcategory') as $q) {
                if ($q->offer_price != 0) {
                    array_push($price_array, $q->offer_price);
                } else {
                    array_push($price_array, $q->price);
                }
            }
            if ($price_array != null) {
                $firstsub = min($price_array);
                $startp = round($firstsub);
                if ($startp >= $firstsub) {
                    $startp = $startp - 1;
                } else {
                    $startp = $startp;
                }
                $lastsub = max($price_array);
                $endp = round($lastsub);
                if ($endp <= $lastsub) {
                    $endp = $endp + 1;
                } else {
                    $endp = $endp;
                }
            } else {
                $startp = 0.00;
                $endp = 0.00;
            }
            if (isset($firstsub)) {
                if ($firstsub == $lastsub) {
                    $startp = 0.00;
                }
            }
            unset($price_array);
            $price_array = array();
            if (count($query)) {
                foreach ($query->unique('child') as $searchresult) {
                    return redirect($url = url('shop?category=' . $searchresult
                        ->category->id . '&sid=' . $searchresult
                        ->subcategory->id . '&start=' . $startp * $conversion_rate . '&end=' . $endp * $conversion_rate . '&keyword=' . $request->keyword));
                }
            }
        }
        if (count($query2)) {
            foreach ($query2->unique('subcategory') as $q) {
                return redirect($url = url('shop?category=' . $q
                    ->category->id . '&sid=' . $q
                    ->subcategory->id . '&start=' . $startp * $conversion_rate . '&end=' . $endp * $conversion_rate . '&keyword=' . $request->keyword));
            }
        }
    }
    public function details_product($slug, $id)
    {
        require_once 'price.php';
        $pro = Product::with(['category' => function ($q) {
            return $q->where('status', '1')->select('id', 'title');
        }])->whereHas('category', function ($query) {
            return $query->where('status', '1');
        })->with(['subcategory' => function ($q) {
            return $q->where('status', '1')->select('id', 'title');
        }])->whereHas('subcategory', function ($query) {
            return $query->where('status', '1');
        })->whereHas('subvariants')
            ->whereHas('subvariants.variantimages')
            ->with(['reviews', 'faq', 'comments' => function ($q) {
                return $q->where('approved', '=', '1')->orderBy('id', 'DESC')->take(5);
            }, 'commonvars', 'commonvars.attribute', 'commonvars.attribute.provalues', 'variants'])->find($id);
        $enable_hotdeal = Widgetsetting::where('name', 'hotdeals')->first();
        if (!$pro) {
            return redirect('/')->withErrors(__('Product not found !'), "404");
        }
        if ($pro->status != '1') {
            return redirect('/')->withErrors(__('Product is not active !'));
        }
        if (isset($pro->reviews)) {
            $qualityprogress = 0;
            $quality = 0;
            $tq = 0;
            $priceprogress = 0;
            $price = 0;
            $tp = 0;
            $valueprogress = 0;
            $value = 0;
            $vp = 0;
            if (count($pro->reviews)) {
                $count = count($pro->reviews);
                foreach ($pro->reviews as $key => $r) {
                    $quality = $tq + $r->qty * 5;
                }
                $countq = ($count * 1) * 5;
                $ratq = $quality / $countq;
                $qualityprogress = ($ratq * 100) / 5;
                foreach ($pro->reviews as $key => $r) {
                    $price = $tp + $r->price * 5;
                }
                $countp = ($count * 1) * 5;
                $ratp = $price / $countp;
                $priceprogress = ($ratp * 100) / 5;
                foreach ($pro->reviews as $key => $r) {
                    $value = $vp + $r->value * 5;
                }
                $countv = ($count * 1) * 5;
                $ratv = $value / $countv;
                $valueprogress = ($ratv * 100) / 5;
            }
        }
        $sellerSystem = $this->setting->vendor_enable;
        $reviewcount = $pro->reviews->where('status', "1")->WhereNotNull('review')->count();
        $deal_data = new HomeController;
        $hotdeals = $deal_data->hotdeals();
        $testimonials = Testimonial::where('status', '1')->get();
        $enable_testimonial_widget = Widgetsetting::where('name', 'testimonial')->first();
        views($pro)->record();
        $cashback_settings = $pro->cashback_settings;
        // return $pro;
        return view("front.detail", compact('cashback_settings', 'hotdeals', 'pro', 'reviewcount', 'testimonials', 'enable_hotdeal', 'conversion_rate', 'qualityprogress', 'valueprogress', 'priceprogress'));
    }
    //     public function AddToWishList($id)
    //     {
    // // return "hello";
    //         if (isset(Auth::user()->id)) {
    //             $wish = DB::table('wishlists')->where('user_id', Auth::user()
    //                     ->id)
    //                     ->where('pro_id', $id)->first();
    //             if (!empty($wish)) {
    //                 return 'error';
    //             } else {
    //                 $wishlist = new Wishlist;
    //                 $wishlist->user_id = Auth::user()->id;
    //                 $wishlist->pro_id = $id;
    //                 $wishlist->save();
    //                 // return response()->json(['message' => 'Added in wishlist !', 'status' => 'success']);
    //                 session()->flash('Added in wishlist !', 'Success');
    //                 return back();
    //                 // return back()->with("added", __("Added in wishlist !"));
    //             }
    //         } else {
    //             return back()
    //                 ->with("failure", __("Please login to use this feature !"));
    //         }
    //     }
    public function AddToWishList($id)
    {
        if (Auth::check()) {
            $exists = DB::table('wishlists')
                ->where('user_id', Auth::id())
                ->where('pro_id', $id)
                ->first();
            if ($exists) {
                return response('exists'); // consistent with frontend
            }
            Wishlist::create([
                'user_id' => Auth::id(),
                'pro_id' => $id,
            ]);
            return response('success');
        } else {
            return response('unauthenticated');
        }
    }
    public function wishlist_show()
    {
        require_once 'price.php';
        if (auth()->check()) {
            $data = Wishlist::with([
                'variant',
                'simple_product',
                'variant.variantimages',
                'variant.products'
            ])
                ->where('user_id', auth()->id()) // Ensure filtering by user first
                ->where(function ($query) {
                    $query->whereHas('variant.products', function ($subQuery) {
                        $subQuery->where('status', '=', '1');
                    })
                        ->orWhereHas('simple_product');
                })
                ->get();
            $wishcount = $data->count();
            return view('front.wishlist', compact('conversion_rate', 'data', 'wishcount'));
        }
        return back()->with('error', "Please log in to view wishlist!");
    }
    // public function removesimplesWishList($id)
    // {
    //     $user = Auth::user()->id;
    //     DB::table('wishlists')
    //         ->where('user_id', $user)->where('simple_pro_id', $id)->delete();
    //     return 'deleted';
    // }
    public function addtTocartfromWishList($id)
    {
        $user = Auth::user()->id;
        DB::table('wishlists')
            ->where('user_id', $user)->where('pro_id', $id)->delete();
        return redirect('addtocart/' . $id);
        return back()->with('failure', __('Item removed from wishlist'));
    }
    public function check()
    {
        if (Auth::check()) {
            $newuser = Auth::user();
            $carts = Session::get('item');
            if (!empty($carts[0])) {
                foreach ($carts as $cart) {
                    $cart_table = Cart::where('pro_id', $cart['id'])->where('user_id', $newuser->id)
                        ->first();
                    if (empty($cart_table)) {
                        Cart::create(array(
                            'pro_id' => $cart['id'],
                            'qty' => $cart['qty'],
                            'user_id' => $newuser->id,
                            'semi_total' => $cart['total_price'],
                        ));
                    } else {
                        Cart::where('pro_id', $cart['id'])->where('user_id', $newuser->id)
                            ->update(array(
                                'pro_id' => $cart['id'],
                                'qty' => $cart['qty'],
                                'user_id' => $newuser->id,
                                'semi_total' => $cart['total_price'],
                            ));
                    }
                }
            }
            Session::forget('item');
        }
        if ($newuser->role_id == 'a') {
            return redirect('admin');
        } elseif ($newuser->role_id == 'v') {
            return redirect('vender');
        } else {
            return redirect('home');
        }
    }
    public function process_to_guest(Request $request)
    {
        if ($request->checkValue == "guest") {
            return redirect()
                ->route('guest.checkout');
        } else {
            return redirect()
                ->route('register');
        }
    }
    public function coupan_apply(Request $request)
    {
        $auth = Auth::id();
        $date = date('Y-m-d');
        $total = Session('total');
        if (!empty($auth)) {
            $cart = Cart::where('user_id', $auth)->get();
        } else {
            return back()
                ->with("failure", __("You are not logged in !"));
        }
        $coupan = Coupan::where('code', $request->code)
            ->first();
        foreach ($cart as $carts) {
            if (!empty($coupan['pro_id'])) {
                if ($carts->product['id'] != $coupan['pro_id']) {
                    return back()->with("failure", __("Invalid coupan code ! for this product."));
                }
                $cdate = date($coupan->expirey_dt);
                if (!$coupan) {
                    return back()->with("failure", __("Invalid coupan code ! please try Again."));
                } elseif ($coupan->status == 0) {
                    return back()
                        ->with("failure", __("Invalid coupan code ! Please try again."));
                } elseif ($date > $cdate) {
                    return back()->with("failure", __("Coupan code is expired ! Please try again."));
                } elseif ($total < $coupan->minimum) {
                    return back()
                        ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan', ['qty' => $coupan->minimum]));
                }
                if (!Auth::check()) {
                    return back()
                        ->with("failure", __("You are not logged in !"));
                }
                $coupan_used = DB::table('used_coupans')->where('user_id', $auth)->first();
                if (empty($coupan_used)) {
                    $remaining = $coupan->max_use_coupan;
                    if ($coupan->Type == 'percentage') {
                        $per = ($carts
                            ->product->price / 100) * $coupan->amount;
                        if ($remaining < $carts->qty) {
                            $discount_amount = $remaining * $per;
                        } else {
                            $discount_amount = $carts->qty * $per;
                        }
                    } else {
                        if ($remaining < $carts->qty) {
                            $discount_amount = $remaining * $coupan->amount;
                        } else {
                            $discount_amount = $carts->qty * $coupan->amount;
                        }
                    }
                    session()
                        ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->item($total, $carts->product['id'], $discount_amount)]);
                    return back()->with("success", __("Coupan has been applied !"));
                } else {
                    if ($coupan_used->used_coupan >= $coupan->max_use_coupan) {
                        $remaining = $coupan->max_use_coupan - $coupan_used->used_coupan;
                        if ($coupan->Type == 'percentage') {
                            $per = ($carts
                                ->product->price / 100) * $coupan->amount;
                            if ($remaining < $carts->qty) {
                                $discount_amount = $remaining * $per;
                            } else {
                                $discount_amount = $carts->qty * $per;
                            }
                        } else {
                            if ($remaining < $carts->qty) {
                                $discount_amount = $remaining * $coupan->amount;
                            } else {
                                $discount_amount = $carts->qty * $coupan->amount;
                            }
                        }
                        session()
                            ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->item($total, $carts->product['id'], $discount_amount)]);
                        return back()->with("success", __("Coupan has been applied."));
                    }
                }
            }
            if (!empty($coupan['category'])) {
                if ($carts->product['category_id'] != $coupan['category']) {
                    return back()->with("failure", __("Invalid coupan code for this category !"));
                }
                if ($carts->product['category_id'] == $coupan['category']) {
                    $cdate = date($coupan->expirey_dt);
                    if (!$coupan) {
                        return back()->with("failure", __("Invalid coupan code ! please try Again."));
                    } elseif ($coupan->status == 0) {
                        return back()->with("failure", __("Invalid coupan code ! please try Again."));
                    } elseif ($date > $cdate) {
                        return back()->with("failure", __("Coupan code is expired ! Please try again."));
                    } elseif ($total < $coupan->minimum) {
                        return back()
                            ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan', ['qty' => $coupan->minimum]));
                    }
                    if (!Auth::check()) {
                        return back()
                            ->with("failure", __("You are not logged in."));
                    }
                    $coupan_used = DB::table('used_coupans')->where('user_id', $auth)->first();
                    if (empty($coupan_used)) {
                        $remaining = $coupan->max_use_coupan;
                        if ($coupan->Type == 'percentage') {
                            $per = ($carts->price / 100) * $coupan->amount;
                            if ($remaining < $carts->qty) {
                                $discount_amount = $remaining * $per;
                            } else {
                                $discount_amount = $carts->qty * $per;
                            }
                        } else {
                            if ($remaining < $carts->qty) {
                                $discount_amount = $remaining * $coupan->amount;
                            } else {
                                $discount_amount = $carts->qty * $coupan->amount;
                            }
                        }
                        session()
                            ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->cat($total, $carts->product['category_id'], $discount_amount)]);
                        return back()->with("success", __("Coupan has been applied."));
                    } else {
                        if ($coupan_used->used_coupan >= $coupan->max_use_coupan) {
                            $remaining = $coupan->max_use_coupan - $coupan_used->used_coupan;
                            if ($coupan->Type == 'percentage') {
                                $per = ($carts->price / 100) * $coupan->amount;
                                if ($remaining < $carts->qty) {
                                    $discount_amount = $remaining * $per;
                                } else {
                                    $discount_amount = $carts->qty * $per;
                                }
                            } else {
                                if ($remaining < $carts->qty) {
                                    $discount_amount = $remaining * $coupan->amount;
                                } else {
                                    $discount_amount = $carts->qty * $coupan->amount;
                                }
                            }
                            session()
                                ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->cat($total, $carts->product['category_id'], $discount_amount)]);
                            return back()->with("success", __("Coupan has been applied !"));
                        }
                    }
                }
            }
        }
        if (!empty($coupan)) {
            $cdate = date($coupan->expirey_dt);
        }
        if (!$coupan) {
            return back()->with("failure", __("Invalid Coupan code. ! Please try again."));
        } elseif ($coupan->status == 0) {
            return back()
                ->with("failure", __("Invalid Coupan code ! Please try again."));
        } elseif ($date > $cdate) {
            return back()->with("failure", __("Coupan code is expired ! Please try again."));
        } elseif ($total < $coupan->minimum) {
            return back()
                ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan', ['qty' => $coupan->minimum]));
        } else {
            $coupan_used = DB::table('used_coupans')->where('user_id', '1')
                ->get();
            $result = json_decode($coupan_used, true);
            $cdate = date($coupan->expirey_dt);
            if (!$coupan) {
                return back()->with("failure", __("Invalid Coupan code ! Please try again."));
            } elseif ($coupan->status == 0) {
                return back()
                    ->with("failure", __("Invalid Coupan code ! Please try again."));
            } elseif ($date > $cdate) {
                return back()->with("failure", "Coupan Code Is Expire. Please Try Again.");
            } elseif ($total < $coupan->minimum) {
                return back()
                    ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan', ['qty' => $coupan->minimum]));
            }
            if (!empty($result)) {
                if ($result['0']['used_coupan'] >= $coupan->max_use_coupan) {
                    return back()
                        ->with("failure", "This Coupan Code Not For You. Please Try Again.");
                }
            }
            session()
                ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $coupan->amount, 'total' => $coupan->discount($total)]);
            return back()->with("success", "Coupan Has Been Applied.");
        }
    }
    public function coupan_destroy()
    {
        session()
            ->forget('coupan');
        return back()
            ->with("failure", __("Coupan Has Been Removed."));
    }
    public function comparisonList()
    {
        require_once 'price.php';
        $genral_settings = Genral::first();
        $price_login = $genral_settings->login ?? 0;
        return view('front.comparison', compact('conversion_rate'));
    }
    //     public function docomparison($id)
    //     {
    //         //create a session and put products on it //
    //         if (!empty(Session::get('comparison'))) {
    //             $countComparison = count(Session::get('comparison'));
    //             if ($countComparison < 4) {
    //                 $comproducts = Session::get('comparison');
    //                 $countLength = count(Session::get('comparison'));
    //                 $avbl = 0;
    //                 $fpro = 0;
    //                 foreach ($comproducts as $key => $value) {
    //                     $fpro = $comproducts[$key]['proid'];
    //                 }
    //                 $firstProduct = Product::find($fpro);
    //                 $currentpro = Product::find($id);
    //               if ($firstProduct !== null && $currentpro !== null && $firstProduct->child != $currentpro->child) {
    //                    session()->flash('success', __('Only similar product can be compared'));
    // return back();
    //                     exit;
    //                 }
    //                 foreach ($comproducts as $key => $pro) {
    //                     if ($pro['proid'] == $id) {
    //                         $avbl = 1;
    //                         break;
    //                     } else {
    //                         $avbl = 0;
    //                     }
    //                 }
    //                 if ($avbl == 0) {
    //                     Session::push('comparison', ['proid' => $id]);
    //                     session()->flash('success', __('Product added to your compare list !'));
    //                     return back();
    //                 } else {
    //                     session()->flash('error', __('Product is already added to your comparison list!'));
    // return back();
    //                 }
    //             } else {
    //                 session()->flash('error', __('You can compare only 4 product at a time !'));
    //                 return back();
    //             }
    //         } else {
    //             Session::push('comparison', ['proid' => $id]);
    //             session()->flash('success', __('Product added to your compare list !'));
    //             return back();
    //         }
    //         return view("front.comparison");
    //     }
    // public function docomparison($id) {
    //     try {
    //         // Validate ID
    //         if (!is_numeric($id)) {
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Invalid product ID!'
    //             ], 400);
    //         }
    //         // Initialize comparison session
    //         $comparison = session('comparison', []);
    //         // Ensure comparison is an array
    //         if (!is_array($comparison)) {
    //             $comparison = [];
    //             session(['comparison' => $comparison]);
    //         }
    //         // Check product exists
    //         $currentProduct = Product::find($id);
    //         if (!$currentProduct) {
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Product not found!'
    //             ], 404);
    //         }
    //         // Check comparison limit
    //         if (count($comparison) >= 4) {
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'You can compare only 4 products at a time!'
    //             ], 400);
    //         }
    //         // Check for duplicate
    //         if (collect($comparison)->contains('proid', $id)) {
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Product is already added to your comparison list!'
    //             ], 400);
    //         }
    //         // Validate product similarity
    //         if (!empty($comparison)) {
    //             $firstProductId = $comparison[0]['proid'] ?? null;
    //             $firstProduct = Product::find($firstProductId);
    //             if (!$firstProduct) {
    //                 session(['comparison' => []]);
    //                 return response()->json([
    //                     'status' => 'error',
    //                     'message' => 'Invalid comparison data. Comparison list reset.'
    //                 ], 400);
    //             }
    //             if ($firstProduct->child !== $currentProduct->child) {
    //                 return response()->json([
    //                     'status' => 'error',
    //                     'message' => 'Only similar products can be compared!'
    //                 ], 400);
    //             }
    //         }
    //         // Add product to comparison
    //         $comparison[] = ['proid' => $id];
    //         session(['comparison' => $comparison]);
    //         // Get all products in comparison for the view
    //         $comparisonProducts = collect($comparison)->map(function($item) {
    //             return Product::find($item['proid']);
    //         })->filter(); // Remove any null products
    //         // Render the comparison view
    //         $comparisonView = view("front.comparison", [
    //             'comparisonProducts' => $comparisonProducts,
    //             'count' => count($comparison)
    //         ])->render();
    //         // Return both view HTML and JSON data
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Product added to your compare list!',
    //             'count' => count($comparison),
    //             'view' => $comparisonView,
    //             'product' => $currentProduct // Include the added product data
    //         ], 200);
    //     } catch (\Exception $e) {
    //         \Log::error('Comparison error: ' . $e->getMessage());
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'An unexpected error occurred. Please try again.'
    //         ], 500);
    //     }
    // }
  public function docomparison(Request $request, $id)
{
    try {
        \Log::info("Comparison request received", ['product_id' => $id]);
        // Validate ID
        if (!is_numeric($id)) {
            \Log::warning("Invalid product ID provided", ['product_id' => $id]);
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid product ID!'
                ], 400);
            }
            session()->flash('error', 'Invalid product ID!');
            return redirect()->back();
        }
        // Cast ID to integer
        $id = (int) $id;
        // Initialize comparison session
        $comparison = session('comparison', []);
        \Log::info("Fetched comparison session data", ['comparison' => $comparison]);
        // Ensure comparison is an array
        if (!is_array($comparison)) {
            \Log::warning("Comparison session is not an array. Resetting.");
            $comparison = [];
            session(['comparison' => $comparison]);
        }
        // Check product exists (including soft-deleted products)
        $currentProduct = Product::withTrashed()->where('id', $id)->first();
        if (!$currentProduct) {
            \Log::warning("Product not found in database", ['product_id' => $id]);
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found!'
                ], 404);
            }
            session()->flash('error', 'Product not found!');
            return redirect()->back();
        }
        // Log product details for debugging
        \Log::info("Product found", [
            'product_id' => $id,
            'type' => $currentProduct->type ?? 'unknown',
            'status' => $currentProduct->status,
            'deleted_at' => $currentProduct->deleted_at
        ]);
        // Check comparison limit
        if (count($comparison) >= 4) {
            \Log::info("Comparison list limit reached", ['limit' => 4]);
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You can compare only 4 products at a time!'
                ], 400);
            }
            session()->flash('error', 'You can compare only 4 products at a time!');
            return redirect()->back();
        }
        // Check for duplicate
        if (collect($comparison)->contains('proid', $id)) {
            \Log::info("Product already in comparison list", ['product_id' => $id]);
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product is already added to your comparison list!'
                ], 400);
            }
            session()->flash('error', 'Product is already added to your comparison list!');
            return redirect()->back();
        }
        // Add product to comparison
        $comparison[] = ['proid' => $id];
        session(['comparison' => $comparison]);
        \Log::info("Product added to comparison list", ['product_id' => $id, 'comparison' => $comparison]);
        // Get all products in comparison for the view (including soft-deleted)
        $comparisonProducts = collect($comparison)->map(function ($item) {
            return Product::withTrashed()->where('id', $item['proid'])->first();
        })->filter(); // Remove any null products
        \Log::info("Rendering comparison view", [
            'products' => $comparisonProducts->pluck('id'),
            'types' => $comparisonProducts->pluck('type')
        ]);
        // Define conversion rate
        $conversion_rate = session('currency', ['multiplier' => 1])['multiplier'] ?? 1;
        // Render the comparison view
        $comparisonView = view("front.comparison", [
            'comparisonProducts' => $comparisonProducts,
            'count' => count($comparison),
            'conversion_rate' => $conversion_rate
        ])->render();
        if ($request->ajax()) {
            // Return both view HTML and JSON data for AJAX
            return response()->json([
                'status' => 'success',
                'message' => 'Product added to your compare list!',
                'count' => count($comparison),
                'view' => $comparisonView,
                'product' => $currentProduct
            ], 200);
        }
        // Non-AJAX: Flash success message to session
        session()->flash('success', 'Product added to your compare list!');
        return redirect()->back();
    } catch (\Exception $e) {
        \Log::error('Comparison error: ' . $e->getMessage(), [
            'product_id' => $id,
            'trace' => $e->getTraceAsString()
        ]);
        if ($request->ajax()) {
            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occurred. Please try again.'
            ], 500);
        }
        // Non-AJAX: Flash error message to session
        session()->flash('error', 'An unexpected error occurred. Please try again.');
        return redirect()->back();
    }
}
    // public function docomparison($id)
    // {
    //     try {
    //         \Log::info("Comparison request received", ['product_id' => $id]);
    //         // Validate ID
    //         if (!is_numeric($id)) {
    //             \Log::warning("Invalid product ID provided", ['product_id' => $id]);
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Invalid product ID!'
    //             ], 400);
    //         }
    //         // Cast ID to integer
    //         $id = (int) $id;
    //         // Initialize comparison session
    //         $comparison = session('comparison', []);
    //         \Log::info("Fetched comparison session data", ['comparison' => $comparison]);
    //         // Ensure comparison is an array
    //         if (!is_array($comparison)) {
    //             \Log::warning("Comparison session is not an array. Resetting.");
    //             $comparison = [];
    //             session(['comparison' => $comparison]);
    //         }
    //         // Check product exists
    //         $currentProduct = Product::where('id', $id)->whereIn('status', [1, 2])->first();
    //         if (!$currentProduct) {
    //             // Check for soft-deleted or non-active product
    //             $trashedProduct = Product::withTrashed()->where('id', $id)->first();
    //             if ($trashedProduct) {
    //                 \Log::warning("Product found but is soft-deleted or invalid status", [
    //                     'product_id' => $id,
    //                     'deleted_at' => $trashedProduct->deleted_at,
    //                     'status' => $trashedProduct->status
    //                 ]);
    //                 return response()->json([
    //                     'status' => 'error',
    //                     'message' => 'Product is soft-deleted or has an invalid status!'
    //                 ], 404);
    //             }
    //             \Log::warning("Product not found in database", ['product_id' => $id]);
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Product not found!'
    //             ], 404);
    //         }
    //         // Log product details for debugging
    //         \Log::info("Product found", [
    //             'product_id' => $id,
    //             'status' => $currentProduct->status,
    //             'deleted_at' => $currentProduct->deleted_at
    //         ]);
    //         // Check comparison limit
    //         if (count($comparison) >= 4) {
    //             \Log::info("Comparison list limit reached", ['limit' => 4]);
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'You can compare only 4 products at a time!'
    //             ], 400);
    //         }
    //         // Check for duplicate
    //         if (collect($comparison)->contains('proid', $id)) {
    //             \Log::info("Product already in comparison list", ['product_id' => $id]);
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Product is already added to your comparison list!'
    //             ], 400);
    //         }
    //         // Add product to comparison
    //         $comparison[] = ['proid' => $id];
    //         session(['comparison' => $comparison]);
    //         \Log::info("Product added to comparison list", ['product_id' => $id, 'comparison' => $comparison]);
    //         // Get all products in comparison for the view
    //         $comparisonProducts = collect($comparison)->map(function ($item) {
    //             return Product::where('id', $item['proid'])->whereIn('status', [1, 2])->first();
    //         })->filter(); // Remove any null products
    //         \Log::info("Rendering comparison view", ['products' => $comparisonProducts->pluck('id')]);
    //         // Define conversion rate (adjust based on your application's logic)
    //         $conversion_rate = session('currency', ['multiplier' => 1])['multiplier'] ?? 1;
    //         // Render the comparison view
    //         $comparisonView = view("front.comparison", [
    //             'comparisonProducts' => $comparisonProducts,
    //             'count' => count($comparison),
    //             'conversion_rate' => $conversion_rate
    //         ])->render();
    //         // Return both view HTML and JSON data
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Product added to your compare list!',
    //             'count' => count($comparison),
    //             'view' => $comparisonView,
    //             'product' => $currentProduct
    //         ], 200);
    //     } catch (\Exception $e) {
    //         \Log::error('Comparison error: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'An unexpected error occurred. Please try again.'
    //         ], 500);
    //     }
    // }
    // public function removeFromComparsion($id)
    // {
    //     $comp = Session::get('comparison');
    //     foreach ($comp as $key => $value) {
    //         if ($value['proid'] == $id) {
    //             unset($comp[$key]);
    //         }
    //     }
    //     Session::put('comparison', $comp);
    //     return back()->with('added','Item removed from comparison list !');
    // }
   public function removeFromComparsion(Request $request, $id)
{
    try {
        \Log::info("Remove comparison request received", [
            'product_id' => $id,
            'session_id' => session()->getId(),
            'is_ajax' => $request->ajax() ? 'yes' : 'no'
        ]);
        $comparison = session('comparison', []);
        \Log::info("Current comparison session", ['comparison' => $comparison]);
        // Remove product from comparison
        $comparison = array_filter($comparison, function ($item) use ($id) {
            return $item['proid'] != $id;
        });
        session(['comparison' => array_values($comparison)]);
        \Log::info("Product removed from comparison", ['product_id' => $id, 'remaining' => $comparison]);
        if ($request->ajax()) {
            // Get updated comparison products
            $comparisonProducts = collect($comparison)->map(function ($item) {
                return Product::where('id', $item['proid'])->whereIn('status', [1, 2])->first();
            })->filter();
            // Define conversion rate
            $conversion_rate = session('currency', ['multiplier' => 1])['multiplier'] ?? 1;
            // Render the comparison view
            $comparisonView = view('front.comparison', [
                'comparisonProducts' => $comparisonProducts,
                'count' => count($comparison),
                'conversion_rate' => $conversion_rate
            ])->render();
            return response()->json([
                'status' => 'success',
                'message' => 'Product removed from comparison!',
                'count' => count($comparison),
                'view' => $comparisonView
            ], 200);
        }
        // Non-AJAX: Flash success message to session
        session()->flash('success', 'Product removed from comparison!');
        return redirect()->back();
    } catch (\Exception $e) {
        \Log::error('Remove from comparison error: ' . $e->getMessage(), [
            'trace' => $e->getTraceAsString(),
            'product_id' => $id
        ]);
        if ($request->ajax()) {
            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occurred. Please try again.'
            ], 500);
        }
        // Non-AJAX: Flash error message to session
        session()->flash('error', 'An unexpected error occurred. Please try again.');
        return redirect()->back();
    }
}
    public function getSessionMessages()
    {
        return response()->json([
            'success' => session('success'),
            'error' => session('error'),
            'added' => session('added'), // For removeFromComparsion
        ]);
    }
    public function removeWishList($id)
    {
        if (Auth::check()) {
            $exists = DB::table('wishlists')
                ->where('user_id', Auth::id())
                ->where('pro_id', $id)
                ->first();
            if ($exists) {
                DB::table('wishlists')
                    ->where('user_id', Auth::id())
                    ->where('pro_id', $id)
                    ->delete();
                return response('deleted'); // Changed from 'success' to 'deleted'
            }
            return response('not_found');
        } else {
            return response('unauthenticated');
        }
    }
    public function removesimplesWishList($id)
    {
        if (Auth::check()) {
            $exists = DB::table('wishlists')
                ->where('user_id', Auth::id())
                ->where('simple_pro_id', $id)
                ->first();
            if ($exists) {
                DB::table('wishlists')
                    ->where('user_id', Auth::id())
                    ->where('simple_pro_id', $id)
                    ->delete();
                return response('deleted');
            }
            return response('not_found');
        } else {
            return response('unauthenticated');
        }
    }
    public function bankdetail()
    {
        $value = BankDetail::all();
        return view("front.bankdetail", compact("value"));
    }
    public function edit_blog($id)
    {
        $value = Blog::where('id', '1')->first();
        return view("front.blog", compact("value"));
    }
    public function currency($id)
    {
        $pre = Session::get('currency')['id'];
        // Session::put('previous_cur', $pre);
        $currency = CurrencyNew::find($id);
        session()->put('currency', ['id' => $currency->code, 'mainid' => $currency->id, 'value' => $currency->currencyextract->currency_symbol, 'position' => $currency->currencyextract->position]);
        Session::put('current_cur', $currency->code);
        $status = 'yes';
        Session::put('currencyChanged', $status);
        return response()->json(__('Currency changed successfully !'));
    }
    public function applyforseller()
    {
        require_once 'price.php';
        $country = Country::all();
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        $sellerterm = TermsSettings::firstWhere('key', '=', 'seller-register-term');
        if (auth()->user()->store) {
            session()->flash('warning', __('You already have one store !'));
            return redirect('/');
        }
        return view('user.applysellerform', compact('user', 'country', 'conversion_rate', 'sellerterm'));
    }
    public function store_vender(ApplyStoreRequest $request)
    {
        $input = $request->all();
        if ($file = $request->file('store_logo')) {
            $optimizeImage = Image::make($file);
            $optimizePath = public_path() . '/images/store/';
            $store_logo = time() . $file->getClientOriginalName();
            $optimizeImage->save($optimizePath . $store_logo, 72);
            $input['store_logo'] = $store_logo;
        }
        if (!is_dir(public_path() . '/images/store/document')) {
            mkdir(public_path() . '/images/store/document');
            $text = '<?php echo "<h1>Access denined !</h1>" ?>';
            @file_put_contents(public_path() . '/images/store/document/index.php', $text);
        }
        if ($file = $request->file('document')) {
            $request->validate([
                'document' => 'required|mimes:jpeg,png,webp|max:2000',
            ]);
            $optimizeImage = Image::make($file);
            $optimizePath = public_path() . '/images/store/document/';
            $document = 'document_' . time() . $file->getClientOriginalName();
            $optimizeImage->save($optimizePath . $document, 72);
            $input['document'] = $document;
        }
        $input['user_id'] = auth()->id();
        $input['uuid'] = Store::generateUUID();
        auth()->user()->update([
            'role_id' => 'v',
        ]);
        auth()->user()->syncRoles('Seller');
        Store::create($input);
        if (env('ENABLE_SELLER_SUBS_SYSTEM') == 1) {
            session()->flash('success', __('Please select your package and submit the store request !'));
            return redirect(route('front.seller.plans'));
        } else {
            session()->flash('success', __('Store Has Been Created ! Once it\'s approved you can start selling your product !'));
            return redirect('/');
        }
    }
    public function guestCheckout()
    {
        require_once 'price.php';
        return view('front.guestCheckout', compact('conversion_rate'));
    }
    public function categoryfilter(Request $request)
    {
        $venderSystem = Genral::first()->vendor_enable;
        if (isset($request->brandNames) && $request->brandNames[0] == null) {
            $brand_names = '';
        } else {
            $brand_names = $request->brandNames;
        }
        require_once 'price.php';
        $start_price = $request->start_price;
        $tags_pro = $request->tag;
        $starts = $request->start;
        $ends = $request->end;
        $filter = $request->filter;
        $display = $request->display;
        $catid = $request->catID;
        $sid = $request->sid;
        $chid = $request->chid;
        $outofstock = $request->oot;
        $slider = $request->slider;
        $tag_check = $request->tag_check;
        $products = Product::query();
        $all_brands_products = array();
        $tags_new = array();
        $testingarr = array();
        $sidebarbrands = array();
        $vararray = $request->variantArray;
        $attrarray = $request->attrArray;
        $emarray = array();
        $uniqarray = array();
        $filledpro = array();
        $ratings = $request->ratings;
        $start_rat = $request->start_rat;
        $featured = $request->featured;
        $variantProduct = array();
        $variantProValues = array();
        $simple_products = array();
        $s_product = SimpleProduct::query();
        $a = array();
        if ($request->catID != "") {
            $request->keyword = '';
            if ($request->keyword != '' && $request->tag == '') {
                $search = $request->keyword;
                $search = str_replace("+", " ", $search);
                //with keyword and witout tag
                if ($request->chid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1');
                            }
                            if ($vararray != null) {
                                foreach ($all_brands_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($all_brands_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $all_brands_products = $filledpro;
                            } else {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('child_id', $chid);
                            }
                            foreach ($all_brands_products as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                            $testingarr = $all_brands_products;
                        }
                    } else {
                        if ($vararray != null) {
                            if ($featured == 1) {
                                $tag_products = $products
                                    ->where('tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->where('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orwhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')->where('child_id', $chid);
                            }
                            foreach ($tag_products as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($attrarray as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($vararray as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($attrarray) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($tag_products as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                        } else {
                            if ($featured == 1) {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $featured_pros = $tag_products;
                                $simple_products = $s_product
                                    ->orwhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orwhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '1')
                                    ->where('child_id', $chid);
                            }
                        }
                        $allbrands = Brand::all();
                        foreach ($allbrands as $brands) {
                            if (is_array($brands->category_id)) {
                                foreach ($brands->category_id as $brandcategory) {
                                    if ($brandcategory == $catid) {
                                        $sidebarbrands[$brands
                                            ->id] = $brands->name;
                                    }
                                }
                            }
                        }
                        foreach ($tag_products as $pro) {
                            if (count($pro->subvariants) > 0) {
                                $pro_all_tags = explode(',', $pro->tags);
                                foreach ($pro_all_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                        }
                        foreach ($simple_products->get() as $sp) {
                            $product_tags = explode(',', $sp->product_tags);
                            foreach ($product_tags as $t) {
                                array_push($tags_new, $t);
                            }
                        }
                        $tagsunique = array_unique($tags_new);
                        $getattr = ProductAttributes::all();
                        foreach ($getattr as $attr) {
                            $res = in_array($catid, $attr->cats_id);
                            if ($res == $attr->id) {
                                array_push($variantProduct, $attr);
                            }
                            foreach ($attr->provalues as $item) {
                                array_push($variantProValues, $item);
                            }
                        }
                    }
                } else {
                    if ($request->sid != '') {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orwhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                }
                                if ($vararray != null) {
                                    if ($featured == 1) {
                                        $all_brands_products = $products
                                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                            ->where('featured', '=', '1')
                                            ->where('child', $sid)
                                            ->get();
                                        $simple_products = $s_product
                                            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('featured', '1')
                                            ->where('subcategory_id', $sid);
                                    } else {
                                        $all_brands_products = $products
                                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('child', $sid)
                                            ->get();
                                        $simple_products = $s_product
                                            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('subcategory_id', $sid);
                                    }
                                    foreach ($all_brands_products as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($all_brands_products as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $all_brands_products = $filledpro;
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($all_brands_products as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                foreach ($simple_products->get() as $sp) {
                                    $product_tags = explode(',', $sp->product_tags);
                                    foreach ($product_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                                $testingarr = $all_brands_products;
                            }
                        } else {
                            if ($vararray != null) {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($tag_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($tag_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                            } else {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', 1)
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('subcategory_id', $sid);
                                }
                            }
                            $allbrands = Brand::all();
                            foreach ($allbrands as $brands) {
                                if (is_array($brands->category_id)) {
                                    foreach ($brands->category_id as $brandcategory) {
                                        if ($brandcategory == $catid) {
                                            $sidebarbrands[$brands
                                                ->id] = $brands->name;
                                        }
                                    }
                                }
                            }
                            foreach ($tag_products as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                            $getattr = ProductAttributes::all();
                            foreach ($getattr as $attr) {
                                $res = in_array($catid, $attr->cats_id);
                                if ($res == $attr->id) {
                                    array_push($variantProduct, $attr);
                                }
                                foreach ($attr->provalues as $item) {
                                    array_push($variantProValues, $item);
                                }
                            }
                        }
                    } else {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $featured_pros = $all_brands_products;
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                if ($vararray != null) {
                                    if ($featured == 1) {
                                        $all_brands_products = $products
                                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                            ->where('featured', '=', '1')
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid)
                                            ->get();
                                        $simple_products = $s_product
                                            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('featured', '1')
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid);
                                    } else {
                                        $all_brands_products = $products
                                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                            ->whereIn('brand_id', $brand_names)
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid)
                                            ->get();
                                        $simple_products = $s_product
                                            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                            ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                            ->whereIn('brand_id', $brand_names)
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid);
                                    }
                                    foreach ($all_brands_products as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($all_brands_products as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $all_brands_products = $filledpro;
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                foreach ($all_brands_products as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                foreach ($simple_products->get() as $sp) {
                                    $product_tags = explode(',', $sp->product_tags);
                                    foreach ($product_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                                $testingarr = $all_brands_products;
                            }
                        } else {
                            if ($vararray != null) {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', 1)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                foreach ($tag_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($tag_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                            } else {
                                if ($featured == 1) {
                                    $featured_pros = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)->get();
                                    $tag_products = $featured_pros;
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', 1)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                            }
                            $getattr = ProductAttributes::all();
                            foreach ($getattr as $attr) {
                                $res = in_array($catid, $attr->cats_id);
                                if ($res == $attr->id) {
                                    array_push($variantProduct, $attr);
                                }
                                foreach ($attr->provalues as $item) {
                                    array_push($variantProValues, $item);
                                }
                            }
                            $allbrands = Brand::all();
                            foreach ($allbrands as $brands) {
                                if (is_array($brands->category_id)) {
                                    foreach ($brands->category_id as $brandcategory) {
                                        if ($brandcategory == $catid) {
                                            $sidebarbrands[$brands
                                                ->id] = $brands->name;
                                        }
                                    }
                                }
                            }
                            foreach ($tag_products as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    }
                }
                //end
            } elseif ($request->keyword != '' && $request->tag != '') {
                $search = $request->keyword;
                $search = str_replace("+", " ", $search);
                //with keyword and with tag
                if ($request->chid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', 1)
                                    ->where('child_id', $chid);
                            } else {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('child_id', $chid);
                            }
                            foreach ($request->tag as $url) {
                                foreach ($all_brands_products as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            foreach ($testingarr as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            if ($vararray != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    } else {
                        unset($testingarr);
                        $testingarr = array();
                        if ($featured == 1) {
                            $strings = $products
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->where('featured', '=', '1')
                                ->where('grand_id', $request->chid)
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('featured', '1')
                                ->where('child_id', $request->chid);
                        } else {
                            $strings = $products
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->where('grand_id', $request->chid)
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('child_id', $request->chid);
                        }
                        foreach ($request->tag as $url) {
                            foreach ($strings as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($vararray != null) {
                            foreach ($testingarr as $pro) {
                                if (isset($pro)) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($attrarray) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $val = array_unique($val);
                                        $array_temp[] = $val;
                                    } else {
                                        $val = array_unique($val);
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = array_unique($emarray);
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                        foreach ($testingarr as $pro) {
                            if (count($pro->subvariants) > 0) {
                                $pro_all_tags = explode(',', $pro->tags);
                                foreach ($pro_all_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                        }
                        foreach ($simple_products->get() as $sp) {
                            $product_tags = explode(',', $sp->product_tags);
                            foreach ($product_tags as $t) {
                                array_push($tags_new, $t);
                            }
                        }
                        $tagsunique = array_unique($tags_new);
                    }
                } else {
                    if ($request->sid != '') {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                unset($testingarr);
                                $testingarr = array();
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($request->tag as $url) {
                                    foreach ($all_brands_products as $string) {
                                        $ex_tags = explode(',', $string->tags);
                                        foreach ($ex_tags as $ext) {
                                            if (strpos($ext, $url) !== false) {
                                                array_push($testingarr, $string);
                                            } else {
                                                //code
                                            }
                                        }
                                    }
                                }
                                $testingarr = array_unique($testingarr);
                                if ($vararray != null) {
                                    foreach ($testingarr as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($testingarr as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $testingarr = $filledpro;
                                } else {
                                    $testingarr;
                                }
                                foreach ($testingarr as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                foreach ($simple_products->get() as $sp) {
                                    $product_tags = explode(',', $sp->product_tags);
                                    foreach ($product_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                            }
                        } else {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $strings = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->where('child', $sid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->where('subcategory_id', $sid);
                            } else {
                                $strings = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('child', $sid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('subcategory_id', $sid);
                            }
                            foreach ($request->tag as $url) {
                                foreach ($strings as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            if ($vararray != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                            foreach ($testingarr as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    } else {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                unset($testingarr);
                                $testingarr = array();
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                foreach ($request->tag as $url) {
                                    foreach ($all_brands_products as $string) {
                                        $ex_tags = explode(',', $string->tags);
                                        foreach ($ex_tags as $ext) {
                                            if (strpos($ext, $url) !== false) {
                                                array_push($testingarr, $string);
                                            } else {
                                                //code
                                            }
                                        }
                                    }
                                }
                                $testingarr = array_unique($testingarr);
                                if ($vararray != null) {
                                    foreach ($testingarr as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($testingarr as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $testingarr = $filledpro;
                                } else {
                                    $testingarr;
                                }
                                foreach ($testingarr as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                foreach ($simple_products->get() as $sp) {
                                    $product_tags = explode(',', $sp->product_tags);
                                    foreach ($product_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                            }
                        } else {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $strings = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid);
                            } else {
                                $strings = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid);
                            }
                            foreach ($request->tag as $url) {
                                foreach ($strings as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            if ($vararray != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                            foreach ($testingarr as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    }
                }
                //end
            } elseif ($request->tag != '') {
                if ($request->chid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('child_id', $chid);
                            }
                            foreach ($request->tag as $url) {
                                foreach ($all_brands_products as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            foreach ($testingarr as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            if ($vararray != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    } else {
                        unset($testingarr);
                        $testingarr = array();
                        if ($featured == 1) {
                            $strings = $products->where('featured', '=', '1')
                                ->where('grand_id', $request->chid)
                                ->get();
                            $simple_products = $s_product
                                ->where('featured', '=', '1')
                                ->where('child_id', $request->chid);
                        } else {
                            $strings = $products->where('grand_id', $request->chid)
                                ->get();
                            $simple_products = $s_product->where('child_id', $request->chid);
                        }
                        foreach ($request->tag as $url) {
                            foreach ($strings as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($vararray != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($attrarray as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($vararray as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($attrarray) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $val = array_unique($val);
                                        $array_temp[] = $val;
                                    } else {
                                        $val = array_unique($val);
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = array_unique($emarray);
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                        foreach ($testingarr as $pro) {
                            if (count($pro->subvariants) > 0) {
                                $pro_all_tags = explode(',', $pro->tags);
                                foreach ($pro_all_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                        }
                        foreach ($simple_products->get() as $sp) {
                            $product_tags = explode(',', $sp->product_tags);
                            foreach ($product_tags as $t) {
                                array_push($tags_new, $t);
                            }
                        }
                        $tagsunique = array_unique($tags_new);
                    }
                } else {
                    if ($request->sid != '') {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                unset($testingarr);
                                $testingarr = array();
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $all_brands_products = $products
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($request->tag as $url) {
                                    foreach ($all_brands_products as $string) {
                                        $ex_tags = explode(',', $string->tags);
                                        foreach ($ex_tags as $ext) {
                                            if (strpos($ext, $url) !== false) {
                                                array_push($testingarr, $string);
                                            } else {
                                                //code
                                            }
                                        }
                                    }
                                }
                                $testingarr = array_unique($testingarr);
                                if ($vararray != null) {
                                    foreach ($testingarr as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($testingarr as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $testingarr = $filledpro;
                                } else {
                                    $testingarr;
                                }
                                foreach ($testingarr as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                foreach ($simple_products->get() as $sp) {
                                    $product_tags = explode(',', $sp->product_tags);
                                    foreach ($product_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                            }
                        } else {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $strings = $products
                                    ->where('featured', '=', '1')
                                    ->where('child', $sid)->get();
                                $simple_products = $s_product
                                    ->where('featured', '=', '1')
                                    ->where('subcategory_id', $sid);
                            } else {
                                $strings = $products->where('child', $sid)->get();
                                $simple_products = $s_product->where('subcategory_id', $sid);
                            }
                            foreach ($request->tag as $url) {
                                foreach ($strings as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            if ($vararray != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                            foreach ($testingarr as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    } else {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                unset($testingarr);
                                $testingarr = array();
                                if ($featured == 1) {
                                    $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '1')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                } else {
                                    $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                foreach ($request->tag as $url) {
                                    foreach ($all_brands_products as $string) {
                                        $ex_tags = explode(',', $string->tags);
                                        foreach ($ex_tags as $ext) {
                                            if (strpos($ext, $url) !== false) {
                                                array_push($testingarr, $string);
                                            } else {
                                                //code
                                            }
                                        }
                                    }
                                }
                                $testingarr = array_unique($testingarr);
                                if ($vararray != null) {
                                    foreach ($testingarr as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($testingarr as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $testingarr = $filledpro;
                                } else {
                                    $testingarr;
                                }
                                foreach ($testingarr as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                foreach ($simple_products->get() as $sp) {
                                    $product_tags = explode(',', $sp->product_tags);
                                    foreach ($product_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                            }
                        } else {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $strings = $products
                                    ->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid)
                                    ->get();
                                $simple_products = $s_product
                                    ->where('featured', '1')
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid);
                            } else {
                                $strings = $products->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhereJsonContains('other_cats', request()->catID)
                                    ->where('category_id', $catid);
                            }
                            foreach ($request->tag as $url) {
                                foreach ($strings as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            if ($vararray != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                            foreach ($testingarr as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    }
                }
            } else if ($starts >= 0 || $ends >= 0 && $starts != null && $ends != null && $starts != '' && $ends != '') {
                if ($request->chid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->whereIn('brand_id', $brand_names)->where('featured', '=', '1')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->where('child_id', $chid);
                            }
                            if ($vararray != null) {
                                foreach ($all_brands_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($all_brands_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $all_brands_products = $filledpro;
                            } else {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('child_id', $chid);
                            }
                            foreach ($all_brands_products as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                            $testingarr = $all_brands_products;
                        }
                    } else {
                        if ($vararray != null) {
                            if ($featured == 1) {
                                $tag_products = $products->where('featured', '=', '1')
                                    ->where('grand_id', $chid)->get();
                                $simple_products = $s_product->where('featured', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $tag_products = $products->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->where('child_id', $chid);
                            }
                            foreach ($tag_products as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($attrarray as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($vararray as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($attrarray) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($tag_products as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                        } else {
                            if ($featured == 1) {
                                $tag_products = $products->where('featured', '=', '1')
                                    ->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->where('featured', '1')
                                    ->where('child_id', $chid);
                                $featured_pros = $tag_products;
                            } else {
                                $tag_products = $products->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->where('child_id', $chid);
                            }
                        }
                        $allbrands = Brand::all();
                        foreach ($allbrands as $brands) {
                            if (is_array($brands->category_id)) {
                                foreach ($brands->category_id as $brandcategory) {
                                    if ($brandcategory == $catid) {
                                        $sidebarbrands[$brands
                                            ->id] = $brands->name;
                                    }
                                }
                            }
                        }
                        foreach ($tag_products as $pro) {
                            if (count($pro->subvariants) > 0) {
                                $pro_all_tags = explode(',', $pro->tags);
                                foreach ($pro_all_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                        }
                        foreach ($simple_products->get() as $sp) {
                            $product_tags = explode(',', $sp->product_tags);
                            foreach ($product_tags as $t) {
                                array_push($tags_new, $t);
                            }
                        }
                        $tagsunique = array_unique($tags_new);
                        $getattr = ProductAttributes::all();
                        foreach ($getattr as $attr) {
                            $res = in_array($catid, $attr->cats_id);
                            if ($res == $attr->id) {
                                array_push($variantProduct, $attr);
                            }
                            foreach ($attr->provalues as $item) {
                                array_push($variantProValues, $item);
                            }
                        }
                    }
                } else {
                    if ($request->sid != '') {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                if ($featured == 1) {
                                    $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('featured', '=', '1')
                                        ->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                }
                                if ($vararray != null) {
                                    if ($featured == 1) {
                                        $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('featured', '=', '1')
                                            ->where('child', $sid)->get();
                                        $simple_products = $s_product
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('featured', '1')
                                            ->where('subcategory_id', $sid);
                                    } else {
                                        $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('child', $sid)->get();
                                        $simple_products = $s_product
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('subcategory_id', $sid);
                                    }
                                    foreach ($all_brands_products as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($all_brands_products as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $all_brands_products = $filledpro;
                                } else {
                                    $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($all_brands_products as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                                $testingarr = $all_brands_products;
                            }
                        } else {
                            if ($vararray != null) {
                                if ($featured == 1) {
                                    $tag_products = $products->where('featured', '=', '1')
                                        ->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->where('featured', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $tag_products = $products->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($tag_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($tag_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                            } else {
                                if ($featured == 1) {
                                    $tag_products = $products->where('featured', '=', '1')
                                        ->where('child', $sid)->get();
                                    $featured_pros = $tag_products;
                                    $simple_products = $s_product
                                        ->where('featured', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $tag_products = $products->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->where('subcategory_id', $sid);
                                }
                            }
                            $allbrands = Brand::all();
                            foreach ($allbrands as $brands) {
                                if (is_array($brands->category_id)) {
                                    foreach ($brands->category_id as $brandcategory) {
                                        if ($brandcategory == $catid) {
                                            $sidebarbrands[$brands
                                                ->id] = $brands->name;
                                        }
                                    }
                                }
                            }
                            foreach ($tag_products as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            foreach ($simple_products->get() as $sp) {
                                $product_tags = explode(',', $sp->product_tags);
                                foreach ($product_tags as $t) {
                                    array_push($tags_new, $t);
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                            $getattr = ProductAttributes::all();
                            foreach ($getattr as $attr) {
                                $res = in_array($catid, $attr->cats_id);
                                if ($res == $attr->id) {
                                    array_push($variantProduct, $attr);
                                }
                                foreach ($attr->provalues as $item) {
                                    array_push($variantProValues, $item);
                                }
                            }
                        }
                    } else {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $featured_pros = $all_brands_products;
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                        ->where('category_id', $catid)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                if ($vararray != null) {
                                    if ($featured == 1) {
                                        $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                            ->where('featured', '=', '1')
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid)
                                            ->get();
                                        $simple_products = $s_product
                                            ->whereIn('brand_id', $brand_names)
                                            ->where('featured', '1')
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid);
                                    } else {
                                        $all_brands_products = $products
                                            ->whereIn('brand_id', $brand_names)
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid)
                                            ->get();
                                        $simple_products = $s_product
                                            ->whereIn('brand_id', $brand_names)
                                            ->orWhereJsonContains('other_cats', request()->catID)
                                            ->where('category_id', $catid);
                                    }
                                    foreach ($all_brands_products as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($attrarray as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($vararray as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($attrarray) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($all_brands_products as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $all_brands_products = $filledpro;
                                } else {
                                    $all_brands_products = $products
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                }
                                foreach ($all_brands_products as $pro) {
                                    if (count($pro->subvariants) > 0) {
                                        $pro_all_tags = explode(',', $pro->tags);
                                        foreach ($pro_all_tags as $t) {
                                            array_push($tags_new, $t);
                                        }
                                    }
                                }
                                $tagsunique = array_unique($tags_new);
                                $testingarr = $all_brands_products;
                            }
                        } else {
                            if ($vararray != null) {
                                if ($featured == 1) {
                                    $tag_products = $products->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)->get();
                                    $simple_products = $s_product
                                        ->where('featured', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $tag_products = $products->where('category_id', $catid)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->get();
                                    $simple_products = $s_product
                                        ->where('category_id', $catid)
                                        ->orWhereJsonContains('other_cats', request()->catID);
                                }
                                foreach ($tag_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($attrarray as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($vararray as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($attrarray) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($tag_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                            } else {
                                if ($featured == 1) {
                                    $featured_pros = $products
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $tag_products = $featured_pros;
                                    $simple_products = $s_product
                                        ->where('featured', '1')
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->where('category_id', $catid);
                                } else {
                                    $tag_products = $products->where('category_id', $catid)
                                        ->orWhereJsonContains('other_cats', request()->catID)
                                        ->get();
                                    $simple_products = $s_product->where('category_id', $catid)->orWhereJsonContains('other_cats', request()->catID);
                                }
                            }
                            $getattr = ProductAttributes::all();
                            foreach ($getattr as $attr) {
                                $res = in_array($catid, $attr->cats_id);
                                if ($res == $attr->id) {
                                    array_push($variantProduct, $attr);
                                }
                                foreach ($attr->provalues as $item) {
                                    array_push($variantProValues, $item);
                                }
                            }
                            $allbrands = Brand::all();
                            foreach ($allbrands as $brands) {
                                if (is_array($brands->category_id)) {
                                    foreach ($brands->category_id as $brandcategory) {
                                        if ($brandcategory == $catid) {
                                            $sidebarbrands[$brands
                                                ->id] = $brands->name;
                                        }
                                    }
                                }
                            }
                            foreach ($tag_products as $pro) {
                                if (count($pro->subvariants) > 0) {
                                    $pro_all_tags = explode(',', $pro->tags);
                                    foreach ($pro_all_tags as $t) {
                                        array_push($tags_new, $t);
                                    }
                                }
                            }
                            $tagsunique = array_unique($tags_new);
                        }
                    }
                }
            } else {
                return "Wrong URL";
            }
            if ($brand_names != '') {
                $products = $testingarr;
                response()->json(array(
                    'product' => $products,
                ));
            } elseif ($testingarr != null) {
                $products = $testingarr;
                response()->json(array(
                    'product' => $products,
                ));
            } elseif ($vararray != null) {
                $products = $filledpro;
                response()->json(array(
                    'product' => $products,
                ));
            } else {
                $products = $tag_products;
                response()->json(array(
                    'product' => $products,
                ));
            }
            $sellerSystem = $this->setting;
            $simple_products = $simple_products->whereHas('store', function ($query) {
                return $query->where('status', '=', '1');
            })->whereHas('store.user', function ($query) use ($sellerSystem) {
                if ($sellerSystem->vendor_enable == 1) {
                    $query->where('status', '=', '1')->where('is_verified', '1');
                } else {
                    $query->where('status', '=', '1')->where('role_id', '=', 'a')->where('is_verified', '1');
                }
            })->where('status', '1')->get();
            $pricing = array();
            if (count($simple_products)) {
                foreach ($simple_products as $pp) {
                    if ($pp->offer_price != 0) {
                        array_push($pricing, $pp->offer_price);
                    } else {
                        array_push($pricing, $pp->price);
                    }
                }
            }
            if ($products != null && count($products) > 0) {
                foreach ($products as $product) {
                    foreach ($product->subvariants as $key => $sub) {
                        $cp = ProductPrice::getprice($product, $sub)->getData();
                        $customer_price = $cp->customer_price;
                        array_push($pricing, $customer_price);
                    }
                }
            }
            if ($pricing != null) {
                $start = min($pricing);
                $end = max($pricing);
            } else {
                $start = $starts;
                $end = $ends;
            }
            $x = array();
            foreach ($products as $key => $p) {
                if ($venderSystem != 1) {
                    if (isset($p->vender['role_id']) && $p->vender['role_id'] == 'a') {
                        array_push($x, $p);
                    }
                } else {
                    array_push($x, $p);
                }
            }
            $products = $x;
            $isad = DetailAds::where('position', '=', 'category')->where('linked_id', $catid)->where('status', '=', '1')
                ->first();
            require_once 'price.php';
            $start_price = 1;
            $seo = Seo::first();
            // $products = $this->paginate($products);
            if (request()->keyword) {
                $title      = __('Showing all results for :keyword | :seotitle', ['keyword' => request()->keyword, 'seotitle' => $seo->project_name]);
                $seodes     = $title;
            } else if (request()->chid) {
                $findchid = Grandcategory::find(request()->chid);
                $title    = __(':title - All products | :seotitle', ['title' => $findchid->title, 'seotitle' => $seo->project_name]);
                $seodes   = strip_tags($findchid->description);
                $seoimage = url('images/grandcategory/' . $findchid->image);
            } else if (request()->sid) {
                $findsubcat = Subcategory::find(request()->sid);
                $title      = __(':title - All products | :seotitle', ['title' => $findsubcat->title, 'seotitle' => $seo->project_name]);
                $seodes     = strip_tags($findsubcat->description);
                $seoimage   = url('images/subcategory/' . $findsubcat->image);
            } else {
                $findcat    = Category::find(request()->catID);
                $title      = __(':title - All products | :seotitle', ['title' => $findcat->title, 'seotitle' => $seo->project_name]);
                $seodes     = strip_tags($findcat->description);
                $seoimage   = url('images/category/' . $findcat->image);
            }
            $seoResponse = array(
                'title'    => $title,
                'seodes'   => $seodes,
                'seoimage' => isset($seoimage) ? $seoimage : NULL,
                'seourl'   => url()->full()
            );
            return response()
                ->json([
                    'product' => view('front.cat.product', compact('outofstock', 'ratings', 'start_rat', 'a', 'start_price', 'tag_check', 'brand_names', 'conversion_rate', 'products', 'tags_pro', 'catid', 'sid', 'chid', 'start', 'end', 'starts', 'ends', 'slider', 'simple_products'))->render(),
                    'seosection' => $seoResponse,
                    'variantProValues' => $variantProValues,
                    'variantProduct' => $variantProduct,
                    'sidebarbrands' => $sidebarbrands,
                    'tagsunique' => $tagsunique,
                    'ad' => View::make('front.filters.ads', compact('isad', 'conversion_rate'))->render()
                ]);
        } else {
            return "Error ! Something went wrong from our side";
        }
    }
    //on load get filter data
    public function categoryf(Request $request)
    {
        require_once 'price.php';
        $a = array();
        $emarray = array();
        $filledpro = array();
        $start_price = 1;
        $tag_check = $request->tag_check;
        $from = Session::get('previous_cur');
        $to = Session::get('current_cur');
        $cur_change = Session::get('currencyChanged');
        $genral = Genral::first();
        $cur_setting = AutoDetectGeo::first()->enabel_multicurrency;
        if ($cur_change == 'yes') {
            $defcurrate = currency(1.00, $from = $from, $to = $to, $format = false);
            $defcurrate = round($defcurrate, 2);
            $starts = $request->start * $defcurrate;
            $ends = $request->end * $defcurrate;
        } else {
            $starts = $request->start;
            $ends = $request->end;
        }
        $catid = $request->category;
        $sid = $request->sid;
        $chid = $request->chid;
        $tag = $request->tag;
        $tags_pro = $request->tag;
        $slider = $request->slider;
        $ratings = $request->ratings;
        $start_rat = $request->start_rat;
        $featured = $request->featured;
        $outofstock = $request->oot;
        if (empty($request->ratings)) {
            $ratings = 0;
            $start_rat = 0;
        }
        if ($request->brands == '') {
            $brand_names = '';
        } else {
            $brand_names = explode(",", $request->brands);
        }
        if ($request->varType == '') {
            $varType = '';
        } else {
            $varType = explode(",", $request->varType);
        }
        if ($request->varValue == '') {
            $varValue = '';
        } else {
            $varValue = explode(",", $request->varValue);
        }
        $products = Product::query();
        $s_product = SimpleProduct::query();
        $all_brands_products = array();
        $testingarr = array();
        if ($request->keyword != '' && $request->tag == '') {
            $search = $request->keyword;
            if ($starts >= 0 || $ends >= 0 && $starts != null && $ends != null && $starts != '' && $ends != '') {
                //keyword without tag
                if ($request->chid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products =  $s_product->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('child_id', $chid);
                                $testingarr = $all_brands_products;
                            } else {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('child_id', $chid);
                                $testingarr = $all_brands_products;
                            }
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        if ($varValue != null) {
                            if ($featured == 1) {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('grand_id', $chid)->where('featured', '=', '1')
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('grand_id', $chid)->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('child_id', $chid);
                            }
                            foreach ($tag_products as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($tag_products as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                        } else {
                            if ($featured == 1) {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('grand_id', $chid)
                                    ->where('featured', '1')
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('featured', '=', '1')
                                    ->where('child_id', $chid);
                            } else {
                                $tag_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->where('grand_id', $chid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->where('child_id', $chid);
                            }
                        }
                    }
                } else {
                    if ($request->sid != '') {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->where('subcategory_id', $sid);
                                    $testingarr = $all_brands_products;
                                } else {
                                    $all_brands_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')->whereIn('brand_id', $brand_names)
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('subcategory_id', $sid);
                                    $testingarr = $all_brands_products;
                                }
                                if ($varValue != null) {
                                    foreach ($testingarr as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($varType as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($varValue as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($varType) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($testingarr as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $testingarr = $filledpro;
                                } else {
                                    $testingarr;
                                }
                            }
                        } else {
                            if ($varValue != null) {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('child', $sid)
                                        ->where('featured', '=', '1')
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('child', $sid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('subcategory_id', $sid);
                                }
                                foreach ($tag_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($tag_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                            } else {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('child', $sid)->where('featured', '=', "1")
                                        ->get();
                                    $featured_pros = $tag_products;
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->where('subcategory_id', $sid);
                                } else {
                                    $tag_products = $products->where('tags', 'LIKE', '%' . $search . '%')->orWhere('name', 'LIKE', '%' . $search . '%')->where('child', $sid)->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('subcategory_id', $sid);
                                }
                            }
                        }
                    } else {
                        if ($brand_names != '') {
                            if (is_array($brand_names)) {
                                if ($featured == 1) {
                                    $all_brands_products = $products
                                        ->where('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $testingarr = $all_brands_products;
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                } else {
                                    $all_brands_products = $products
                                        ->where('tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $testingarr = $all_brands_products;
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->whereIn('brand_id', $brand_names)
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                }
                                if ($varValue != null) {
                                    foreach ($testingarr as $pro) {
                                        if (
                                            $pro
                                            ->subvariants
                                            ->count() > 0
                                        ) {
                                            foreach ($pro->subvariants as $sub) {
                                                foreach ($sub->main_attr_value as $key => $main) {
                                                    foreach ($varType as $attr) {
                                                        if ($attr == $key) {
                                                            foreach ($varValue as $var) {
                                                                if ($main == $var) {
                                                                    array_push($emarray, $sub);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    if (count($varType) > 1) {
                                        $array_temp = array();
                                        foreach ($emarray as $val) {
                                            if (!in_array($val, $array_temp)) {
                                                $array_temp[] = $val;
                                            } else {
                                                array_push($a, $val);
                                            }
                                        }
                                    } else {
                                        $a = $emarray;
                                    }
                                    foreach ($a as $b) {
                                        foreach ($testingarr as $p) {
                                            foreach ($p->subvariants as $s) {
                                                if ($s->id == $b->id) {
                                                    array_push($filledpro, $p);
                                                }
                                            }
                                        }
                                    }
                                    $testingarr = $filledpro;
                                } else {
                                    $testingarr;
                                }
                            }
                        } else {
                            if ($varValue != null) {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                } else {
                                    $tag_products = $products->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                }
                                foreach ($tag_products as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($tag_products as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                            } else {
                                if ($featured == 1) {
                                    $tag_products = $products
                                        ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->where('category_id', $catid)
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('featured', '=', '1')
                                        ->get();
                                    $featured_pros = $tag_products;
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->where('featured', '=', '1')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                } else {
                                    $tag_products = $products->orWhere('tags', 'LIKE', '%' . $search . '%')
                                        ->orWhere('name', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid)
                                        ->get();
                                    $simple_products = $s_product
                                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                        ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                        ->orWhereJsonContains('other_cats', request()->category)
                                        ->where('category_id', $catid);
                                }
                            }
                        }
                    }
                }
                //end
            }
        } elseif ($request->keyword != '' && $request->tag != '') {
            $search = $request->keyword;
            if ($request->chid != '') {
                if ($brand_names != '') {
                    unset($testingarr);
                    $testingarr = array();
                    if (is_array($brand_names)) {
                        if ($featured == 1) {
                            $all_brands_products = $products
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->whereIn('brand_id', $brand_names)
                                ->where('featured', '=', '1')
                                ->where('grand_id', $chid)
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('featured', '=', '1')
                                ->whereIn('brand_id', $brand_names)
                                ->where('grand_id', $chid);
                        } else {
                            $all_brands_products = $products
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->whereIn('brand_id', $brand_names)
                                ->where('grand_id', $chid)
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->whereIn('brand_id', $brand_names)
                                ->where('grand_id', $chid);
                        }
                        $all_tags = explode(',', $request->tag);
                        foreach ($all_tags as $url) {
                            foreach ($all_brands_products as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                } else {
                    unset($testingarr);
                    $testingarr = array();
                    if ($featured == 1) {
                        $tag_products = $products
                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('tags', 'LIKE', '%' . $search . '%')
                            ->where('featured', '=', '1')
                            ->where('grand_id', $request->chid)
                            ->get();
                        $simple_products = $s_product
                            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                            ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                            ->where('featured', '1')
                            ->where('grand_id', $request->chid);
                    } else {
                        $tag_products = $products
                            ->orWhere('tags', 'LIKE', '%' . $search . '%')
                            ->orWhere('name', 'LIKE', '%' . $search . '%')
                            ->where('grand_id', $request->chid)
                            ->get();
                        $simple_products = $s_product
                            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                            ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                            ->where('grand_id', $request->chid);
                    }
                    $all_tags = explode(',', $request->tag);
                    foreach ($all_tags as $url) {
                        foreach ($tag_products as $string) {
                            $ex_tags = explode(',', $string->tags);
                            foreach ($ex_tags as $ext) {
                                if (strpos($ext, $url) !== false) {
                                    array_push($testingarr, $string);
                                } else {
                                    //code
                                }
                            }
                        }
                    }
                    $testingarr = array_unique($testingarr);
                    if ($varValue != null) {
                        foreach ($testingarr as $pro) {
                            if (
                                $pro
                                ->subvariants
                                ->count() > 0
                            ) {
                                foreach ($pro->subvariants as $sub) {
                                    foreach ($sub->main_attr_value as $key => $main) {
                                        foreach ($varType as $attr) {
                                            if ($attr == $key) {
                                                foreach ($varValue as $var) {
                                                    if ($main == $var) {
                                                        array_push($emarray, $sub);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if (count($varType) > 1) {
                            $array_temp = array();
                            foreach ($emarray as $val) {
                                if (!in_array($val, $array_temp)) {
                                    $array_temp[] = $val;
                                } else {
                                    array_push($a, $val);
                                }
                            }
                        } else {
                            $a = $emarray;
                        }
                        foreach ($a as $b) {
                            foreach ($testingarr as $p) {
                                foreach ($p->subvariants as $s) {
                                    if ($s->id == $b->id) {
                                        array_push($filledpro, $p);
                                    }
                                }
                            }
                        }
                        $testingarr = $filledpro;
                    } else {
                        $testingarr;
                    }
                }
            } else {
                if ($request->sid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('child', $sid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->where('subcategory_id', $sid);
                            } else {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('child', $sid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('subcategory_id', $sid);
                            }
                            $all_tags = explode(',', $request->tag);
                            foreach ($all_tags as $url) {
                                foreach ($all_brands_products as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        unset($testingarr);
                        $testingarr = array();
                        if ($featured == 1) {
                            $tag_products = $products
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->where('child', $sid)
                                ->where('featured', '=', '1')
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('featured', '1')
                                ->where('subcategory_id', $sid);
                        } else {
                            $tag_products = $products->where('tags', 'LIKE', '%' . $search . '%')->orWhere('name', 'LIKE', '%' . $search . '%')->where('child', $sid)->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('subcategory_id', $sid);
                        }
                        $all_tags = explode(',', $request->tag);
                        foreach ($all_tags as $url) {
                            foreach ($tag_products as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                } else {
                    if ($brand_names != '') {
                        unset($testingarr);
                        $testingarr = array();
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid);
                            } else {
                                $all_brands_products = $products
                                    ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->get();
                                $simple_products = $s_product
                                    ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                    ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category);
                            }
                            $all_tags = explode(',', $request->tag);
                            foreach ($all_tags as $url) {
                                foreach ($all_brands_products as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        unset($testingarr);
                        $testingarr = array();
                        if ($featured == 1) {
                            $tag_products = $products
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->where('featured', '=', "1")
                                ->orWhereJsonContains('other_cats', request()->category)
                                ->where('category_id', '=', $catid)
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('featured', '1')
                                ->orWhereJsonContains('other_cats', request()->category)
                                ->where('category_id', $catid);
                        } else {
                            $tag_products = $products->orWhere('tags', 'LIKE', '%' . $search . '%')
                                ->orWhere('name', 'LIKE', '%' . $search . '%')
                                ->where('category_id', $catid)
                                ->orWhereJsonContains('other_cats', request()->category)
                                ->get();
                            $simple_products = $s_product
                                ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                                ->orWhere('product_tags', 'LIKE', '%' . $search . '%')
                                ->where('category_id', $catid)
                                ->orWhereJsonContains('other_cats', request()->category);
                        }
                        $all_tags = explode(',', $request->tag);
                        foreach ($all_tags as $url) {
                            foreach ($tag_products as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                }
            }
            //keyword with tag
            //end
        } elseif ($request->tag != '') {
            if ($request->chid != '') {
                if ($brand_names != '') {
                    unset($testingarr);
                    $testingarr = array();
                    if (is_array($brand_names)) {
                        if ($featured == 1) {
                            $all_brands_products = $products
                                ->whereIn('brand_id', $brand_names)
                                ->where('featured', '=', '1')
                                ->where('grand_id', $chid)
                                ->get();
                            $simple_products = $s_product
                                ->whereIn('brand_id', $brand_names)
                                ->where('featured', '1')
                                ->where('grand_id', $chid);
                        } else {
                            $all_brands_products = $products
                                ->whereIn('brand_id', $brand_names)
                                ->where('grand_id', $chid)
                                ->get();
                            $simple_products = $s_product
                                ->whereIn('brand_id', $brand_names)
                                ->where('grand_id', $chid);
                        }
                        $all_tags = explode(',', $request->tag);
                        foreach ($all_tags as $url) {
                            foreach ($all_brands_products as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) { // Yoshi version
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                } else {
                    unset($testingarr);
                    $testingarr = array();
                    if ($featured == 1) {
                        $tag_products = $products->where('featured', '=', '1')
                            ->where('grand_id', $request->chid)
                            ->get();
                        $simple_products = $s_product
                            ->where('featured', '1')
                            ->where('grand_id', $request->chid);
                    } else {
                        $tag_products = $products->where('grand_id', $request->chid)
                            ->get();
                        $simple_products = $s_product
                            ->where('grand_id', $request->chid);
                    }
                    $all_tags = explode(',', $request->tag);
                    foreach ($all_tags as $url) {
                        foreach ($tag_products as $string) {
                            $ex_tags = explode(',', $string->tags);
                            foreach ($ex_tags as $ext) {
                                if (strpos($ext, $url) !== false) {
                                    array_push($testingarr, $string);
                                } else {
                                    //code
                                }
                            }
                        }
                    }
                    $testingarr = array_unique($testingarr);
                    if ($varValue != null) {
                        foreach ($testingarr as $pro) {
                            if (
                                $pro
                                ->subvariants
                                ->count() > 0
                            ) {
                                foreach ($pro->subvariants as $sub) {
                                    foreach ($sub->main_attr_value as $key => $main) {
                                        foreach ($varType as $attr) {
                                            if ($attr == $key) {
                                                foreach ($varValue as $var) {
                                                    if ($main == $var) {
                                                        array_push($emarray, $sub);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if (count($varType) > 1) {
                            $array_temp = array();
                            foreach ($emarray as $val) {
                                if (!in_array($val, $array_temp)) {
                                    $array_temp[] = $val;
                                } else {
                                    array_push($a, $val);
                                }
                            }
                        } else {
                            $a = $emarray;
                        }
                        foreach ($a as $b) {
                            foreach ($testingarr as $p) {
                                foreach ($p->subvariants as $s) {
                                    if ($s->id == $b->id) {
                                        array_push($filledpro, $p);
                                    }
                                }
                            }
                        }
                        $testingarr = $filledpro;
                    } else {
                        $testingarr;
                    }
                }
            } else {
                if ($request->sid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            unset($testingarr);
                            $testingarr = array();
                            if ($featured == 1) {
                                $all_brands_products = $products
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->where('child', $sid)
                                    ->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->where('subcategory_id', $sid);
                            } else {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('child', $sid)->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('subcategory_id', $sid);
                            }
                            $all_tags = explode(',', $request->tag);
                            foreach ($all_tags as $url) {
                                foreach ($all_brands_products as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        unset($testingarr);
                        $testingarr = array();
                        if ($featured == 1) {
                            $tag_products = $products->where('child', $sid)->where('featured', '=', '1')
                                ->get();
                            $simple_products = $s_product
                                ->where('featured', '1')
                                ->where('subcategory_id', $sid);
                        } else {
                            $tag_products = $products->where('child', $sid)->get();
                            $simple_products = $s_product
                                ->where('subcategory_id', $sid);
                        }
                        $all_tags = explode(',', $request->tag);
                        foreach ($all_tags as $url) {
                            foreach ($tag_products as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                } else {
                    if ($brand_names != '') {
                        unset($testingarr);
                        $testingarr = array();
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                    ->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid)
                                    ->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category);
                            } else {
                                $all_brands_products = $products
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->get();
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category);
                            }
                            $all_tags = explode(',', $request->tag);
                            foreach ($all_tags as $url) {
                                foreach ($all_brands_products as $string) {
                                    $ex_tags = explode(',', $string->tags);
                                    foreach ($ex_tags as $ext) {
                                        if (strpos($ext, $url) !== false) {
                                            array_push($testingarr, $string);
                                        } else {
                                            //code
                                        }
                                    }
                                }
                            }
                            $testingarr = array_unique($testingarr);
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        unset($testingarr);
                        $testingarr = array();
                        if ($featured == 1) {
                            $tag_products = $products->where('featured', '=', "1")
                                ->orWhereJsonContains('other_cats', request()->category)
                                ->where('category_id', '=', $catid)
                                ->get();
                            $simple_products = $s_product
                                ->where('featured', '1')
                                ->orWhereJsonContains('other_cats', request()->category)
                                ->where('category_id', $catid);
                        } else {
                            $tag_products = $products->where('category_id', $catid)
                                ->orWhereJsonContains('other_cats', request()->category)
                                ->get();
                            $simple_products = $s_product
                                ->where('category_id', $catid)
                                ->orWhereJsonContains('other_cats', request()->category);
                        }
                        $all_tags = explode(',', $request->tag);
                        foreach ($all_tags as $url) {
                            foreach ($tag_products as $string) {
                                $ex_tags = explode(',', $string->tags);
                                foreach ($ex_tags as $ext) {
                                    if (strpos($ext, $url) !== false) {
                                        array_push($testingarr, $string);
                                    } else {
                                        //code
                                    }
                                }
                            }
                        }
                        $testingarr = array_unique($testingarr);
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                }
            }
        } else if ($starts >= 0 || $ends >= 0 && $starts != null && $ends != null && $starts != '' && $ends != '') {
            if ($request->chid != '') {
                if ($brand_names != '') {
                    if (is_array($brand_names)) {
                        if ($featured == 1) {
                            $all_brands_products = $products
                                ->whereIn('brand_id', $brand_names)
                                ->where('featured', '=', '1')
                                ->where('grand_id', $chid)->get();
                            $testingarr = $all_brands_products;
                            $simple_products = $s_product
                                ->where('featured', '1')
                                ->whereIn('brand_id', $brand_names)
                                ->where('child_id', $chid);
                        } else {
                            $all_brands_products = $products
                                ->whereIn('brand_id', $brand_names)
                                ->where('grand_id', $chid)
                                ->get();
                            $testingarr = $all_brands_products;
                            $simple_products = $s_product
                                ->whereIn('brand_id', $brand_names)
                                ->where('child_id', $chid);
                        }
                        if ($varValue != null) {
                            foreach ($testingarr as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($testingarr as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                            $testingarr = $filledpro;
                        } else {
                            $testingarr;
                        }
                    }
                } else {
                    if ($varValue != null) {
                        if ($featured == 1) {
                            $tag_products = $products->where('grand_id', $chid)->where('featured', '=', '1')
                                ->get();
                            $simple_products = $s_product
                                ->where('featured', '1')
                                ->where('child_id', $chid);
                        } else {
                            $tag_products = $products->where('grand_id', $chid)->get();
                            $simple_products = $s_product
                                ->where('child_id', $chid);
                        }
                        foreach ($tag_products as $pro) {
                            if (
                                $pro
                                ->subvariants
                                ->count() > 0
                            ) {
                                foreach ($pro->subvariants as $sub) {
                                    foreach ($sub->main_attr_value as $key => $main) {
                                        foreach ($varType as $attr) {
                                            if ($attr == $key) {
                                                foreach ($varValue as $var) {
                                                    if ($main == $var) {
                                                        array_push($emarray, $sub);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if (count($varType) > 1) {
                            $array_temp = array();
                            foreach ($emarray as $val) {
                                if (!in_array($val, $array_temp)) {
                                    $array_temp[] = $val;
                                } else {
                                    array_push($a, $val);
                                }
                            }
                        } else {
                            $a = $emarray;
                        }
                        foreach ($a as $b) {
                            foreach ($tag_products as $p) {
                                foreach ($p->subvariants as $s) {
                                    if ($s->id == $b->id) {
                                        array_push($filledpro, $p);
                                    }
                                }
                            }
                        }
                    } else {
                        if ($featured == 1) {
                            $tag_products = $products->where('grand_id', $chid)->where('featured', '1')
                                ->get();
                            $featured_pros = $tag_products;
                            $simple_products = $s_product
                                ->where('child_id', $chid)
                                ->where('featured', '1');
                        } else {
                            $tag_products = $products->where('grand_id', $chid)->get();
                            $simple_products = $s_product
                                ->where('child_id', $chid);
                        }
                    }
                }
            } else {
                if ($request->sid != '') {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('featured', '=', '1')
                                    ->where('child', $sid)->get();
                                $simple_products = $s_product
                                    ->where('subcategory_id', $sid)
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1');
                                $testingarr = $all_brands_products;
                            } else {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)->where('child', $sid)->get();
                                $simple_products = $s_product
                                    ->where('subcategory_id', $sid)
                                    ->whereIn('brand_id', $brand_names);
                                $testingarr = $all_brands_products;
                            }
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        if ($varValue != null) {
                            if ($featured == 1) {
                                $tag_products = $products->where('child', $sid)->where('featured', '=', '1')
                                    ->get();
                                $simple_products = $s_product
                                    ->where('subcategory_id', $sid)
                                    ->where('featured', '1');
                            } else {
                                $tag_products = $products->where('child', $sid)->get();
                                $simple_products = $s_product
                                    ->where('subcategory_id', $sid);
                            }
                            foreach ($tag_products as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($tag_products as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                        } else {
                            if ($featured == 1) {
                                $tag_products = $products->where('child', $sid)->where('featured', '=', "1")
                                    ->get();
                                $featured_pros = $tag_products;
                                $simple_products = $s_product
                                    ->where('subcategory_id', $sid)
                                    ->where('featured', '1');
                            } else {
                                $tag_products = $products->where('child', $sid)->get();
                                $simple_products = $s_product
                                    ->where('subcategory_id', $sid);
                            }
                        }
                    }
                } else {
                    if ($brand_names != '') {
                        if (is_array($brand_names)) {
                            if ($featured == 1) {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                    ->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('featured', '=', '1')
                                    ->get();
                                $testingarr = $all_brands_products;
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->where('featured', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid);
                            } else {
                                $all_brands_products = $products->whereIn('brand_id', $brand_names)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid)
                                    ->get();
                                $testingarr = $all_brands_products;
                                $simple_products = $s_product
                                    ->whereIn('brand_id', $brand_names)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid);
                            }
                            if ($varValue != null) {
                                foreach ($testingarr as $pro) {
                                    if (
                                        $pro
                                        ->subvariants
                                        ->count() > 0
                                    ) {
                                        foreach ($pro->subvariants as $sub) {
                                            foreach ($sub->main_attr_value as $key => $main) {
                                                foreach ($varType as $attr) {
                                                    if ($attr == $key) {
                                                        foreach ($varValue as $var) {
                                                            if ($main == $var) {
                                                                array_push($emarray, $sub);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($varType) > 1) {
                                    $array_temp = array();
                                    foreach ($emarray as $val) {
                                        if (!in_array($val, $array_temp)) {
                                            $array_temp[] = $val;
                                        } else {
                                            array_push($a, $val);
                                        }
                                    }
                                } else {
                                    $a = $emarray;
                                }
                                foreach ($a as $b) {
                                    foreach ($testingarr as $p) {
                                        foreach ($p->subvariants as $s) {
                                            if ($s->id == $b->id) {
                                                array_push($filledpro, $p);
                                            }
                                        }
                                    }
                                }
                                $testingarr = $filledpro;
                            } else {
                                $testingarr;
                            }
                        }
                    } else {
                        if ($varValue != null) {
                            if ($featured == 1) {
                                $tag_products = $products->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid)
                                    ->get();
                                $simple_products = $s_product->where('featured', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid);
                            } else {
                                $tag_products = $products->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->get();
                                $simple_products = $s_product->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category);
                            }
                            foreach ($tag_products as $pro) {
                                if (
                                    $pro
                                    ->subvariants
                                    ->count() > 0
                                ) {
                                    foreach ($pro->subvariants as $sub) {
                                        foreach ($sub->main_attr_value as $key => $main) {
                                            foreach ($varType as $attr) {
                                                if ($attr == $key) {
                                                    foreach ($varValue as $var) {
                                                        if ($main == $var) {
                                                            array_push($emarray, $sub);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            if (count($varType) > 1) {
                                $array_temp = array();
                                foreach ($emarray as $val) {
                                    if (!in_array($val, $array_temp)) {
                                        $array_temp[] = $val;
                                    } else {
                                        array_push($a, $val);
                                    }
                                }
                            } else {
                                $a = $emarray;
                            }
                            foreach ($a as $b) {
                                foreach ($tag_products as $p) {
                                    foreach ($p->subvariants as $s) {
                                        if ($s->id == $b->id) {
                                            array_push($filledpro, $p);
                                        }
                                    }
                                }
                            }
                        } else {
                            if ($featured == 1) {
                                $tag_products = $products
                                    ->where('featured', '=', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid)
                                    ->get();
                                $featured_pros = $tag_products;
                                $simple_products = $s_product
                                    ->where('featured', '1')
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->where('category_id', $catid);
                            } else {
                                $tag_products = $products->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category)
                                    ->get();
                                $simple_products = $s_product->where('category_id', $catid)
                                    ->orWhereJsonContains('other_cats', request()->category);
                            }
                        }
                    }
                }
            }
        }
        $sellerSystem = $this->setting;
        if ($sellerSystem->vendor_enable == 1) {
            $simple_products = $simple_products->whereHas('store.user', function ($query) {
                $query->where('status', '=', '1')->where('is_verified', '1');
            })->where('status', '1');
        } else {
            $simple_products = $simple_products->whereHas('store.user', function ($query) {
                $query->where('role_id', '=', 'a')->where('status', '=', '1')->where('is_verified', '1');
            })->where('status', '1');
        }
        $simple_products = $simple_products->get();
        if ($brand_names != "") {
            $products = $testingarr;
            response()->json(array(
                'product' => $products,
            ));
        } elseif ($varValue != null) {
            $products = $filledpro;
            response()->json(array(
                'product' => $products,
            ));
        } elseif ($testingarr != null) {
            $products = $testingarr;
        } elseif ($featured != 0) {
            $products = $featured_pros;
        } else {
            $products = $products->get();
            response()->json(['product' => $products]);
        }
        $pricing = array();
        if ($products != null && count($products) > 0) {
            foreach ($products as $product) {
                foreach ($product->subvariants as $key => $sub) {
                    $cp = ProductPrice::getprice($product, $sub)->getData();
                    $customer_price = $cp->customer_price;
                    array_push($pricing, $customer_price);
                }
            }
        }
        if (count($simple_products)) {
            foreach ($simple_products as $key => $sp) {
                if ($sp->offer_price != 0) {
                    array_push($pricing, $sp->offer_price);
                } else {
                    array_push($pricing, $sp->price);
                }
            }
        }
        if ($pricing != null) {
            $start = min($pricing);
            $end = max($pricing);
        } else {
            $start = $starts;
            $end = $ends;
        }
        return view('front.filters.category', compact('outofstock', 'ratings', 'start_rat', 'a', 'start_price', 'tag_check', 'brand_names', 'conversion_rate', 'products', 'simple_products', 'catid', 'sid', 'chid', 'start', 'end', 'starts', 'ends', 'tag', 'tags_pro', 'slider'));
    }
    public function paginate($items, $perPage = 2, $page = 1, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $options = ['path' => Paginator::resolveCurrentPath()];
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    public function brandfilter(Request $request)
    {
        $allbrands = Brand::all();
        $catid = $request->categoryId;
        $brandname = $request->brand;
        $search_brands = array();
        $keywordbrands = Brand::where('name', 'LIKE', '%' . $brandname . '%')->select('id', 'name', 'category_id')
            ->get();
        if ($brandname == '') {
            foreach ($allbrands as $key => $brands) {
                if (is_array($brands->category_id)) {
                    foreach ($brands->category_id as $brandcategory) {
                        if ($brandcategory == $catid) {
                            array_push($search_brands, $brands);
                        }
                    }
                }
            }
        } else {
            foreach ($keywordbrands as $key => $brands) {
                if (is_array($brands->category_id)) {
                    foreach ($brands->category_id as $brandcategory) {
                        if ($brandcategory == $catid) {
                            array_push($search_brands, $brands);
                        }
                    }
                }
            }
        }
        return response()->json($search_brands);
    }
    public function variantfilter(Request $request)
    {
        $catid = $request->catID;
        $vararray = $request->variantArray;
        $attrarray = $request->attrArray;
        $emarray = array();
        $productArray = array();
        $uniqarray = array();
        $getpro = Product::where('category_id', $catid)->get();
        if (isset($vararray)) {
            foreach ($getpro as $pro) {
                if (
                    $pro
                    ->subvariants
                    ->count() > 0
                ) {
                    foreach ($pro->subvariants as $sub) {
                        foreach ($sub->main_attr_value as $key => $main) {
                            foreach ($attrarray as $attr) {
                                if ($attr == $key) {
                                    foreach ($vararray as $var) {
                                        if ($main == $var) {
                                            array_push($emarray, $pro);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $a = array();
            if (count($attrarray) > 1) {
                $array_temp = array();
                foreach ($emarray as $val) {
                    if (!in_array($val, $array_temp)) {
                        $array_temp[] = $val;
                    } else {
                        array_push($a, $val);
                    }
                }
            } else {
                $a = $emarray;
            }
            return $a;
            return $productArray;
        } else {
            echo "Nothing Selected";
        }
    }
    public function changedomain(Request $request)
    {
        $request->validate([
            'domain' => 'required',
        ]);
        $code = file_exists(storage_path() . '/app/keys/license.json') && file_get_contents(storage_path() . '/app/keys/license.json') != null ? file_get_contents(storage_path() . '/app/keys/license.json') : '';
        $code = json_decode($code);
        if ($code->code == '') {
            return back()->withInput()->withErrors(['domain' => __('Purchase code not found please contact support !')]);
        }
        $d = $request->domain;
        $domain = str_replace("www.", "", $d);
        $domain = str_replace("http://", "", $domain);
        $domain = str_replace("https://", "", $domain);
        $alldata = ['app_id' => "25300293", 'ip' => $request->ip(), 'domain' => $domain, 'code' => $code->code];
        $data = $this->make_request($alldata);
        if ($data['status'] == 1) {
            $put = 1;
            file_put_contents(public_path() . '/config.txt', $put);
            session()->flash('success', __('Domain permission changed successfully !'), __('Success'));
            return redirect('/');
        } elseif ($data['msg'] == 'Already Register') {
            return back()->withInput()->withErrors(['domain' => __('User is already registered !')]);
        } else {
            return back()->withInput()->withErrors(['domain' => $data['msg']]);
        }
    }
   public function make_request($alldata)
    {
        return true;
        
        // Static token - replace with your actual Envato API token
          $filePath       = public_path('keys/token.json');
        $decryptedToken = null;

        if (file_exists($filePath)) {
            try {
                $fileContents = file_get_contents($filePath);
                $tokenData    = json_decode($fileContents, true);

                if (isset($tokenData['encrypted_token'])) {
                    $decryptedToken = Crypt::decryptString($tokenData['encrypted_token']);
                    $decryptedToken = trim($decryptedToken, 's:32:"";');
                }
            } catch (\Exception $e) {
                // If decryption or reading fails, keep token null
                $decryptedToken = null;
            }
        }
        
        $code = $alldata['code'];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?code={$code}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$decryptedToken}",
            ],
        ]);

        // Execute request
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Parse response
        $result = json_decode($response, true);

        if ($httpCode == 200) {
            $lic_json = array(
                'name' => request()->user_id,
                'code' => $alldata['code'],
                'type' => __('envato'),
                'domain' => $alldata['domain'],
                'lic_type' => __('regular'),
                'token' => $decryptedToken,
            );

            $file = json_encode($lic_json, JSON_PRETTY_PRINT);
            $filename = 'license.json';

            Storage::disk('local')->put('/keys/' . $filename, $file);

            return array(
                'msg' => 'License verification successful',
                'status' => '1',
            );
        } else {
            $message = 'Verification failed';

            return array(
                'msg' => $message,
                'status' => '0',
            );
        }
    }
    public function apply_gift(Request $request)
    {
        $auth = Auth::id();
        $date = date('Y-m-d');
        $kcjd = Session::get('gift');
        if (!empty($auth)) {
            $cart = Cart::where('user_id', $auth)->get();
        } else {
            return back()
                ->with("failure", __("You are not logged in !"));
        }
        $gift = Gift::where('gift_code', $request->gift)->first();
        if (!$gift) {
            return back()->with("error", "Invalid gift code ! for this product.");
        }
        $coupan = Coupan::where('code', "FLAT100")
            ->first();
        foreach ($cart as $carts) {
            if (count($cart) > 0) {
                $product = Product::with('store')->find($carts->pro_id);
                if ($product->store_id  == $gift->seller_id) {
                    $cdate = date($gift->end_date);
                    $current = date('d-m-Y');
                    if ($current <= $cdate) {
                        $total = 20000;
                        // Session::set('gift', $gift->apply_price);
                        session()->put('gift', ['id' => $gift->id, 'title' => $gift->title, 'discount' => $gift->apply_price]);
                        return back();
                    } else {
                        return back()->with("error", "Gift code is expired.");
                    }
                } else {
                    return back()->with("error", "Invalid gift code ! for this product.");
                }
            }
        }
        //     if (!empty($coupan['pro_id'])) {
        //         if (!$carts->product['id']) {
        //             return back()->with("failure", __("Invalid coupan code ! for this product."));
        //         }
        //         $cdate = date($coupan->expirey_dt);
        //         if (!$coupan) {
        //             return back()->with("failure", __("Invalid coupan code ! please try Again."));
        //         } elseif ($coupan->status == 0) {
        //             return back()
        //                 ->with("failure", __("Invalid coupan code ! Please try again."));
        //         } elseif ($date > $cdate) {
        //             return back()->with("failure", __("Coupan code is expired ! Please try again."));
        //         } elseif ($total < $coupan->minimum) {
        //             return back()
        //                 ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan',['qty' => $coupan->minimum]));
        //         }
        //         if (!Auth::check()) {
        //             return back()
        //                 ->with("failure", __("You are not logged in !"));
        //         }
        //         $coupan_used = DB::table('used_coupans')->where('user_id', $auth)->first();
        //         if (empty($coupan_used)) {
        //             $remaining = $coupan->max_use_coupan;
        //             if ($coupan->Type == 'percentage') {
        //                 $per = ($carts
        //                         ->product->price / 100) * $coupan->amount;
        //                     if ($remaining < $carts->qty) {
        //                     $discount_amount = $remaining * $per;
        //                 } else {
        //                     $discount_amount = $carts->qty * $per;
        //                 }
        //             } else {
        //                 if ($remaining < $carts->qty) {
        //                     $discount_amount = $remaining * $coupan->amount;
        //                 } else {
        //                     $discount_amount = $carts->qty * $coupan->amount;
        //                 }
        //             }
        //             session()
        //                 ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->item($total, $carts->product['id'], $discount_amount)]);
        //             return back()->with("success", __("Coupan has been applied !"));
        //         } else {
        //             if ($coupan_used->used_coupan >= $coupan->max_use_coupan) {
        //                 $remaining = $coupan->max_use_coupan - $coupan_used->used_coupan;
        //                 if ($coupan->Type == 'percentage') {
        //                     $per = ($carts
        //                             ->product->price / 100) * $coupan->amount;
        //                         if ($remaining < $carts->qty) {
        //                         $discount_amount = $remaining * $per;
        //                     } else {
        //                         $discount_amount = $carts->qty * $per;
        //                     }
        //                 } else {
        //                     if ($remaining < $carts->qty) {
        //                         $discount_amount = $remaining * $coupan->amount;
        //                     } else {
        //                         $discount_amount = $carts->qty * $coupan->amount;
        //                     }
        //                 }
        //                 session()
        //                     ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->item($total, $carts->product['id'], $discount_amount)]);
        //                 return back()->with("success", __("Coupan has been applied."));
        //             }
        //         }
        //     }
        //     if (!empty($coupan['category'])) {
        //         if ($carts->product['category_id'] != $coupan['category']) {
        //             return back()->with("failure", __("Invalid coupan code for this category !"));
        //         }
        //         if ($carts->product['category_id'] == $coupan['category']) {
        //             $cdate = date($coupan->expirey_dt);
        //             if (!$coupan) {
        //                 return back()->with("failure", __("Invalid coupan code ! please try Again."));
        //             } elseif ($coupan->status == 0) {
        //                 return back()->with("failure", __("Invalid coupan code ! please try Again."));
        //             } elseif ($date > $cdate) {
        //                 return back()->with("failure", __("Coupan code is expired ! Please try again."));
        //             } elseif ($total < $coupan->minimum) {
        //                 return back()
        //                 ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan',['qty' => $coupan->minimum]));
        //             }
        //             if (!Auth::check()) {
        //                 return back()
        //                     ->with("failure", __("You are not logged in."));
        //             }
        //             $coupan_used = DB::table('used_coupans')->where('user_id', $auth)->first();
        //             if (empty($coupan_used)) {
        //                 $remaining = $coupan->max_use_coupan;
        //                 if ($coupan->Type == 'percentage') {
        //                     $per = ($carts->price / 100) * $coupan->amount;
        //                     if ($remaining < $carts->qty) {
        //                         $discount_amount = $remaining * $per;
        //                     } else {
        //                         $discount_amount = $carts->qty * $per;
        //                     }
        //                 } else {
        //                     if ($remaining < $carts->qty) {
        //                         $discount_amount = $remaining * $coupan->amount;
        //                     } else {
        //                         $discount_amount = $carts->qty * $coupan->amount;
        //                     }
        //                 }
        //                 session()
        //                     ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->cat($total, $carts->product['category_id'], $discount_amount)]);
        //                 return back()->with("success", __("Coupan has been applied."));
        //             } else {
        //                 if ($coupan_used->used_coupan >= $coupan->max_use_coupan) {
        //                     $remaining = $coupan->max_use_coupan - $coupan_used->used_coupan;
        //                     if ($coupan->Type == 'percentage') {
        //                         $per = ($carts->price / 100) * $coupan->amount;
        //                         if ($remaining < $carts->qty) {
        //                             $discount_amount = $remaining * $per;
        //                         } else {
        //                             $discount_amount = $carts->qty * $per;
        //                         }
        //                     } else {
        //                         if ($remaining < $carts->qty) {
        //                             $discount_amount = $remaining * $coupan->amount;
        //                         } else {
        //                             $discount_amount = $carts->qty * $coupan->amount;
        //                         }
        //                     }
        //                     session()
        //                         ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $discount_amount, 'total' => $coupan->cat($total, $carts->product['category_id'], $discount_amount)]);
        //                     return back()->with("success", __("Coupan has been applied !"));
        //                 }
        //             }
        //         }
        //     }
        // }
        // if (!empty($coupan)) {
        //     $cdate = date($coupan->expirey_dt);
        // }
        // if (!$coupan) {
        //     return back()->with("failure", __("Invalid Coupan code. ! Please try again."));
        // } elseif ($coupan->status == 0) {
        //     return back()
        //         ->with("failure", __("Invalid Coupan code ! Please try again."));
        // } elseif ($date > $cdate) {
        //     return back()->with("failure", __("Coupan code is expired ! Please try again."));
        // } elseif ($total < $coupan->minimum) {
        //     return back()
        //     ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan',['qty' => $coupan->minimum]));
        // } else {
        //     $coupan_used = DB::table('used_coupans')->where('user_id', '1')
        //         ->get();
        //     $result = json_decode($coupan_used, true);
        //     $cdate = date($coupan->expirey_dt);
        //     if (!$coupan) {
        //         return back()->with("failure", __("Invalid Coupan code ! Please try again."));
        //     } elseif ($coupan->status == 0) {
        //         return back()
        //             ->with("failure", __("Invalid Coupan code ! Please try again."));
        //     } elseif ($date > $cdate) {
        //         return back()->with("failure", "Coupan Code Is Expire. Please Try Again.");
        //     } elseif ($total < $coupan->minimum) {
        //         return back()
        //         ->with("failure", __('Minimum Cart Quantity :qty required to apply this coupan',['qty' => $coupan->minimum]));
        //     }
        //     if (!empty($result)) {
        //         if ($result['0']['used_coupan'] >= $coupan->max_use_coupan) {
        //             return back()
        //                 ->with("failure", "This Coupan Code Not For You. Please Try Again.");
        //         }
        //     }
        //     session()
        //         ->put('coupan', ['id' => $coupan->id, 'name' => $coupan->code, 'discount' => $coupan->amount, 'total' => $coupan->discount($total)]);
        //     return back()->with("success", "Coupan Has Been Applied.");
        // }
    }
    public function handlingcharge(Request $request)
    {
        $handling_charge = $request->paymenthand_id;
        $handling_charge = env($handling_charge);
        return $handling_charge;
    }
    public function demo_json(Request $request)
    {
        return 'work';
    }
}
