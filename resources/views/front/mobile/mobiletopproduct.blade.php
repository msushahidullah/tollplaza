@php
$products = app('App\Http\Controllers\Web\HomeController')->topProducts();
$simple_products = app('App\Http\Controllers\Web\HomeController')->simple_products();
$lang = session()->get('changed_language');
$fallback_local = config('translatable.fallback_locale'); 
$guest_price = App\Genral::first()->login;
$login = Auth::check() ? 1 : 0;
$date = now();
@endphp
<div class="row no-pad">
    @foreach ($products as $cat)
        <div class="col-12">
            <h3 class="section-title mt-1">
                {{ $cat['category_name'][$lang] ?? $cat['category_name'][$fallback_local] }}
            </h3>
            <div class="row">
                @foreach ($cat['products'] as $product)
                @php
                $discountedPrice =
                    $product['mainprice'] > 0
                        ? round(
                            (100 *
                                ($product['mainprice'] -
                                    $product['offerprice'])) /
                                $product['mainprice'],
                        )
                        : 0;
                $starbadge = false;
                $baseurl = url('/');
            @endphp
                    <div class="col-lg-6 col-12">
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                        <div class="badges bg-priamry">
                                            <span>OFF<span>{{ $discountedPrice }}%</span></span>
                                        </div>
                                    @endif
                                    <div class="product-image">
                                        <div class="{{ $product['stock'] == 0 ? 'pro-img-box' : '' }} image">
                                            <a href="{{ $product['producturl'] }}"
                                                title="{{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}">
                                                @if ($product['thumbnail'])
                                                    <img class="{{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                        src="{{ $product['thumbnail'] }}" alt="product_image" />
                                                    <img class="{{ $product['stock'] == 0 ? 'filterdimage' : '' }} hover-image"
                                                        src="{{ $product['hover_thumbnail'] }}" alt="product_image" />
                                                @else
                                                    <img class="{{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                        title="{{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}"
                                                        src="{{ asset('images/no-image.png') }}" alt="No Image" />
                                                @endif
                                            </a>
                                        </div>

                                        @if ($product['stock'] == 0)
                                            <h6 align="center" class="oottext">
                                                <span>{{ __('staticwords.Outofstock') }}</span>
                                            </h6>
                                        @elseif ($product['selling_start_at'] && $product['selling_start_at'] >= $date)
                                            <h6 align="center" class="oottext2">
                                                <span>{{ __('staticwords.ComingSoon') }}</span>
                                            </h6>
                                        @endif

                                        @if ($product['featured'] == 1)
                                            <div class="tag hot">
                                                <span>{{ __('staticwords.Hot') }}</span>
                                            </div>
                                        @elseif ($product['offerprice'] != 0)
                                            <div class="tag sale">
                                                <span>{{ __('staticwords.Sale') }}</span>
                                            </div>
                                        @else
                                            <div class="tag new">
                                                <span>{{ __('staticwords.New') }}</span>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="product-info text-left">
                                        <h3 class="name text-truncate">
                                            <a href="{{ $product['producturl'] }}">
                                                {{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}
                                            </a>
                                        </h3>

                                        @if ($product['rating'] != 0)
                                            <div class="pull-left">
                                                <div class="star-ratings-sprite">
                                                    <span style="width: {{ $product['rating'] }}%"
                                                        class="star-ratings-sprite-rating"></span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="no-rating">No Rating</div>
                                        @endif

                                        @if ($guest_price == '0' || $login == 1)
                                            <div class="product-price">
                                                <span class="price">
                                                    @if ($product['offerprice'] == 0 || $product['offerprice'] == '0.00')
                                                        <span class="price">
                                                            @if ($product['position'] == 'rs')
                                                                &nbsp;
                                                            @endif
                                                            @if (in_array($product['position'], ['r', 'rs']))
                                                                <i class="{{ $product['symbol'] }}"></i>
                                                            @endif
                                                            {{ $product['mainprice'] }}
                                                            @if (in_array($product['position'], ['l', 'ls']))
                                                                <i class="{{ $product['symbol'] }}"></i>
                                                            @endif
                                                        </span>
                                                    @else
                                                        <span class="price">
                                                            @if (in_array($product['position'], ['l', 'ls']))
                                                                <i class="{{ $product['symbol'] }}"></i>
                                                            @endif
                                                            {{ $product['offerprice'] }}
                                                        </span>
                                                        <span class="price-before-discount">
                                                            @if (in_array($product['position'], ['l', 'ls']))
                                                                <i class="{{ $product['symbol'] }}"></i>
                                                            @endif
                                                            {{ $product['mainprice'] }}
                                                        </span>
                                                    @endif
                                                </span>
                                            </div>
                                        @endif
                                    </div>

                                    @if (!($product['stock'] == 0 || ($product['selling_start_at'] && $product['selling_start_at'] >= $date)))
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    @if ($guest_price == '0')
                                                        <li id="addCart" class="lnk wishlist">
                                                            <form action="{{ $product['cartURL'] }}" method="POST">
                                                                @csrf
                                                                <button title="{{ __('staticwords.AddtoCart') }}"
                                                                    type="submit" class="addtocartcus btn">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                            </form>
                                                        </li>
                                                    @endif

                                                    @if ($login == 1)
                                                        @if ($product['is_in_wishlist'] == 1)
                                                            <li class="lnk wishlist active">
                                                                <a href="/removeWishList/{{ $product['variantid'] }}"
                                                                    title="{{ __('staticwords.RemoveFromWishlist') }}"
                                                                    class="removeFrmWish active color000 cursor-pointer">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                        @else
                                                            <li class="lnk wishlist">
                                                                <a href="/AddToWishList/{{ $product['variantid'] }}"
                                                                    title="{{ __('staticwords.AddToWishList') }}"
                                                                    class="addtowish cursor-pointer text-white">
                                                                    <i class="activeOne icon fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endif

                                                    <li class="lnk">
                                                        <a href="/addto/comparison/{{ $product['productid'] }}"
                                                            title="{{ __('staticwords.Compare') }}">
                                                            <i class="fa fa-signal" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
