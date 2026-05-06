@php
$products = app('App\Http\Controllers\Web\HomeController')->featuredProducts();
$simple_products = app('App\Http\Controllers\Web\HomeController')->simple_products();
$lang = session()->get('changed_language');
$fallback_local = config('translatable.fallback_locale'); 
$guest_price = App\Genral::first()->login;
$login = Auth::check() ? 1 : 0;
$date = now();
@endphp

<div class="row no-pad">
    @foreach ($products as $product)
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
                        <div class="image {{ $product['stock'] == 0 ? 'pro-img-box' : '' }}">
                            <a href="{{ $product['producturl'] }}" title="{{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}">
                                @if ($product['thumbnail'])
                                    <img class="{{ $product['stock'] == 0 ? 'filterdimage' : '' }}" src="{{ $product['thumbnail'] }}" alt="product_image" />
                                    <img class="hover-image {{ $product['stock'] == 0 ? 'filterdimage' : '' }}" src="{{ $product['hover_thumbnail'] }}" alt="product_image" />
                                @else
                                    <img class="{{ $product['stock'] == 0 ? 'filterdimage' : '' }}" src="{{ asset('/images/no-image.png') }}" alt="No Image" />
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
                        <h3 class="text-truncate name">
                            <a href="{{ $product['producturl'] }}">
                                {{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}
                            </a>
                        </h3>

                        @if ($product['rating'] != 0)
                            <div class="pull-left">
                                <div class="star-ratings-sprite">
                                    <span style="width: {{ $product['rating'] }}%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                        @else
                            <div class="no-rating">No Rating</div>
                        @endif

                        <div class="product-price">
                            <span class="price">
                                @if ($product['offerprice'] == 0 || $product['offerprice'] == '0.00')
                                    <span class="price">
                                        @if (in_array($product['position'], ['rs', 'r']))
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

                                        @if (in_array($product['position'], ['r', 'rs']))
                                            <i class="{{ $product['symbol'] }}"></i>
                                        @endif
                                    </span>
                                    <span class="price-before-discount">
                                        @if (in_array($product['position'], ['l', 'ls']))
                                            <i class="{{ $product['symbol'] }}"></i>
                                        @endif

                                        {{ $product['mainprice'] }}

                                        @if (in_array($product['position'], ['r', 'rs']))
                                            <i class="{{ $product['symbol'] }}"></i>
                                        @endif
                                    </span>
                                @endif
                            </span>
                        </div>
                    </div>

                    @if (!($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= $date))
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    @if ($guest_price == '0')
                                        <li id="addCart" class="lnk wishlist">
                                            <form method="POST" action="{{ $product['cartURL'] }}">
                                                @csrf
                                                <button title="{{ __('staticwords.AddtoCart') }}" type="submit" class="addtocartcus btn">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                            </form>
                                        </li>
                                    @endif

                                    @if ($login == 1)
                                        @if ($product['is_in_wishlist'] == 1)
                                            <li class="lnk wishlist active">
                                                <a href="{{ url('/removeWishList/' . $product['variantid']) }}" title="{{ __('staticwords.RemoveFromWishlist') }}" class="removeFrmWish active">
                                                    <i class="icon fa fa-heart"></i>
                                                </a>
                                            </li>
                                        @else
                                            <li class="lnk wishlist">
                                                <a href="{{ url('/AddToWishList/' . $product['variantid']) }}" title="{{ __('staticwords.AddToWishList') }}" class="addtowish">
                                                    <i class="icon fa fa-heart"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @endif

                                    <li class="lnk">
                                        <a href="{{ url('/addto/comparison/' . $product['productid']) }}" title="{{ __('staticwords.Compare') }}" class="add-to-cart">
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



          <!-- Simple products -->


    @foreach ($simple_products as $index => $product)
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
                    <div class="image {{ $product['stock'] == 0 ? 'pro-img-box' : '' }}">
                        <a href="{{ $product['producturl'] }}"
                            title="{{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}">

                            @if ($product['thumbnail'])
                                <span>
                                    <img class="lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                        data-src="{{ $product['thumbnail'] }}" alt="product_image" />
                                    <img class="lazy hover-image {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                        data-src="{{ $product['hover_thumbnail'] }}" alt="product_image" />
                                </span>
                            @else
                                <span>
                                    <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                        title="{{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}"
                                        src="{{ asset('images/no-image.png') }}" alt="No Image" />
                                </span>
                            @endif
                        </a>
                    </div>

                    @if ($product['stock'] == 0)
                        <h6 align="center" class="oottext">
                            <span>{{ __('staticwords.Outofstock') }}</span>
                        </h6>
                    @elseif ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= $date)
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
                    <h3 class="text-truncate name">
                        <a href="{{ $product['producturl'] }}">
                            {{ $product['productname'][$lang] ?? $product['productname'][$fallback_local] }}
                        </a>
                    </h3>

                    @if ($product['rating'] != 0)
                        <div class="pull-left">
                            <div class="star-ratings-sprite">
                                <span style="width: {{ $product['rating'] }}%;" class="star-ratings-sprite-rating"></span>
                            </div>
                        </div>
                    @else
                        <div class="no-rating">No Rating</div>
                    @endif

                    @if ($guest_price == '0' || $login == 1)
                        <div class="product-price">
                            @if ($product['offerprice'] == 0 || $product['offerprice'] == '0.00')
                                <span class="price">
                                    @if ($product['position'] == 'rs')&nbsp;@endif
                                    @if ($product['position'] == 'r' || $product['position'] == 'rs')<i class="{{ $product['symbol'] }}"></i>@endif
                                    {{ $product['mainprice'] }}
                                    @if ($product['position'] == 'l' || $product['position'] == 'ls')<i class="{{ $product['symbol'] }}"></i>@endif
                                    @if ($product['position'] == 'ls')&nbsp;@endif
                                </span>
                            @else
                                <span class="price">
                                    @if ($product['position'] == 'l' || $product['position'] == 'ls')<i class="{{ $product['symbol'] }}"></i>@endif
                                    @if ($product['position'] == 'ls')&nbsp;@endif
                                    @if ($product['position'] == 'rs')&nbsp;@endif
                                    @if ($product['position'] == 'r' || $product['position'] == 'rs')<i class="{{ $product['symbol'] }}"></i>@endif
                                    {{ $product['offerprice'] }}
                                </span>
                                <span class="price-before-discount">
                                    @if ($product['position'] == 'l' || $product['position'] == 'ls')<i class="{{ $product['symbol'] }}"></i>@endif
                                    @if ($product['position'] == 'ls')&nbsp;@endif
                                    @if ($product['position'] == 'rs')&nbsp;@endif
                                    @if ($product['position'] == 'r' || $product['position'] == 'rs')<i class="{{ $product['symbol'] }}"></i>@endif
                                    {{ $product['mainprice'] }}
                                </span>
                            @endif
                        </div>
                    @endif

                </div>

                @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= $date)
                    <!-- Future stock message placeholder -->
                @else
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                                @if ($product['type'] != 'ex_product' && $guest_price == '0')
                                    <li id="addCart" class="lnk wishlist">
                                        <form method="POST" action="{{ $product['cartURL'] }}">
                                            @csrf
                                            <button title="{{ __('staticwords.AddtoCart') }}" type="submit"
                                                class="addtocartcus btn">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                        </form>
                                    </li>
                                @endif
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
