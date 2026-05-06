<?php

namespace App;

use App\Http\Controllers\Api\CurrencyController;
use App\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Genral;
use ProductRating;
class Category extends Model
{
    use HasTranslations;

    public $translatable = ['title','description'];

	protected $fillable = [
		'title','description','status','image','featured','icon','position'
	];
	
    public function subcategory(){
    	return $this->hasMany('App\Subcategory','parent_cat');
    }

    public function products()
    {
    	return $this->hasMany('App\Product','category_id');
    }

    public function simpleproducts()
    {
    	return $this->hasMany('App\SimpleProduct','category_id');
    }

    public function getURL()
    {

        $rate = new CurrencyController;
        $conversion_rate = $rate->fetchRates(session()->get('currency')['id'])->getData()->exchange_rate;

        $item = $this;

        $price_array = array();

        $commision_setting = CommissionSetting::first();

        if ($item) {
            foreach ($item->products as $old) {

                foreach ($old->subvariants as $orivar) {

                    

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
                                $totalprice;
                                array_push($price_array, $totalprice);
                            } else {
                                
                                $totalsaleprice;
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
                        }
                    }

                }
            }

            if(isset($item->simpleproducts)){
                foreach($item->simpleproducts as $sp){
                    if($sp->offer_price != 0){
                        array_push($price_array, $sp->offer_price);
                    }else{
                        array_push($price_array, $sp->price);
                    }
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

            $url = url('shop?category=' . $item->id . '&start=' . sprintf("%.2f", $startp * $conversion_rate) . '&end=' . sprintf("%.2f", $endp * $conversion_rate));

            return $url;
            
        }else{
            return '#';
        }

    }

function getproducts($type) 
 {
    $content = array();

    $get_product_data = app(\App\Http\Controllers\Api\MainController::class);

    $conversion_rate = app(\App\Http\Controllers\Api\CurrencyController::class);
    $sellerSystem =  Genral::select('vendor_enable')->first();
    $conversion_rate = $conversion_rate->fetchRates(session()->get('currency')['id'])->getData()->exchange_rate;
    $limit = 10;

    $category = Category::find($type);

    if (isset($category)) {

            $topcatproducts = Product::with('category')->whereHas('category',function($q) use($category) {

                return $q->where('status','=','1')->where('id','=',$category->id);

            })->with('subcategory')->whereHas('subcategory',function($q){

                return $q->where('status','=','1');

            })->with('vender')->whereHas('vender',function($query) use ($sellerSystem) {

                if($sellerSystem->vendor_enable == 1){
                    $query->where('status','=','1')->where('is_verified','1');
                }else{
                    $query->where('status','=','1')->where('role_id','=','a')->where('is_verified','1');
                }
        
            })->with('store')->whereHas('store',function($query){
        
                return $query->where('status','=','1');
        
            })->with('subvariants')->whereHas('subvariants',function($query){
        
                $query->where('def','=','1');
        
            })->with('subvariants.variantimages')->whereHas('subvariants.variantimages')->where('status','1')->orderBy('id', 'DESC')->take($limit)->get();
           
        $content = array();

        $topcatproducts = $topcatproducts->map(function ($q) use ($get_product_data, $content, $conversion_rate) {

            $orivar = $q->subvariants[0];

            if (isset($orivar)) {

                $variant = $get_product_data->getVariant($orivar);
                $variant = $variant->getData();
                $mainprice = $get_product_data->getprice($q, $orivar);
                $price = $mainprice->getData();
                $content['productid'] = $q->id;
                $content['variantid'] = $orivar->id;
                $content['productname'] = $q->getTranslations('name');
                $content['selling_start_at'] = $q->selling_start_at;
                $content['mainprice'] = price_format($price->mainprice * $conversion_rate);
                $content['product_type'] = 'variant';
                $content['offerprice'] = price_format($price->offerprice * $conversion_rate);
                $content['position'] = session()->get('currency')['position'];
                $content['pricein'] = session()->get('currency')['id'];
                $content['symbol'] = session()->get('currency')['value'];
                $content['thumbnail'] = url('variantimages/thumbnails/' . $orivar->variantimages->main_image);
                $content['hover_thumbnail'] = url('variantimages/hoverthumbnail/' . $orivar->variantimages->image2);
                $content['is_in_wishlist'] =  app('App\Http\Controllers\Web\HomeController')->isItemInWishlist($orivar);
                $content['stock'] = $orivar->stock;
                $content['featured'] = $q->featured;
                $content['rating'] = ProductRating::getReview($q);
                $content['cartURL'] = route('add.cart', ['id' => $q->id, 'variantid' => $orivar->id, 'varprice' => $price->mainprice, 'varofferprice' => $price->offerprice, 'qty' => $orivar->min_order_qty]);
                $content['producturl'] = $q->getURL($orivar);
                $content['sale_tag'] = $q->getTranslations('sale_tag') ?? '';
                $content['sale_tag_color'] = $q->sale_tag_color;
                $content['sale_tag_text_color'] = $q->sale_tag_text_color;
                return $content;

            }

        });

        //Merge Variant product collection with simple product collection

$tabbed_simple_products = app('App\Http\Controllers\Web\HomeController')->tabbed_simple_products($category->id);
        $topcatproducts = $topcatproducts->merge($tabbed_simple_products);

        $topcatproducts =  $topcatproducts->filter()->shuffle();

        return $topcatproducts;
        

    } 
}



}
