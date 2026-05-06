<div class="col-sm-6 col-md-4 col-lg-4 col-12 mb-3" id="updatediv">

    <div class="shadow-sm border p-2 h-100 rounded item">
        <div class="products">
            <div class="product">

                @if($product['sale_tag'] !== NULL && $product['sale_tag'] != '')
                    <div class="ribbon ribbon-top-right">
                        <span style="background : {{ $product['sale_tag_color'] }} ; color : {{ $product['sale_tag_text_color'] }}">
                            
                            {{ $product['sale_tag'] }}
    
                        </span>
                    </div>
                @endif

                <div class="product-image">
                    <div class="image {{ $sub->stock == 0 ? "pro_img-box" : "" }}">

                        <a href="{{ $product->getURL($sub) }}" title="{{$product->name}}">

                            @if(count($product->subvariants)>0)

                            @if(isset($sub->variantimages['main_image']))

                            <img class="lazy {{ $sub->stock == 0 ? "filterdimage" : ""}}"
                                data-src="{{url('variantimages/thumbnails/'.$sub->variantimages['main_image'])}}"
                                alt="{{$sub->products->name}}" />

                            <img class="lazy {{ $sub->stock ==0 ? "filterdimage" : ""}}  hover-image"
                                data-src="{{url('variantimages/hoverthumbnail/'.$sub->variantimages['image2'])}}"
                                alt="{{$sub->products->name}}" />
                            @endif

                            @else

                            <img class="lazy {{ $sub->stock ==0 ? "filterdimage" : ""}}" title="{{ $sub->name }}"
                                data-src="{{url('images/no-image.png')}}" alt="No Image" />

                            @endif


                            @if($sub->stock != 0 && $sub->products->selling_start_at != null &&
                            $current_date <= $sub->products->selling_start_at
                                )
                                <h6 align="center" class="oottext2"><span>{{ __('staticwords.ComingSoon') }}</span></h6>
                                @endif

                        </a>
                    </div>
                </div>
                <!-- /.product-image -->

                <div class="product-info text-left">

                    <h3 class="name">
                        <a href="{{ $product->getURL($sub) }}">{{$product->name}}
                            ({{ variantname($sub) }})
                        </a>
                    </h3>

                    @if(get_product_rating($product->id) != 0)
                    <div class="pull-left star-right">
                        <div class="star-ratings-sprite"><span style="width:{{ get_product_rating($product->id) }}%"
                                class="star-ratings-sprite-rating"></span>
                        </div>
                    </div>
                    @else
                    <span class="font-size-10">{{ __('Rating Not Available') }}</span>
                    @endif

                    <div class="description"></div>
                    <div class="product-price"> <span class="price">


                            @if($price_login == 0 || auth()->check())
                              
                                @if($convert_price != 0)

                                    <span class="price">
                                        <i class="{{session()->get('currency')['value']}}"></i>
                                        {{price_format($convert_price * $conversion_rate)}}
                                    </span>
                                    <span class="price-before-discount">
                                        <i class="{{session()->get('currency')['value']}}"></i>
                                        {{price_format($show_price * $conversion_rate)}}
                                    </span>

                                    @else

                                    <span class="price">
                                        <i class="{{session()->get('currency')['value']}}"></i>
                                        {{price_format($show_price * $conversion_rate)}}
                                    </span>

                                @endif

                            @endif
                    </div>
                    <!-- /.product-price -->

                </div>

                <!-- /.product-info -->
                @if($sub->stock != 0 && $product->selling_start_at == null)
                <div class="cart clearfix animate-effect">
                    <div class="action">
                       <ul class="list-unstyled">
                <!-- Cart button -->
<li class="add-cart-button btn-group">
                    <form method="POST" action="{{route('add.cart',['id' => $product->id ,'variantid' => $sub->id, 'varprice' => $show_price, 'varofferprice' => $convert_price ,'qty' => $sub->min_order_qty])}}">
                        {{ csrf_field() }}
                        <button class="btn btn-primary icon" type="submit" title="{{ __('staticwords.AddtoCart') }}">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </form>
                </li>
                <!-- Wishlist -->
                @auth
                    <li class="lnk wishlist-cat {{ !empty($ifinwishlist) ? 'active' : '' }}" 
                        data-proid="{{ $product->id }}" 
                        data-type="{{ count($product->subvariants) > 0 ? 'variant' : 'simple' }}" 
                        data-varid="{{ count($product->subvariants) > 0 ? $sub->id : $product->id }}">
                        @if(!empty($ifinwishlist))
                            <a onclick="removeFromWishlistCategory({{ $product->id }}, '{{ count($product->subvariants) > 0 ? 'variant' : 'simple' }}', {{ count($product->subvariants) > 0 ? $sub->id : $product->id }}); return false;"
                               class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark"
                               title="{{ __('staticwords.RemoveFromWishlist') }}">
                                <i class="icon fa fa-heart"></i>
                            </a>
                        @else
                            <a onclick="addToWishlistCategory({{ $product->id }}, '{{ count($product->subvariants) > 0 ? 'variant' : 'simple' }}', {{ count($product->subvariants) > 0 ? $sub->id : $product->id }}); return false;"
                               class="cursor-pointer icon kal addtocartcus btn"
                               title="{{ __('staticwords.AddToWishList') }}">
                                <i class="icon fa fa-heart"></i>
                            </a>
                        @endif
                    </li>
                @endauth
                <!-- Compare -->
                <li class="lnk compare-cat" data-proid="{{ $product->id }}">
                    @if(collect(session('comparison', []))->contains('proid', $product->id))
                        <a onclick="removeFromCompareCategory({{ $product->id }}); return false;"
                           class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark"
                           title="{{ __('staticwords.RemoveFromCompare') }}">
                            <i class="fa fa-signal" aria-hidden="true"></i>
                        </a>
                    @else
                        <a onclick="addToCompareCategory({{ $product->id }}); return false;"
                           class="cursor-pointer icon kal addtocartcus btn"
                           title="{{ __('staticwords.Compare') }}">
                            <i class="fa fa-signal" aria-hidden="true"></i>
                        </a>
                    @endif
                </li>
            </ul>
                    </div>
                    <!-- /.action -->
                </div>
                @elseif($sub->stock != 0 && $product->selling_start_at != null && $current_date >=
                $product->selling_start_at)
                <div class="cart clearfix animate-effect">
                    <div class="action">
                       <ul class="list-unstyled">   
                <!-- Cart button -->
                <li class="add-cart-button btn-group">
                    <form method="POST" action="{{route('add.cart',['id' => $product->id ,'variantid' => $sub->id, 'varprice' => $show_price, 'varofferprice' => $convert_price ,'qty' => $sub->min_order_qty])}}">
                        {{ csrf_field() }}
                        <button class="btn btn-primary icon" type="submit" title="{{ __('staticwords.AddtoCart') }}">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </form>
                </li>
                <!-- Wishlist -->
                @auth
                    <li class="lnk wishlist-cat {{ !empty($ifinwishlist) ? 'active' : '' }}" 
                        data-proid="{{ $product->id }}" 
                        data-type="{{ count($product->subvariants) > 0 ? 'variant' : 'simple' }}" 
                        data-varid="{{ count($product->subvariants) > 0 ? $sub->id : $product->id }}">
                        @if(!empty($ifinwishlist))
                            <a onclick="removeFromWishlistCategory({{ $product->id }}, '{{ count($product->subvariants) > 0 ? 'variant' : 'simple' }}', {{ count($product->subvariants) > 0 ? $sub->id : $product->id }}); return false;"
                               class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark"
                               title="{{ __('staticwords.RemoveFromWishlist') }}">
                                <i class="icon fa fa-heart"></i>
                            </a>
                        @else
                            <a onclick="addToWishlistCategory({{ $product->id }}, '{{ count($product->subvariants) > 0 ? 'variant' : 'simple' }}', {{ count($product->subvariants) > 0 ? $sub->id : $product->id }}); return false;"
                               class="cursor-pointer icon kal addtocartcus btn"
                               title="{{ __('staticwords.AddToWishList') }}">
                                <i class="icon fa fa-heart"></i>
                            </a>
                        @endif
                    </li>
                @endauth
                <!-- Compare -->
                <li class="lnk compare-cat" data-proid="{{ $product->id }}">
                    @if(collect(session('comparison', []))->contains('proid', $product->id))
                        <a onclick="removeFromCompareCategory({{ $product->id }}); return false;"
                           class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark"
                           title="{{ __('staticwords.RemoveFromCompare') }}">
                            <i class="fa fa-signal" aria-hidden="true"></i>
                        </a>
                    @else
                        <a onclick="addToCompareCategory({{ $product->id }}); return false;"
                           class="cursor-pointer icon kal addtocartcus btn"
                           title="{{ __('staticwords.Compare') }}">
                            <i class="fa fa-signal" aria-hidden="true"></i>
                        </a>
                    @endif
                </li>
            </ul>
                    </div>
                    <!-- /.action -->
                </div>
                @endif

                <!-- /.cart -->
            </div>
            <!-- /.product -->
        </div>
    </div>

</div>