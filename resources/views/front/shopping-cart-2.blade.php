@extends('front/layout.master')
@section('title', __('staticwords.ShoppingCart') . ' | Emart ')
@section('body')
    <div class="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">{{ __('staticwords.Home') }}</a></li>
                    <li class='active'>{{ __('staticwords.ShoppingCart') }}</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    @php
        $pro = Session('pro_qty');
        $value = Session::get('cart');
        if (Auth::check()) {
            $count = $cart_table->count();
        } else {
            if (isset($value)) {
                $count = count($value);
            } else {
                $count = 0;
            }
        }
        if (Auth::check()) {
            $usercart = $count;
        } else {
            $usercart = session()->get('cart');
        }
    @endphp
    <div class="container-fluid">
        @if ($usercart > 0 && $usercart != null)
            <div class="row shoppingcart-mainblock" data-sticky-container>
                <div class="col-md-9">
                    @if (Session::has('validcurrency'))
                        <br>
                        <div class="alert alert-danger">
                            <i class="fa fa-info-circle"></i> <b>{{ __('staticwords.Oscur') }}
                                <u>{{ Session::get('currency')['id'] }}</u>
                                {{ __('staticwords.CerrorMsg') }} !</b>
                        </div>
                    @endif
                    <div class="shopping-cart shopping-cart-top">
                        <h2 class="heading-title"><?php echo $count; ?> {{ __('staticwords.Products') }}
                            <span>{{ __('staticwords.inyourcart') }}</span>
                        </h2>
                        <div class="shopping-cart-block">
                            @if (Auth::check())
                                @foreach ($cart_table as $row)
                                    @php
                                        $orivar = $row->variant;
                                    @endphp
                                    @isset($orivar)
                                        <div class="row product">
                                            <div class="col-md-1 col-xs-3">
                                                <div class="select-product">
                                                    @php
                                                        $checkedproducts = '';
                                                        if ($row->active_cart == 1) {
                                                            $checkedproducts = 'checked';
                                                        }
                                                    @endphp
                                                    <input type="checkbox" class= "form-contorl"
                                                        id="selectproduct{{ $row->id }}" name="selectproduct"
                                                        value="{{ $row->active_cart }}" {{ $checkedproducts }}
                                                        onclick="checkuncheckproduct({{ $row->id }})">
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-xs-3">
                                                <div class="cart-image">
                                                    <a class="entry-thumbnail" href="" title="">
                                                        <img class="img-responsive"
                                                            src="{{ url('variantimages/thumbnails/' . $orivar->variantimages['main_image']) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-9">
                                                <div class="cart-product-name-info">
                                                    <h4 class='cart-product-description'>
                                                        <a
                                                            href="{{ App\Helpers\ProductUrl::getUrl($row->variant->id) }}">{{ $row->product->name }}</a>
                                                        <br>
                                                        <small>
                                                            ( {{ variantname($row->variant) }} )
                                                        </small>
                                                    </h4>
                                                    @if (count($row->product->reviews))
                                                        @php
                                                            $review_t = 0;
                                                            $price_t = 0;
                                                            $value_t = 0;
                                                            $sub_total = 0;
                                                            $count = $row->product->reviews()->count();
                                                            foreach ($row->product->reviews as $review) {
                                                                $review_t = $review->price * 5;
                                                                $price_t = $review->price * 5;
                                                                $value_t = $review->value * 5;
                                                                $sub_total =
                                                                    $sub_total + $review_t + $price_t + $value_t;
                                                            }
                                                            $count = $count * 3 * 5;
                                                            if ($count != 0) {
                                                                $rat = $sub_total / $count;
                                                                $ratings_var = ($rat * 100) / 5;
                                                            }
                                                        @endphp
                                                        <div class="pull-left">
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:<?php echo $ratings_var; ?>%"
                                                                    class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @else
                                                        {{ __('No Rating') }}
                                                        <br>
                                                    @endif
                                                    <div class="cart-product-info">
                                                        <span class="product-color"><b>{{ __('staticwords.SoldBy') }}:</b>
                                                            <span>{{ $row->product->store->name ?? '' }}</span></span><br />
                                                        @foreach ($row->variant->main_attr_value as $key => $orivar)
                                                            @php
                                                                $getattrname = App\ProductAttributes::where(
                                                                    'id',
                                                                    $key,
                                                                )->first()->attr_name;
                                                                $getvarvalue = App\ProductValues::where(
                                                                    'id',
                                                                    $orivar,
                                                                )->first();
                                                            @endphp
                                                            <span class="product-color"><b>
                                                                    @php
                                                                        $k = '_';
                                                                    @endphp
                                                                    @if (strpos($getattrname, $k) == false)
                                                                        {{ $getattrname }}:
                                                                    @else
                                                                        {{ str_replace('_', ' ', $getattrname) }}:
                                                                    @endif
                                                                </b>
                                                            </span>
                                                            @if (isset($getvarvalue) &&
                                                                    strcasecmp($getvarvalue->unit_value, $getvarvalue->values) != 0 &&
                                                                    $getvarvalue->unit_value != null)
                                                                @if (
                                                                    $getvarvalue->proattr->attr_name == 'Color' ||
                                                                        $getvarvalue->proattr->attr_name == 'Colour' ||
                                                                        $getvarvalue->proattr->attr_name == 'color' ||
                                                                        $getvarvalue->proattr->attr_name == 'colour')
                                                                    <div class="display-inline">
                                                                        <div class="color-options">
                                                                            <ul>
                                                                                <li title="{{ $getvarvalue->values }}"
                                                                                    class="color varcolor active"><a
                                                                                        href="#" title=""><i
                                                                                            style="color: {{ $getvarvalue->unit_value }}"
                                                                                            class="fa fa-circle"></i></a>
                                                                                    <div class="overlay-image overlay-deactive">
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <span>{{ $getvarvalue->values }}
                                                                        {{ $getvarvalue->unit_value ?? '' }}</span>
                                                                @endif
                                                                <br>
                                                            @else
                                                                <span>{{ $getvarvalue->values }} </span>
                                                                <br>
                                                            @endif
                                                        @endforeach
                                                        <br>
                                                        @if (isset($row->product->cashback_settings) && $row->product->cashback_settings->enable == 1)
                                                            <p
                                                                class="w-100 shadow-sm rounded mb-2 p-1 border border-success text-green">
                                                                {{ __('Congrats ! You can earn cashback in your wallet') }}
                                                                {{ $row->product->cashback_settings->discount_type }}
                                                                @if ($row->product->cashback_settings->cashback_type == 'fix')
                                                                    <i
                                                                        class="{{ session()->get('currency')['value'] }}"></i><b>{{ price_format($row->product->cashback_settings->discount * $conversion_rate) }}</b>
                                                                @else
                                                                    <b>{{ $row->product->cashback_settings->discount . '%' }}</b>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if ($row->variant->stock == 0)
                                                            <h4 class="text-red">{{ __('staticwords.CurrentlyOutofstock') }}
                                                            </h4>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-3">
                                                <div class="cart-product-quantity">
                                                    <div class="quant-input">
                                                        <div class="cart-product-quantity">
                                                            <?php
                                                            $id = $row->variant_id;
                                                            if ($row->variant->max_order_qty == null || $row->variant->max_order_qty == 0 || $row->variant->max_order_qty == '') {
                                                                $product_stock = $row->variant->stock;
                                                            } else {
                                                                $product_stock = $row->variant->max_order_qty;
                                                            }
                                                            ?>
                                                            <input type="number" id="rent-day" data-id="{{ $row->id }}"
                                                                data-type="sp" data-pr="{{ $product_stock }}" name="quantity"
                                                                value="{{ $row->qty }}" price="{{ $row->price_total }}"
                                                                variant="{{ $id }}"
                                                                offerprice="{{ $row->semi_total }}" max="{{ $product_stock }}"
                                                                min="{{ $row->variant->min_order_qty }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-9">
                                                <div class="cart-product-name-info cart-price ">
                                                    <div class="cart-product-name-info cart-price ">
                                                        <div class="price-box cart-product-grand-total cart-product-sub-total">
                                                            @if ($row->semi_total == 0)
                                                                <i
                                                                    class="price {{ session()->get('currency')['value'] }}"></i><span
                                                                    class="price cart-grand-total-price cart-sub-total-price sub_total_{{ $row->id }}"
                                                                    id="{{ $row->id }}">
                                                                    {{ price_format($row->price_total * $conversion_rate, 2) }}
                                                                </span>
                                                            @else
                                                                <i
                                                                    class="price {{ session()->get('currency')['value'] }}"></i><span
                                                                    class="price cart-grand-total-price cart-sub-total-price sub_total_{{ $row->id }}"
                                                                    id="{{ $row->id }}">
                                                                    {{ price_format($row->semi_total * $conversion_rate, 2) }}
                                                                </span>
                                                                <i
                                                                    class="price-strike {{ session()->get('currency')['value'] }}"></i><span
                                                                    class="price-strike"
                                                                    id="strike{{ $row->id }}">{{ sprintf('%.2f', $row->price_total * $conversion_rate, 2) }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Wishlist and Remove Links -->
                                                <div class="romove-item cart-price">
                                                    <ul>
                                                        @if (Auth::user()->wishlist->count() < 1)
                                                            <li>
                                                                <a id="addtowish{{ $row->variant_id }}"
                                                                    onclick="addtowishlist('{{ $row->variant_id }}')"
                                                                    title="Add to wishlist"
                                                                    class="cursor-pointer icon addtowish">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                            </li>
                                                        @else
                                                            @php
                                                                $ifinwishlist = App\Wishlist::where(
                                                                    'user_id',
                                                                    Auth::user()->id,
                                                                )
                                                                    ->where('pro_id', $row->variant_id)
                                                                    ->first();
                                                            @endphp
                                                            @if (!empty($ifinwishlist))
                                                                <li>
                                                                    <a id="removefromwish{{ $row->variant_id }}"
                                                                        onclick="removefromwishlist('{{ $row->variant_id }}')"
                                                                        title="Remove from wishlist"
                                                                        class="cursor-pointer icon removeFrmWish">
                                                                        <i class="fa fa-heart-o"></i>
                                                                    </a>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a id="addtowish{{ $row->variant_id }}"
                                                                        onclick="addtowishlist('{{ $row->variant_id }}')"
                                                                        title="Add to wishlist"
                                                                        class="cursor-pointer icon addtowish">
                                                                        <i class="fa fa-heart-o"></i>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endif
                                                        <li>
                                                            <a href="#"
                                                                onclick="removeFromCart({{ $row->id ?? ($row['variantid'] ?? 0) }}, 'variant')"
                                                                class="icon">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    @endisset
                                    @if ($row->simple_product)
                                        <div class="row product">
                                            <div class="col-md-1 col-xs-3">
                                                <div class="select-product">
                                                    @php
                                                        $checkedproducts = '';
                                                        if ($row->active_cart == 1) {
                                                            $checkedproducts = 'checked';
                                                        }
                                                    @endphp
                                                    <input type="checkbox" class= "form-contorl"
                                                        id="selectproduct{{ $row->id }}" name="selectproduct"
                                                        value="{{ $row->active_cart }}" {{ $checkedproducts }}
                                                        onclick="checkuncheckproduct({{ $row->id }})">
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-xs-3">
                                                <div class="cart-image">
                                                    <a class="entry-thumbnail" href="" title="">
                                                        <img class="img-responsive"
                                                            src="{{ url('images/simple_products/' . $row->simple_product->thumbnail) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-9">
                                                <div class="cart-product-name-info">
                                                    <h4 class='cart-product-description'>
                                                        <a
                                                            href="{{ route('show.product', ['id' => $row->simple_product->id, 'slug' => $row->simple_product->slug]) }}">{{ $row->simple_product->product_name }}</a>
                                                        <br>
                                                    </h4>
                                                    @if (count($row->simple_product->reviews->where('status', '1')))
                                                        @php
                                                            $review_t = 0;
                                                            $price_t = 0;
                                                            $value_t = 0;
                                                            $sub_total = 0;
                                                            $count = $row->simple_product
                                                                ->reviews()
                                                                ->where('status', '1')
                                                                ->count();
                                                            foreach (
                                                                $row->simple_product->reviews->where('status', '1')
                                                                as $review
                                                            ) {
                                                                $review_t = $review->price * 5;
                                                                $price_t = $review->price * 5;
                                                                $value_t = $review->value * 5;
                                                                $sub_total =
                                                                    $sub_total + $review_t + $price_t + $value_t;
                                                            }
                                                            $count = $count * 3 * 5;
                                                            if ($count != 0) {
                                                                $rat = $sub_total / $count;
                                                                $ratings_var = ($rat * 100) / 5;
                                                            }
                                                        @endphp
                                                        <div class="pull-left">
                                                            <div class="star-ratings-sprite">
                                                                <span style="width:<?php echo $ratings_var; ?>%"
                                                                    class="star-ratings-sprite-rating"></span>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @else
                                                        {{ __('No Rating') }}
                                                        <br>
                                                    @endif
                                                    <div class="cart-product-info">
                                                        <span class="product-color"><b>{{ __('staticwords.SoldBy') }}:</b>
                                                            <span>{{ $row->simple_product->store->name }}</span></span>
                                                        @if (isset($row->simple_product->cashback_settings) && $row->simple_product->cashback_settings->enable == 1)
                                                            <p
                                                                class="shadow-sm rounded mb-2 p-1 border border-success text-green">
                                                                {{ __('Congrats ! You can earn cashback in your wallet') }}
                                                                {{ $row->simple_product->cashback_settings->discount_type }}
                                                                @if ($row->simple_product->cashback_settings->cashback_type == 'fix')
                                                                    <i
                                                                        class="{{ session()->get('currency')['value'] }}"></i><b>{{ price_format($row->simple_product->cashback_settings->discount * $conversion_rate) }}</b>
                                                                @else
                                                                    <b>{{ $row->simple_product->cashback_settings->discount . '%' }}</b>
                                                                @endif
                                                            </p>
                                                        @endif
                                                        @if ($row->simple_product->stock == 0)
                                                            <h4 class="text-red">
                                                                {{ __('staticwords.CurrentlyOutofstock') }}</h4>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-3">
                                                <div class="cart-product-quantity">
                                                    <div class="quant-input">
                                                        <div class="cart-product-quantity">
                                                            <?php
                                                            if ($row->simple_product->max_order_qty == null || $row->simple_product->max_order_qty == 0 || $row->simple_product->max_order_qty == '') {
                                                                $product_stock = $row->simple_product->stock;
                                                            } else {
                                                                $product_stock = $row->simple_product->max_order_qty;
                                                            }
                                                            ?>
                                                            <input type="number" id="rent-day"
                                                                data-id="{{ $row->id }}" data-type="sp"
                                                                data-pr="{{ $product_stock }}" name="quantity"
                                                                value="{{ $row->qty }}"
                                                                price="{{ $row->price_total }}"
                                                                variant="{{ $row->id }}"
                                                                offerprice="{{ $row->semi_total }}"
                                                                max="{{ $product_stock }}"
                                                                min="{{ $row->simple_product->min_order_qty }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-9">
                                                <div class="cart-product-name-info cart-price ">
                                                    <div class="cart-product-name-info cart-price ">
                                                        <div
                                                            class="price-box cart-product-grand-total cart-product-sub-total">
                                                            @if ($row->semi_total == 0)
                                                                <i
                                                                    class="price {{ session()->get('currency')['value'] }}"></i><span
                                                                    class="price cart-grand-total-price cart-sub-total-price sub_total_{{ $row->id }}"
                                                                    id="{{ $row->id }}">
                                                                    {{ price_format($row->price_total * $conversion_rate) }}
                                                                </span>
                                                            @else
                                                                <i
                                                                    class="price {{ session()->get('currency')['value'] }}"></i><span
                                                                    class="price cart-grand-total-price cart-sub-total-price sub_total_{{ $row->id }}"
                                                                    id="{{ $row->id }}">
                                                                    {{ price_format($row->semi_total * $conversion_rate) }}
                                                                </span>
                                                                <i
                                                                    class="price-strike {{ session()->get('currency')['value'] }}"></i><span
                                                                    class="price-strike"
                                                                    id="strike{{ $row->id }}">{{ price_format($row->price_total * $conversion_rate) }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="romove-item cart-price ">
                                                    <ul>
                                                        <li>
                                                            <a href="#"
                                                                onclick="removeFromCart({{ $row->id ?? ($row['variantid'] ?? 0) }}, 'variant')"
                                                                class="icon">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- ======================== small screen start ============================= -->
                                    <!-- ======================== ================== ============================= -->
                                    <!-- ====================== small screen end =================== -->
                                    <!-- ======================== ================== ============================= -->
                                    <hr>
                                @endforeach
                            @else
                                @if (!empty(session()->get('cart')))
                                    @foreach ($cts = Session::get('cart') as $ckey => $row)
                                        <form action="#" method="post">
                                            {{ csrf_field() }}
                                            @php
                                                $pro = App\Product::withTrashed()->where('id', $row['pro_id'])->first();
                                                $orivar = App\AddSubVariant::withTrashed()
                                                    ->where('id', '=', $row['variantid'])
                                                    ->first();
                                            @endphp
                                            <div class="row product">
                                                <div class="col-md-1 col-xs-3">
                                                    <div class="cart-image">
                                                        <a class="entry-thumbnail"
                                                            href="{{ App\Helpers\ProductUrl::getUrl($orivar->id) }}"
                                                            title="">
                                                            <img class="img-responsive"
                                                                src="{{ url('/variantimages/thumbnails/' . $orivar->variantimages['main_image']) }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xs-9">
                                                    <div class="cart-product-name-info">
                                                        <h4 class='cart-product-description'><a
                                                                href="{{ App\Helpers\ProductUrl::getUrl($orivar->id) }}"
                                                                title="">{{ $pro->name }}</a></h4>
                                                        <?php
                                                        $reviews = App\UserReview::where('pro_id', $row['pro_id'])->where('status', '1')->get();
                                                        $review_t = 0;
                                                        $price_t = 0;
                                                        $value_t = 0;
                                                        $sub_total = 0;
                                                        $count = count($reviews);
                                                        foreach ($reviews as $review) {
                                                            $review_t = $review->price * 5;
                                                            $price_t = $review->price * 5;
                                                            $value_t = $review->value * 5;
                                                            $sub_total = $sub_total + $review_t + $price_t + $value_t;
                                                        }
                                                        if ($count != 0) {
                                                            $count = $count * 3 * 5;
                                                            $rat = $sub_total / $count;
                                                            $ratings_var = ($rat * 100) / 5;
                                                        }
                                                        ?>
                                                        @if (count($reviews) != 0)
                                                            <div class="pull-left">
                                                                <div class="star-ratings-sprite"><span
                                                                        style="width:<?php echo $ratings_var; ?>%"
                                                                        class="star-ratings-sprite-rating"></span></div>
                                                            </div>
                                                            <br>
                                                        @else
                                                            {{ __('No Rating') }}
                                                        @endif
                                                        <div class="cart-product-info">
                                                            <span
                                                                class="product-color"><b>{{ __('staticwords.SoldBy') }}:</b>
                                                                <span>
                                                                    <?php
                                                                    $store = App\Store::where('id', $pro->store_id)->first();
                                                                    ?>
                                                                    {{ $store->name }}
                                                                </span></span>
                                                            <br>
                                                            @php
                                                                $varinfo = App\AddSubVariant::withTrashed()
                                                                    ->where('id', '=', $row['variantid'])
                                                                    ->first();
                                                            @endphp
                                                            @foreach ($varinfo->main_attr_value as $key => $orivar)
                                                                @php
                                                                    $getattrname = App\ProductAttributes::where(
                                                                        'id',
                                                                        $key,
                                                                    )->first()->attr_name;
                                                                    $getvarvalue = App\ProductValues::where(
                                                                        'id',
                                                                        $orivar,
                                                                    )->first();
                                                                @endphp
                                                                <span class="product-color"><b>
                                                                        @php
                                                                            $k = '_';
                                                                        @endphp
                                                                        @if (strpos($getattrname, $k) == false)
                                                                            {{ $getattrname }}
                                                                        @else
                                                                            {{ str_replace('_', ' ', $getattrname) }}
                                                                        @endif
                                                                    </b>:
                                                                    @if (isset($getvarvalue) &&
                                                                            strcasecmp($getvarvalue->unit_value, $getvarvalue->values) != 0 &&
                                                                            $getvarvalue->unit_value != null)
                                                                        @if (
                                                                            $getvarvalue->proattr->attr_name == 'Color' ||
                                                                                $getvarvalue->proattr->attr_name == 'Colour' ||
                                                                                $getvarvalue->proattr->attr_name == 'color' ||
                                                                                $getvarvalue->proattr->attr_name == 'colour')
                                                                            <div class="display-inline">
                                                                                <div class="color-options">
                                                                                    <ul>
                                                                                        <li title="{{ $getvarvalue->values }}"
                                                                                            class="color varcolor active">
                                                                                            <a href="#"
                                                                                                title=""><i
                                                                                                    style="color: {{ $getvarvalue->unit_value }}"
                                                                                                    class="fa fa-circle"></i></a>
                                                                                            <div
                                                                                                class="overlay-image overlay-deactive">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <span>{{ $getvarvalue->values }}
                                                                                {{ $getvarvalue->unit_value ?? '' }}</span>
                                                                        @endif
                                                                        <br>
                                                                    @else
                                                                        <span>{{ $getvarvalue->values }} </span>
                                                                </span>
                                                                <br>
                                                            @endif
                                    @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-3">
                    <div class="cart-product-quantity">
                        <div class="quant-input">
                            <div class="cart-product-quantity">
                                <?php
                                $s = App\AddSubVariant::withTrashed()->where('id', '=', $row['variantid'])->first();
                                $limit = 0;
                                if ($s->max_order_qty == '' || $s->max_order_qty == null) {
                                    $limit = $s->stock;
                                } else {
                                    $limit = $s->max_order_qty;
                                }
                                ?>
                                <input type="number" onchange="qtych('{{ $row['variantid'] }}')"
                                    id="rent-day{{ $row['variantid'] }}" data-id="{{ $s->products->id }}"
                                    data-type="sp" data-pr="{{ $limit }}" name="quantity"
                                    value="{{ $row['qty'] }}" price="{{ $row['varprice'] }}"
                                    offerprice="{{ $row['varofferprice'] }}" variant="{{ $s->id }}"
                                    max="{{ $limit }}" min="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-9">
                    <div class="cart-product-name-info cart-price text-right">
                        <div class="cart-product-name-info cart-price text-right">
                            @if ($row['varofferprice'] == 0)
                                <div class="price-box cart-product-grand-total cart-product-sub-total">
                                    <i class="price {{ session()->get('currency')['value'] }}"></i><span
                                        class="price cart-grand-total-price cart-sub-total-price"
                                        id="nofferss{{ $row['variantid'] }}">{{ price_format($row['qty'] * $row['varprice'] * $conversion_rate) }}</span>
                                </div>
                            @else
                                <div class="price-box cart-product-grand-total cart-product-sub-total">
                                    <i class="price {{ session()->get('currency')['value'] }}"></i><span
                                        id="offer_p{{ $row['variantid'] }}"
                                        class="price cart-grand-total-price cart-sub-total-price">{{ price_format($row['qty'] * $row['varofferprice'] * $conversion_rate) }}</span>
                                    <i class="price-strike {{ session()->get('currency')['value'] }}"></i><span
                                        class="price-strike" id="nofferss{{ $row['variantid'] }}">
                                        @if (empty($row['varofferprice']))
                                        @else
                                            {{ price_format($row['qty'] * $row['varprice'] * $conversion_rate) }}
                                        @endif
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="romove-item cart-price text-right">
                        <ul>
                            <li>
                                <a href="#"
                                    onclick="removeFromCart({{ $row->id ?? ($row['variantid'] ?? 0) }}, 'variant')"
                                    class="icon">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            </form>
        @endforeach
        @endif
        @endif
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 nogrid-left-one">
            <div class="shopping-cart shopping-cart-widget">
                @if (Session::has('fail'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @if (Auth::check() && App\Cart::isCoupanApplied() == 1)
                    <div class="alert alert-success">
                        <form action="{{ route('removecpn') }}" method="POST">
                            @csrf
                            <button type="submit" class="close" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </form>
                        <b>{{ App\Cart::getCoupanDetail()->code . ' applied successfully !' }}</b>
                    </div>
                @endif
                @if (Session::has('coupanapplied'))
                    <div class="alert alert-success">
                        <form action="{{ route('removecpn') }}" method="POST">
                            @csrf
                            <button type="submit" class="close" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </form>
                        <b>{{ session()->get('coupanapplied')['code'] . ' applied successfully !' }}</b>
                    </div>
                @endif
                <form action="{{ route('apply.cpn') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h4 class="heading-title">{{ __('staticwords.ApplyCouponorVouchers') }}</h4>
                        <input
                            value="@if (App\Cart::getCoupanDetail()) {{ App\Cart::getCoupanDetail()->code }} @elseif(session()->has('coupanapplied')) {{ session()->get('coupanapplied')['code'] }} @endif"
                            required="" class="form-contorl" name="coupon" type="text"
                            placeholder="{{ __('staticwords.Haveacoupon') }}?">
                    </div>
                    <button type="submit" class="btn btn-primary checkout-btn">{{ __('staticwords.APPLY') }}</button>
                </form>
            </div>
        </div>
        <!-- gift cart -->
        <div class="col-md-6 nogrid-left-one">
            <div class="shopping-cart shopping-cart-widget">
                <form action="{{ route('apply.gift') }}" method="POST" class="giftcardform">
                    @csrf
                    <div class="form-group">
                        <h4 class="heading-title">{{ __('Apply Gift Vouchers') }}</h4>
                        <input name="gift" required="" class="form-contorl" type="text"
                            placeholder="{{ __('Gift Vouchers') }}?">
                    </div>
                    <button type="submit" class="btn btn-primary checkout-btn">{{ __('staticwords.APPLY') }}</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-3 nogrid-left" data-sticky data-sticky-for="992" data-margin-top="20">
        <div class="shopping-cart shopping-cart-widget">
            <h2 class="heading-title">{{ __('staticwords.PaymentDetails') }}</h2>
            <div class="cart-shopping-total">
                <div class="cart-sub-total totals-value" id="cart-total">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 value-left">{{ __('staticwords.Subtotal') }}</div>
                        <div class="col-md-6 col-xs-6 value-right">
                            <i class="{{ session()->get('currency')['value'] }}"></i>
                            <span class="" id="show-total">
                                @php
                                    $total = 0;
                                @endphp
                                @guest
                                    @if (Session::has('cart'))
                                        @foreach (Session::get('cart') as $c)
                                            @php
                                                $price = $c['qty'] * ($c['varofferprice'] ?? $c['varprice']);
                                                $total += $price;
                                            @endphp
                                        @endforeach
                                    @endif
                                @else
                                    @php
                                        $cartItems = App\Cart::where('user_id', auth()->id())
                                            ->where('active_cart', 1)
                                            ->get();
                                        $total = $cartItems->sum(fn($c) => $c->semi_total ?? $c->price_total);
                                    @endphp
                                    @endif
                                    {{ number_format($total * ($conversion_rate ?? 1), 2) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @if (!empty(Session::get('gift')['discount']))
                        <div class="cart-sub-total">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 value-left">{{ __('Gift Discount') }}</div>
                                <div class="col-md-6 col-xs-6 value-right">
                                    <b>$</b> {{ Session::get('gift')['discount'] }}
                                </div>
                            </div>
                        </div>
                </div>
                @endif
                <div class="cart-sub-total">
                    <!-- <div class="row">
                                                                                      <div class="col-md-6 col-xs-6 value-left">{{ __('staticwords.Shipping') }}</div>
                                                                                      <div class="col-md-6 col-xs-6 value-right">
                                                                                        <i class="{{ session()->get('currency')['value'] }}"></i>
                                                                                        <span class="" id="shipping">
                                                                                          <?php $shipping = 0; ?>
                                                                                          @if (Auth::check())
                                                                                          @foreach ($cart_table as $key => $cart)
        @if (isset($cart->product) && $cart->product->free_shipping == 0)
        @php
            $def_shipping = get_default_shipping();
            if ($def_shipping->whole_order == 1) {
                $shipping = ShippingPrice::calculateShipping($cart);
            } else {
                $shipping += ShippingPrice::calculateShipping($cart);
            }
        @endphp
        @endif
                                                                                            @if (isset($cart->simple_product) && $cart->simple_product->free_shipping == 0)
        @php
            if (get_default_shipping()->whole_order == 1) {
                $shipping = shippingprice($cart);
            } else {
                $shipping += shippingprice($cart);
            }
        @endphp
        @endif
        @endforeach
                                                                                          @if ($genrals_settings->cart_amount != 0 && $genrals_settings->cart_amount != '')
                                                                                            @if ($total * $conversion_rate >= $genrals_settings->cart_amount * $conversion_rate)
                                                                                              @php
                                                                                                  $shipping = 0;
                                                                                              @endphp
                                                                                            @endif
                                                                                          @endif
    @else
        <?php if(!empty($value)){  ?>
                                                                                          @foreach ($value as $key => $cart)
                                                                                            @php
                                                                                                $pro = App\Product::withTrashed()
                                                                                                    ->where(
                                                                                                        'id',
                                                                                                        '=',
                                                                                                        $cart['pro_id'],
                                                                                                    )
                                                                                                    ->first();
                                                                                                $variant = App\AddSubVariant::withTrashed()
                                                                                                    ->where(
                                                                                                        'id',
                                                                                                        '=',
                                                                                                        $cart[
                                                                                                            'variantid'
                                                                                                        ],
                                                                                                    )
                                                                                                    ->first();
                                                                                                $free_shipping = App\Shipping::where(
                                                                                                    'id',
                                                                                                    $pro->shipping_id,
                                                                                                )->first();
                                                                                            @endphp
                                                                                            @if ($pro->free_shipping == 0)
        @php
            if (!empty($free_shipping)) {
                if ($free_shipping->name == 'Shipping Price') {
                    $weight = App\ShippingWeight::first();
                    $pro_weight = $variant->weight;
                    if ($weight->weight_to_0 >= $pro_weight) {
                        if ($weight->per_oq_0 == 'po') {
                            $shipping = $shipping + $weight->weight_price_0;
                        } else {
                            $shipping = $shipping + $weight->weight_price_0 * $cart['qty'];
                        }
                    } elseif ($weight->weight_to_1 >= $pro_weight) {
                        if ($weight->per_oq_1 == 'po') {
                            $shipping = $shipping + $weight->weight_price_1;
                        } else {
                            $shipping = $shipping + $weight->weight_price_1 * $cart['qty'];
                        }
                    } elseif ($weight->weight_to_2 >= $pro_weight) {
                        if ($weight->per_oq_2 == 'po') {
                            $shipping = $shipping + $weight->weight_price_2;
                        } else {
                            $shipping = $shipping + $weight->weight_price_2 * $cart['qty'];
                        }
                    } elseif ($weight->weight_to_3 >= $pro_weight) {
                        if ($weight->per_oq_3 == 'po') {
                            $shipping = $shipping + $weight->weight_price_3;
                        } else {
                            $shipping = $shipping + $weight->weight_price_3 * $cart['qty'];
                        }
                    } else {
                        if ($weight->per_oq_4 == 'po') {
                            $shipping = $shipping + $weight->weight_price_4;
                        } else {
                            $shipping = $shipping + $weight->weight_price_4 * $cart['qty'];
                        }
                    }
                } else {
                    if ($free_shipping->whole_order == 1) {
                        $shipping = $free_shipping->price;
                    } else {
                        $shipping = $shipping + $free_shipping->price;
                    }
                }
            }
        @endphp
        @endif
                                                                                            @if ($genrals_settings->cart_amount != 0 && $genrals_settings->cart_amount != '')
        @if ($total * $conversion_rate >= $genrals_settings->cart_amount * $conversion_rate)
        @php
            $shipping = 0;
        @endphp
        @endif
        @endif
                                                                                          @if (isset($cart->simple_product))
        @php
            if (get_default_shipping()->whole_order == 1) {
                $shipping = shippingprice($cart);
            } else {
                $shipping += shippingprice($cart);
            }
        @endphp
        @endif
                                                                                          @endforeach
                                                                                          <?php } ?>
                                                                                          @endif
                                                                                          {{ price_format($shipping * $conversion_rate) }}
                                                                                        </span>
                                                                                      </div>
                                                                                    </div> -->
                </div>
                @if (App\Cart::isCoupanApplied() == '1')
                    <div class="cart-sub-total">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 value-left">{{ __('staticwords.Discount') }}</div>
                            <div class="col-md-6 col-xs-6 value-right">
                                - <i class="{{ session()->get('currency')['value'] }}"></i> <span class=""
                                    id="discountedam">
                                    {{ price_format(App\Cart::getDiscount() * $conversion_rate) }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
                @if (Session::has('coupanapplied'))
                    <div class="cart-sub-total">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 value-left">{{ __('staticwords.Discount') }}</div>
                            <div class="col-md-6 col-xs-6 value-right">
                                - <i class="{{ session()->get('currency')['value'] }}"></i> <span class=""
                                    id="discountedam">
                                    {{ price_format(session()->get('coupanapplied')['discount'] * $conversion_rate) }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="cart-grand-total">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 value-left">{{ __('staticwords.GrandTotal') }}</div>
                        <div class="col-md-6 col-xs-6 value-right">
                            @php
                                $total = sprintf('%.2f', $total * $conversion_rate);
                                $shipping = sprintf('%.2f', $shipping * $conversion_rate);
                                if (App\Cart::isCoupanApplied() == '1') {
                                    $gtotal = $shipping + $total - sprintf(App\Cart::getDiscount() * $conversion_rate);
                                } else {
                                    if (Session::get('gift')) {
                                        $gtotal = $shipping + $total - Session::get('gift')['discount'];
                                    } else {
                                        $gtotal = $shipping + $total;
                                    }
                                }
                                if (!Auth::check()) {
                                    if (Session::has('coupanapplied')) {
                                        $gtotal =
                                            $shipping +
                                            $total -
                                            session()->get('coupanapplied')['discount'] * $conversion_rate;
                                    } else {
                                        $gtotal = $shipping + $total;
                                    }
                                }
                                Session::put('shippingrate', $shipping);
                            @endphp
                            <i class="{{ session()->get('currency')['value'] }}"></i> <span class="" id="gtotal">
                                {{ price_format($gtotal) }}
                            </span>
                        </div>
                    </div>
                </div>
                @auth
                    <?php $c = count($cart_table); ?>
                @else
                    <?php $c = count([Session::get('cart')]); ?>
                @endauth
                <div class="cart-checkout-btn">
                    @if (!Session::has('validcurrency'))
                        @if ((!empty($oot) && in_array(0, $oot)) || $c < 1)
                            <form action="{{ url('checkout') }}" method="GET">
                                {{ csrf_field() }}
                                <button type="submit" disabled="disabled" id="proccedtocheckout"
                                    class="btn btn-primary checkout-btn">{{ __('staticwords.PROCCEDTOCHECKOUT') }}
                                </button>
                            </form>
                        @else
                            @if (count([Session::get('cart')]) > 0)
                                <form action="{{ url('checkout') }}" method="GET">
                                    {{ csrf_field() }}
                                    <button type="submit" id="proccedtocheckout"
                                        class="btn btn-primary checkout-btn">{{ __('staticwords.PROCCEDTOCHECKOUT') }}</button>
                                </form>
                            @endif
                        @endif
                    @else
                        <button type="button" id="proccedtocheckout" disabled="disabled"
                            class="btn btn-primary checkout-btn">{{ __('staticwords.PROCCEDTOCHECKOUT') }}</button>
                    @endif
                    @auth
                        {{-- When user logged in empty cart by table --}}
                        <form action="{{ route('empty.cart') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="btn btn-primary checkout-btn">{{ __('staticwords.EmptyCart') }}</button>
                        </form>
                    @else
                        {{-- When user logged in empty cart by session --}}
                        @if (Session::has('cart'))
                            {{-- When user logged in empty cart by session --}}
                            <form action="{{ route('s.cart', md5(uniqid(rand(), true))) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="btn btn-primary checkout-btn">{{ __('staticwords.EmptyCart') }}</button>
                            </form>
                        @endif
                    @endauth
                    <!-- <span class="">Checkout with multiples address!</span> -->
                </div>
            </div>
        </div>
        </div>
        </div>
    @else
        <div class="card">
            <div class="card-body">
                <h2 class="m-1 text-center text-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    {{ __('staticwords.YourShoppingcartisempty') }}</h2>
            </div>
        </div>
        <br>
        @endif
        </div>
    @endsection
@section('script')
    <script>
        "use strict";
        $(function() {
            var conversion_rate = parseFloat('{{ $conversion_rate }}') || 1;
            $('.cart-product-quantity input').change(function() {
                var price = $(this).attr('price');
                var offerprice = $(this).attr('offerprice');
                var variantId = $(this).attr('variant');
            });
            var urlLike = '{{ route('rentdays') }}';
            $("body").on("change keyup", "#rent-day", function(event) {
                event.preventDefault();
                var price = parseFloat($(this).attr('price')) || 0;
                var offerprice = parseFloat($(this).attr('offerprice')) || 0;
                var variantId = $(this).attr('variant');
                var days = $(this).val();
                var productId = $(this).data("id");
                var stockLimit = $(this).data("pr");
                if (days >= stockLimit) {
                    swal({
                        title: "Limit reached",
                        text: 'Max Order quantity limit reached!',
                        icon: 'warning'
                    });
                    return;
                }
                $.ajax({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                        },
                        type: "GET",
                        url: urlLike,
                        data: {
                            days,
                            id: productId,
                            variant_id: variantId,
                            price,
                            offerprice
                        },
                        dataType: 'json',
                    })
                    .done(function(response) {
                        if (!response || typeof response !== 'object') {
                            console.error("Invalid response:", response);
                            return;
                        }
                        let pricetotal = (response.pricetotal || 0) * conversion_rate;
                        $('#show-total').text(pricetotal.toFixed(2));
                        let singletotal = (response.singletotal || 0) * conversion_rate;
                        let noffertotal = (response.noffertotal || 0) * conversion_rate;
                        $('#total_cart').text((response.gtotal || 0 * conversion_rate).toFixed(2));
                        $('#shipping').text((response.shipping || 0) * conversion_rate.toFixed(2));
                        $('#discountedam').text((response.per || 0) * conversion_rate.toFixed(2));
                        $('#gtotal').text((response.gtotal || 0) * conversion_rate.toFixed(2));
                        $('#subtotal').text((response.gtotal || 0) * conversion_rate.toFixed(2));
                        $('#send').val(response.shipping || 0);
                        $('#qty' + response.id).text(days);
                        if (response.singletotal > 0) {
                            $('#offer_p' + response.variant_id).text(singletotal.toFixed(2));
                            $('#nofferss' + response.variant_id).text(noffertotal.toFixed(2));
                        } else {
                            $('#nofferss' + response.variant_id).text(singletotal.toFixed(2));
                        }
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.error("AJAX Error: ", textStatus, errorThrown);
                    });
            });
        });
        function checkuncheckproduct(id) {
            var checkproduct = $('#selectproduct' + id).val();
            if (checkproduct == 1) {
                var activecart = 0;
            } else {
                var activecart = 1;
            }
            $('#selectproduct' + id).val(activecart);
            var grand_total = $("#gtotal").text();
            var subtotal = $(".sub_total_" + id).text();
            if (activecart == 1) {
                var total_amount = parseFloat(grand_total) + parseFloat(subtotal);
            } else {
                var total_amount = parseFloat(grand_total) - parseFloat(subtotal);
            }
            if (total_amount <= 0) {
                $("#gtotal").text(0);
                $("#proccedtocheckout").prop('disabled', true);
            } else {
                $("#proccedtocheckout").prop('disabled', false);
                $("#gtotal").text(total_amount.toFixed(2));
            }
            var updatecart = '{{ url('/UpdateCart') }}';
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                url: updatecart,
                type: 'POST',
                data: {
                    cartstatus: activecart,
                    cart_id: id
                },
                success: function(response) {
                    if (response == 1) {
                        console.log("Success");
                    } else {
                        console.log("Fail");
                    }
                }
            });
        }
        function addtowishlist(id) {
            var addtowishurl = '{{ url('/AddToWishList') }}/' + id;
            $.ajax({
                url: addtowishurl,
                type: 'GET',
                global: false,
                success: function(response) {
                    if (response === 'success') {
                        var wc = Number($('#wishcount').text()) + 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Added",
                            text: 'Added to your wishlist!',
                            icon: 'success'
                        });
                        $('#addtowish' + id).parent().html(
                            '<a id="removefromwish' + id + '" onclick="removefromwishlist(' + id +
                            '); return false;" class="cursor-pointer icon removeFrmWish" title="Remove from wishlist"><i class="fa fa-heart-o"></i></a>'
                        );
                    } else if (response === 'exists') {
                        Swal.fire({
                            title: "Oops!",
                            text: 'Product is already in your wishlist!',
                            icon: 'warning'
                        });
                    } else if (response === 'unauthenticated') {
                        Swal.fire({
                            title: "Login Required",
                            text: 'Please login to use this feature!',
                            icon: 'info'
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: 'Something went wrong!',
                            icon: 'error'
                        });
                    }
                }
            });
        }
        function removefromwishlist(id) {
            var removefromwishurl = '{{ url('removeWishList') }}/' + id;
            $.ajax({
                url: removefromwishurl,
                type: 'GET',
                global: false,
                success: function(response) {
                    if (response === 'deleted') {
                        var wc = Number($('#wishcount').text());
                        wc = wc > 0 ? wc - 1 : 0;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Removed",
                            text: 'Removed from your wishlist!',
                            icon: 'success'
                        });
                        $('#removefromwish' + id).parent().html(
                            '<a id="addtowish' + id + '" onclick="addtowishlist(' + id +
                            '); return false;" class="cursor-pointer icon addtowish" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>'
                        );
                    } else if (response === 'not_found') {
                        Swal.fire({
                            title: "Oops!",
                            text: 'Product was not in your wishlist!',
                            icon: 'warning'
                        });
                    } else if (response === 'unauthenticated') {
                        Swal.fire({
                            title: "Login Required",
                            text: 'Please login to use this feature!',
                            icon: 'info'
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: 'Something went wrong!',
                            icon: 'error'
                        });
                    }
                }
            });
        }
    </script>
    <script>

     function removeFromCart(id, type) {
    // Show confirmation
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to remove this item from cart?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, remove it!'
    }).then((result) => {
        if (result.isConfirmed) {
            var removeFromCartUrl = '{{ url('remove/from/cart/simpleproduct') }}/' + id;
            $.ajax({
                url: removeFromCartUrl,
                type: 'GET',
                global: false,
                beforeSend: function() {
                    // Show loading
                    Swal.fire({
                        title: 'Removing...',
                        text: 'Please wait while we remove the item.',
                        icon: 'info',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        willOpen: () => {
                            Swal.showLoading()
                        }
                    });
                },
                success: function(response) {
                    if (response === 'success' || response.success) {
                        // Update cart count
                        var cartCount = Number($('#cart-count').text());
                        cartCount = cartCount > 0 ? cartCount - 1 : 0;
                        $('#cart-count').text(cartCount);

                        // Update heading count
                        var heading = $('.shopping-cart-top .heading-title');
                        var currentText = heading.text();
                        var currentCount = parseInt(currentText.match(/\d+/)[0]) || 0;
                        currentCount = currentCount > 0 ? currentCount - 1 : 0;
                        heading.html(
                            `${currentCount} {{ __('staticwords.Products') }} <span>{{ __('staticwords.inyourcart') }}</span>`
                        );

                        // Find and remove the product row from DOM
                        $('[data-id="' + id + '"]').closest('.product').fadeOut(300, function() {
                            $(this).remove();

                            // Check if cart is empty
                            if ($('.product').length === 0) {
                                location.reload(); // Reload to show empty cart message
                            } else {
                                // Update totals
                                updateCartTotals();
                            }
                        });

                        Swal.fire({
                            title: 'Removed!',
                            text: 'Item has been removed from your cart.',
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong. Please try again.',
                            icon: 'error'
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error: ", textStatus, errorThrown);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                        icon: 'error'
                    });
                }
            });
        }
    });
}

        function updateCartTotals() {
            // Recalculate subtotal
            var subtotal = 0;
            $('.cart-sub-total-price').each(function() {
                var price = parseFloat($(this).text().replace(/[^\d.-]/g, '')) || 0;
                subtotal += price;
            });
            $('#show-total').text(subtotal.toFixed(2));
            // Update grand total (considering shipping, discounts, etc.)
            var shipping = parseFloat($('#shipping').text().replace(/[^\d.-]/g, '')) || 0;
            var discount = parseFloat($('#discountedam').text().replace(/[^\d.-]/g, '')) || 0;
            var grandTotal = subtotal + shipping - discount;
            $('#gtotal').text(grandTotal.toFixed(2));
            // Disable checkout button if cart is empty or subtotal is 0
            if (subtotal <= 0 || $('.product').length === 0) {
                $('#proccedtocheckout').prop('disabled', true);
            } else {
                $('#proccedtocheckout').prop('disabled', false);
            }
        }
    </script>
@endsection
