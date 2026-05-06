@extends('front.layout.master')
@section('meta_tags')
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="keywords" content="{{ isset($seoset) ? $seoset->metadata_key : '' }}">
    <meta property="og:title" content="{{ isset($seoset) ? $seoset->project_name : config('app.name') }}" />
    <meta property="og:description" content="{{ isset($seoset) ? $seoset->metadata_des : '' }}" />
    <meta property="og:type" content="WebPage" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ url('images/genral/' . $front_logo) }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="{{ url('images/genral/' . $front_logo) }}" />
    <meta name="twitter:description" content="{{ isset($seoset) ? $seoset->metadata_des : '' }}" />
    <meta name="twitter:site" content="{{ url()->current() }}" />
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebPage","description":"{{ isset($seoset) ? $seoset->metadata_des : '' }}","image":"{{ url('images/genral/'.$front_logo) }}"}</script>
@endsection
@section('body')
    @php $home_slider = App\Widgetsetting::where('name', 'slider')->first(); @endphp
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container-fluid">
            <div id="app" class="row no-gutters">
                @if (env('HIDE_SIDEBAR') == 0)
                    <div class="h-100 col-12 col-sm-12 col-md-12 col-lg-12  col-xl-2 sidebar left-sidebar">
                        <div class="side-content">
                            {{-- @extends('front.layout.sidebar') --}}
                            @if (!empty($sidebarcategories['categories']) && count($sidebarcategories['categories']) != 0)
                                <div class="side-menu animate-dropdown mb-2 header-nav-screen">
                                    <div class="head"><i class="icon fa fa-align-left fa-fw"></i> Categories</div>
                                    <nav id="collapseExample" class="collapse show megamenu-horizontal">
                                        <ul class="nav">
                                            <ul class="nav flex-column flex-nowrap overflow-hidden">
                                                @foreach ($sidebarcategories['categories'] as $categorie)
                                                    <li class="nav-item">
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <a role="button" href="javascript:void(0)"
                                                                    onclick="redirectMe('{{ $categorie->id }}', 'p')"
                                                                    class="nav-link text-truncate">
                                                                    @if (!empty($categorie->icon))
                                                                        <i class="fa {{ $categorie->icon }}"></i>
                                                                    @endif
                                                                    <span class="d-inline">
                                                                        @if (is_array($categorie->title))
                                                                            {{ $categorie->title[$data['lang']] ?? $categorie->title }}
                                                                        @else
                                                                            {{ $categorie->title }}
                                                                        @endif
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="col-2">
                                                                <a class="c_icon_plus float-right collapsed nav-link text-truncate"
                                                                    href="#submenu{{ $categorie->id }}"
                                                                    data-toggle="collapse">
                                                                    <i class="fa fa-plus-square-o"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        @if ($categorie->subcategory->count() > 0)
                                                            <div id="submenu{{ $categorie->id }}" class="collapse"
                                                                aria-expanded="false">
                                                                <ul class="flex-column pl-2 nav">
                                                                    @foreach ($categorie->subcategory as $subcategory)
                                                                        <div class="row">
                                                                            <div class="col-10">
                                                                                <a role="button"
                                                                                    class="nav-link text-truncate"
                                                                                    href="javascript:void(0)"
                                                                                    onclick="redirectMe('{{ $subcategory->id }}', 's')">
                                                                                    @if (!empty($subcategory->icon))
                                                                                        <i
                                                                                            class="fa {{ $subcategory->icon }}"></i>
                                                                                    @endif
                                                                                    <span class="d-inline">
                                                                                        {{ $subcategory->title }}
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            @if ($subcategory->childcategory->count() > 0)
                                                                                <div class="col-2">
                                                                                    <a class="c_icon_plus float-right collapsed nav-link text-truncate"
                                                                                        href="#childmenu{{ $subcategory->id }}"
                                                                                        data-toggle="collapse">
                                                                                        <i class="fa fa-plus-square-o"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div id="childmenu{{ $subcategory->id }}"
                                                                                    class="collapse" aria-expanded="false">
                                                                                    <ul class="flex-column nav pl-4">
                                                                                        @foreach ($subcategory->childcategory as $childcategory)
                                                                                            <li class="nav-item">
                                                                                                <a role="button"
                                                                                                    class="nav-link p-1"
                                                                                                    href="javascript:void(0)"
                                                                                                    onclick="redirectMe('{{ $childcategory->id }}', 'c')">
                                                                                                    <i
                                                                                                        class="fa fa-star-o"></i>
                                                                                                    {{ $childcategory->title }}
                                                                                                </a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </ul>
                                    </nav>
                                </div>
                                {{-- <x-sidebar-desktop :guest_price="$data['guest_price']" :login="$data['logged_in']" :lang="$data['lang']" :fallbacklang="$data['fallback_local']" :categories="$sidebarcategories['categories']" /> --}}
                            @else
                                <div class="side-menu animate-dropdown mb-2 header-nav-screen">
                                    <div role="button" class="head">
                                        <i class="icon fa fa-align-left fa-fw"></i> {{ __('staticwords.Categories') }}
                                    </div>
                                    <nav class="megamenu-horizontal">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <div class="row no-gutters p-1">
                                                <div class="col-10">
                                                    <div class="skeleton skeleton-throb"></div>
                                                </div>
                                                @if ($i % 2 != 0)
                                                    <div class="col-2">
                                                        <div class="skeleton skeleton-throb float-right"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                @endif
                                            </div>
                                        @endfor
                                    </nav>
                                </div>
                            @endif
                            <section>
                                @if ($sidebarcategories['specialoffers'] != null && count($sidebarcategories['specialoffers']) != 0)
                                    <div class="mb-lg-2 mb-md-1 mb-sm-1 sidebar-widget">
                                        <h3 class="section-title">Special Offer</h3>
                                        <div class="sidebar-widget-body outer-top-xs">
                                            <div
                                                class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme owl-loaded owl-drag">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                        style="transform: translate3d(-402px, 0px, 0px); transition: all; width: 605px;">
                                                        @foreach ($sidebarcategories['specialoffers'] as $item)
                                                            <div class="owl-item active" style="width: 202.725px;">
                                                                <div class="item">
                                                                    <div class="products special-product">
                                                                        <div class="product">
                                                                            <div class="product-micro">
                                                                                <div class="row product-micro-row">
                                                                                    <div class="col col-5">
                                                                                        <div class="product-image">
                                                                                            <div class="image">
                                                                                                <a
                                                                                                    href="{{ $item['producturl'] }}">
                                                                                                    <img class="owl-lazy"
                                                                                                        data-src="{{ $item['thumbnail'] }}" />
                                                                                                    <img class="owl-lazy hover-image"
                                                                                                        data-src="{{ $item['hover_thumbnail'] }}" />
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col col-6">
                                                                                        <div class="product-info">
                                                                                            <h3 class="name">
                                                                                                <a
                                                                                                    href="{{ $item['producturl'] }}">
                                                                                                    {{ $item['productname'][$sidebarcategories['lang']] ?? $item['productname'][$sidebarcategories['fallback_local']] }}
                                                                                                </a>
                                                                                            </h3>
                                                                                            <div class="pull-left">
                                                                                                @if ($item['rating'] != 0)
                                                                                                    <div
                                                                                                        class="star-ratings-sprite">
                                                                                                        <span
                                                                                                            style="width: {{ $item['rating'] }}%"
                                                                                                            class="star-ratings-sprite-rating"></span>
                                                                                                    </div>
                                                                                                @else
                                                                                                    <div>No Rating</div>
                                                                                                @endif
                                                                                            </div>
                                                                                            <div class="product-price">
                                                                                                <span class="price">
                                                                                                    @if ($item['offerprice'] == 0 || $item['offerprice'] == '0,00')
                                                                                                        <span
                                                                                                            class="price">
                                                                                                            @if ($item['position'] == 'l' || $item['position'] == 'ls')
                                                                                                                <i
                                                                                                                    class="{{ $item['symbol'] }}"></i>
                                                                                                            @endif
                                                                                                            @if ($item['position'] == 'rs')
                                                                                                                &nbsp;
                                                                                                            @endif
                                                                                                            @if ($item['position'] == 'r' || $item['position'] == 'rs')
                                                                                                                <i
                                                                                                                    class="{{ $item['symbol'] }}"></i>
                                                                                                            @endif
                                                                                                            @if ($item['position'] == 'ls')
                                                                                                                &nbsp;
                                                                                                            @endif
                                                                                                            {{ $item['mainprice'] }}
                                                                                                        </span>
                                                                                                    @else
                                                                                                        <span
                                                                                                            class="price">
                                                                                                            <i
                                                                                                                class="{{ $item['symbol'] }}"></i>
                                                                                                            {{ $item['offerprice'] }}
                                                                                                        </span>
                                                                                                        <br>
                                                                                                        <span
                                                                                                            class="price-before-discount">
                                                                                                            @if ($item['position'] == 'l' || $item['position'] == 'ls')
                                                                                                                <i
                                                                                                                    class="{{ $item['symbol'] }}"></i>
                                                                                                            @endif
                                                                                                            @if ($item['position'] == 'rs')
                                                                                                                &nbsp;
                                                                                                            @endif
                                                                                                            @if ($item['position'] == 'r' || $item['position'] == 'rs')
                                                                                                                <i
                                                                                                                    class="{{ $item['symbol'] }}"></i>
                                                                                                            @endif
                                                                                                            @if ($item['position'] == 'ls')
                                                                                                                &nbsp;
                                                                                                            @endif
                                                                                                            {{ $item['mainprice'] }}
                                                                                                        </span>
                                                                                                    @endif
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="owl-nav"><button type="button" role="presentation"
                                                        class="owl-prev disabled"><i
                                                            class="icon fa fa-angle-left"></i></button><button
                                                        type="button" role="presentation" class="owl-next"><i
                                                            class="icon fa fa-angle-right"></i></button></div>
                                                <div class="owl-dots"><button role="button"
                                                        class="owl-dot active"><span></span></button><button
                                                        role="button" class="owl-dot"><span></span></button><button
                                                        role="button" class="owl-dot"><span></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </section>
                            <section>
                                @if ($sidebarcategories['testimonials'] != null && count($sidebarcategories['testimonials']) != 0)
                                    <div class="sidebar-widget advertisement-testimonial"
                                        fallbacklang="{{ $sidebarcategories['fallback_local'] }}">
                                        <div id="advertisement"
                                            class="advertisement custom-carousel owl-carousel owl-theme owl-drag owl-loaded">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                    style="transform: translate3d(0px, 0px, 0px); transition: all; width: 406px;">
                                                    @foreach ($sidebarcategories['testimonials'] as $item)
                                                        <div class="owl-item active" style="width: 202.725px;">
                                                            <div class="item">
                                                                <div class="avatar"><img data-src="{{ $item['image'] }}"
                                                                        class="owl-lazy" src="{{ $item['image'] }}"
                                                                        style="opacity: 1;"></div>
                                                                <div class="testimonials">
                                                                    <em>"</em> {{ $item['des'] }} <em>"</em>
                                                                </div>
                                                                <div class="clients_author">
                                                                    {{ isset($item['name'][$sidebarcategories['lang']]) ? $item['name'][$sidebarcategories['lang']] : $item['name'] }}
                                                                    <span>{{ $item['post'] }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="owl-nav"><button type="button" role="presentation"
                                                    class="owl-prev disabled"><i
                                                        class="icon fa fa-angle-left"></i></button><button type="button"
                                                    role="presentation" class="owl-next"><i
                                                        class="icon fa fa-angle-right"></i></button></div>
                                            <div class="owl-dots"><button role="button"
                                                    class="owl-dot active"><span></span></button><button role="button"
                                                    class="owl-dot"><span></span></button></div>
                                        </div>
                                    </div>
                                @endif
                            </section>
                            {{-- <sidebar-desktop></sidebar-desktop> --}}
                        </div>
                    </div>
                @endif
                <!-- ============================================== SIDEBAR ============================================== -->
                <!-- /.sidemenu-holder -->
                <!-- Start Main -->
                <div
                    class="col-xs-12 col-sm-12 col-md-9  {{ env('HIDE_SIDEBAR') == 1 ? 'col-xl-12' : 'col-xl-10' }} right-sidebar">
                    <div class="main-content homebanner-holder">
                        @if (is_countable($sliders['sliders']) && count($sliders['sliders']) > 0 && $sliders['enable'] == 1)
                            <div id="main-slider" class="owl-z mainslider">
                                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                                    @foreach ($sliders['sliders'] as $slider)
                                        <div class="item" style="background-image: url('{{ $slider['image'] }}');">
                                            <div class="container-fluid">
                                                <div class="caption bg-color vertical-center text-left">
                                                    @if (!empty($slider['heading']))
                                                        <div class="slider-header fadeInDown-1">
                                                            <span style="color: {{ $slider['subheadingcolor'] }}">
                                                                {{ $slider['heading'][$sliders['lang']] ?? $slider['heading'][$sliders['fallbacklang']] }}
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if (!empty($slider['topheading']))
                                                        <div class="big-text fadeInDown-1">
                                                            <span style="color: {{ $slider['headingtextcolor'] }}">
                                                                {{ $slider['topheading'][$sliders['lang']] ?? $slider['topheading'][$sliders['fallbacklang']] }}
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if (!empty($slider['moredesc']))
                                                        <div class="excerpt fadeInDown-2 hidden-xs">
                                                            <span style="color: {{ $slider['descriptionTextColor'] }}">
                                                                {{ $slider['moredesc'] }}
                                                            </span>
                                                        </div>
                                                    @endif
                                                    @if (!empty($slider['buttonname']))
                                                        <div class="button-holder fadeInDown-3">
                                                            <a href="{{ $slider['linkedTo'] }}"
                                                                class="btn-lg btn btn-uppercase shop-now-button"
                                                                style="color: {{ $slider['btntextcolor'] }}; background: {{ $slider['btnbgcolor'] }}">
                                                                {{ $slider['buttonname'][$sliders['lang']] ?? $slider['buttonname'][$sliders['fallbacklang']] }}
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <section id="home-product-tab" class="mb-0 mt-3 home-product-tab-main-block">
                            <div class="container">
                                <div class="row home-product-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item tab-width"><a data-toggle="tab" class="nav-link active"
                                                href="#newproductsM">{{ __('staticwords.newprods') }}</a></li>
                                        <li class="nav-item tab-width"><a class="nav-link" data-toggle="tab"
                                                href="#topcatsM">{{ __('staticwords.tpc') }}</a></li>
                                        <li class="nav-item tab-width"><a class="nav-link" data-toggle="tab"
                                                href="#featuredM">{{ __('staticwords.Featured') }}</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="newproductsM" class="tab-pane fade in show active">
                                            <div class="new-product-block">
                                                <div class="container">
                                                    <div class="row">
                                                        <div style="width:100%"
                                                            class="small-screen-scroll-tabs scroll-tabs outer-top-vs">
                                                            <div class="tab-content outer-top-xs">
                                                                <div class="product-slider">
                                                                    <div class="product-slider-main-block">
                                                                        @if ($newproduct['all']['products'])
                                                                            @include('front.mobile.mobilenewproduct')
                                                                        @else
                                                                            <div class="row no-pad">
                                                                                @for ($i = 0; $i < 10; $i++)
                                                                                    <div class="mt-1 col-6">
                                                                                        <!-- Skeleton Image -->
                                                                                        <div class="b-skeleton-img"></div>
                                                                                        <!-- Skeleton for product name -->
                                                                                        <div class="b-skeleton mt-1"
                                                                                            style="animation: throb; height: 10px; width: 60%;">
                                                                                        </div>
                                                                                        <!-- Skeleton for no rating -->
                                                                                        <div class="b-skeleton"
                                                                                            style="animation: throb; height: 8px; width: 20%;">
                                                                                        </div>
                                                                                        <!-- Skeleton for price -->
                                                                                        <div class="b-skeleton"
                                                                                            style="animation: throb; height: 9px; width: 30%;">
                                                                                        </div>
                                                                                    </div>
                                                                                @endfor
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="topcatsM" class="tab-pane fade in show">
                                            <div class="new-product-block">
                                                <div class="container">
                                                    <div class="row">
                                                        <div style="width:100%"
                                                            class="small-screen-scroll-tabs scroll-tabs outer-top-vs">
                                                            <div class="tab-content outer-top-xs">
                                                                <div class="product-slider">
                                                                    <div class="product-slider-main-block">
                                                                        @if ($topcatgoryproducts)
                                                                            @include('front.mobile.mobiletopproduct')
                                                                        @else
                                                                            <div class="row no-pad">
                                                                                @for ($i = 0; $i < 10; $i++)
                                                                                    <div class="mt-1 col-6">
                                                                                        <!-- Skeleton Image -->
                                                                                        <div class="b-skeleton-img"></div>
                                                                                        <!-- Skeleton for product name -->
                                                                                        <div class="b-skeleton mt-1"
                                                                                            style="animation: throb; height: 10px; width: 60%;">
                                                                                        </div>
                                                                                        <!-- Skeleton for no rating -->
                                                                                        <div class="b-skeleton"
                                                                                            style="animation: throb; height: 8px; width: 20%;">
                                                                                        </div>
                                                                                        <!-- Skeleton for price -->
                                                                                        <div class="b-skeleton"
                                                                                            style="animation: throb; height: 9px; width: 30%;">
                                                                                        </div>
                                                                                    </div>
                                                                                @endfor
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="featuredM" class="tab-pane fade in show">
                                            <div class="new-product-block">
                                                <div class="container">
                                                    <div class="row">
                                                        <div style="width:100%"
                                                            class="small-screen-scroll-tabs scroll-tabs outer-top-vs">
                                                            <div class="tab-content outer-top-xs">
                                                                <div class="product-slider">
                                                                    <div class="product-slider-main-block">
                                                                        @if ($featuredproducts)
                                                                            @include('front.mobile.mobilefeaturedproduct')
                                                                        @else
                                                                            <div class="row no-pad">
                                                                                @for ($i = 0; $i < 10; $i++)
                                                                                    <div class="mt-1 col-6">
                                                                                        <!-- Skeleton Image -->
                                                                                        <div class="b-skeleton-img"></div>
                                                                                        <!-- Skeleton for product name -->
                                                                                        <div class="b-skeleton mt-1"
                                                                                            style="animation: throb; height: 10px; width: 60%;">
                                                                                        </div>
                                                                                        <!-- Skeleton for no rating -->
                                                                                        <div class="b-skeleton"
                                                                                            style="animation: throb; height: 8px; width: 20%;">
                                                                                        </div>
                                                                                        <!-- Skeleton for price -->
                                                                                        <div class="b-skeleton"
                                                                                            style="animation: throb; height: 9px; width: 30%;">
                                                                                        </div>
                                                                                    </div>
                                                                                @endfor
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div>
                            @if ($newproduct['all']['products'])
                                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                                    <div class="more-info-tab clearfix">
                                        <h3 class="new-product-title pull-left"> {{ __('staticwords.newprods') }}</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <ul class="nav nav-tabs nav-tab-line" id="new-products-1">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#all">All</a>
                                                </li>
                                                @foreach ($newproduct['cats'] as $cat)
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab"
                                                            href="#{{ str_replace(' ', '-', $cat['title'][$data['lang']] ?? $cat['title'][$data['fallback_local']]) }}"
                                                            data-id="{{ $cat['id'] }}">
                                                            {{ $cat['title'][$data['lang']] ?? $cat['title'][$data['fallback_local']] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="tab-content outer-top-xs">
                                                <!-- All Tab -->
                                                <div class="tab-pane fade show active" id="all">
                                                    <div class="product-slider">
                                                        <div
                                                            class="owl-carousel home-owl-carousel new-product-carousel custom-carousel owl-theme">
                                                            @foreach ($newproduct['all']['products'] as $product)
                                                                @php
                                                                    $discountedPrice =
                                                                        $product['mainprice'] > 0
                                                                            ? round(
                                                                                    (100 *
                                                                                        ($product['mainprice'] -
                                                                                            $product['offerprice'])) /
                                                                                        $product['mainprice'],
                                                                                ) . '%'
                                                                            : '0%';
                                                                    $starbadge = false;
                                                                    $baseurl = url('/');
                                                                @endphp
                                                                <div class="item item-carousel">
                                                                    @if (!$starbadge && is_array($product['sale_tag']) && isset($product['sale_tag'][$data['lang']]))
                                                                        <div class="ribbon ribbon-top-right">
                                                                            <span
                                                                                style="background: {{ $product['sale_tag_color'] }}; color: {{ $product['sale_tag_text_color'] }}">
                                                                                {{ $product['sale_tag'][$data['lang']] ?? $product['sale_tag'][$data['fallback_local']] }}
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    <div class="products">
                                                                        {{-- Ribbon for Sale Tag --}}
                                                                        {{-- Star Badge for Featured Products --}}
                                                                        @if ($starbadge && $product['featured'] == 1)
                                                                            <div class="starBadge">
                                                                                <div class="ribbon2 down"
                                                                                    style="color: #fd9c2e;">
                                                                                    <div class="content2">
                                                                                        <svg width="24px" height="24px"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            data-prefix="far"
                                                                                            data-icon="star"
                                                                                            class="svg-inline--fa fa-star fa-w-18"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path fill="currentColor"
                                                                                                d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        <div class="product">
                                                                            @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                <div class="badges bg-priamry">
                                                                                    <span>OFF
                                                                                        <span>{{ $discountedPrice }}</span></span>
                                                                                </div>
                                                                            @endif
                                                                            <div class="product-image">
                                                                                <div
                                                                                    class="{{ $product['stock'] == 0 ? 'pro-img-box' : '' }} image">
                                                                                    <a href="{{ $product['producturl'] }}"
                                                                                        title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}">
                                                                                        {{-- Thumbnail Image --}}
                                                                                        @if (!empty($product['thumbnail']))
                                                                                            <span>
                                                                                                <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                    data-src="{{ $product['thumbnail'] }}"
                                                                                                    alt="product_image" />
                                                                                                <img class="owl-lazy hover-image {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                    data-src="{{ $product['hover_thumbnail'] }}"
                                                                                                    alt="product_image" />
                                                                                                {{-- Offer Badge --}}
                                                                                                @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                                    <div
                                                                                                        class="badges bg-priamry">
                                                                                                        <span>OFF<span>{{ $discountedPrice }}</span></span>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </span>
                                                                                        @else
                                                                                            {{-- Fallback Image --}}
                                                                                            <span>
                                                                                                <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                    title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}"
                                                                                                    src="{{ $baseurl . '/images/no-image.png' }}"
                                                                                                    alt="No Image" />
                                                                                            </span>
                                                                                        @endif
                                                                                    </a>
                                                                                </div>
                                                                                @if ($product['stock'] == 0)
                                                                                    <h6 text-align="center"
                                                                                        class="oottext">
                                                                                        <span>{{ __('staticwords.Outofstock') }}</span>
                                                                                    </h6>
                                                                                @endif
                                                                                @if (isset($product['pre_order']) && $product['pre_order'] == 1 && $product['product_avbl_date'] >= now())
                                                                                    <h6 text-align="center"
                                                                                        class="preordertext">
                                                                                        <span>{{ __('staticwords.Available for preorder') }}</span>
                                                                                    </h6>
                                                                                @endif
                                                                                @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                    <h6 text-align="center"
                                                                                        class="oottext2">
                                                                                        <span>{{ __('staticwords.ComingSoon') }}</span>
                                                                                    </h6>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-info"
                                                                                class="{{ app()->getLocale() == 'rtl' ? 'text-right' : 'text-left' }}">
                                                                                <h3 class="text-truncate name">
                                                                                    <a
                                                                                        href="{{ $product['producturl'] }}">
                                                                                        {{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}
                                                                                    </a>
                                                                                </h3>
                                                                                @if ($product['rating'] != 0)
                                                                                    <div
                                                                                        class="{{ app()->getLocale() == 'rtl' ? 'float-right' : 'float-left' }}">
                                                                                        <div class="star-ratings-sprite">
                                                                                            <span
                                                                                                class="star-ratings-sprite-rating"
                                                                                                style="width: {{ $product['rating'] }}%"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                @else
                                                                                    <div class="no-rating">No Rating
                                                                                    </div>
                                                                                @endif
                                                                                <!-- Product-price -->
                                                                                <div class="product-price">
                                                                                    <span class="price">
                                                                                        @if ($product['offerprice'] == 0 || $product['offerprice'] == '0,00')
                                                                                            <span class="price">
                                                                                                @if ($product['position'] == 'rs')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                <i
                                                                                                    @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                {{ $product['mainprice'] }}
                                                                                                <i
                                                                                                    @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                @if ($product['position'] == 'ls')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                            </span>
                                                                                        @else
                                                                                            <span class="price">
                                                                                                <i
                                                                                                    @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                @if ($product['position'] == 'ls')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                @if ($product['position'] == 'rs')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                <i
                                                                                                    @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                {{ $product['offerprice'] }}
                                                                                            </span>
                                                                                            <span
                                                                                                class="price-before-discount">
                                                                                                <i
                                                                                                    @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                @if ($product['position'] == 'ls')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                @if ($product['position'] == 'rs')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                <i
                                                                                                    @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                {{ $product['mainprice'] }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </span>
                                                                                </div>
                                                                                <!-- /.product-price -->
                                                                            </div>
                                                                            @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                <div>
                                                                                    {{-- Your content here --}}
                                                                                </div>
                                                                            @elseif (isset($product['pre_order']) &&
                                                                                    $product['pre_order'] == 1 &&
                                                                                    isset($product['product_avbl_date']) &&
                                                                                    $product['product_avbl_date'] >= now())
                                                                                <div>
                                                                                    {{-- Your content for pre-order --}}
                                                                                </div>
                                                                            @else
                                                                                @if ($product['stock'] != 0)
                                                                                    <div
                                                                                        class="cart clearfix animate-effect">
                                                                                        <div class="action">
                                                                                            <ul class="list-unstyled">
                                                                                                <!-- Cart condition -->
                                                                                                <li id="addCart"
                                                                                                    class="lnk wishlist">
                                                                                                    <form
                                                                                                        action="{{ $product['cartURL'] }}"
                                                                                                        method="POST">
                                                                                                        @csrf
                                                                                                        <button
                                                                                                            title="{{ __('staticwords.AddtoCart') }}"
                                                                                                            type="submit"
                                                                                                            class="addtocartcus btn">
                                                                                                            <i
                                                                                                                class="fa fa-shopping-cart"></i>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </li>
                                                                                                <!-- Wishlist -->
                                                                                                {{-- @if ($data['logged_in'] == 1)
                                                                                                    <li
                                                                                                        class="lnk wishlist {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}">
                                                                                                        <!-- Variant product add to cart system -->
                                                                                                        @if ($product['product_type'] == 'variant')
                                                                                                            <form
                                                                                                                action="{{ route('add.pro.wishlist', $product['variantid']) }}"
                                                                                                                method="GET">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="addtocartcus btn {{ $product['is_in_wishlist'] == 1 ? 'text-dark' : '' }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </button>
                                                                                                            </form>
                                                                                                        @else
                                                                                                            <!-- Simple product add to cart system -->
                                                                                                            <form
                                                                                                                action="{{ route('add.simple.pro.in.wishlist') }}"
                                                                                                                method="GET">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    name="proid"
                                                                                                                    value="{{ $product['productid'] }}">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="addtocartcus btn {{ $product['is_in_wishlist'] == 1 ? 'text-dark' : '' }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </button>
                                                                                                            </form>
                                                                                                        @endif
                                                                                                    </li>
                                                                                                @endif --}}
                                                                                                <!-- Wishlist -->
                                                                                                <!-- Wishlist -->
                                                                                                @if ($data['logged_in'] == 1)
                                                                                                    <li
                                                                                                        class="lnk wishlist {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}">
                                                                                                        @if ($product['is_in_wishlist'] == 1)
                                                                                                            <a id="removefromwish{{ $product['productid'] }}"
                                                                                                                onclick="removeFromWishlist({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark"
                                                                                                                title="{{ __('staticwords.RemoveFromWishlist') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-heart"></i>
                                                                                                            </a>
                                                                                                        @else
                                                                                                            <a id="addtowish{{ $product['productid'] }}"
                                                                                                                onclick="addToWishlist({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer icon kal addtocartcus btn"
                                                                                                                title="{{ __('staticwords.AddToWishlist') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-heart"></i>
                                                                                                            </a>
                                                                                                        @endif
                                                                                                    </li>
                                                                                                @endif
                                                                                                <!-- Compare -->
                                                                                                <!-- Compare -->
                                                                                                <li class="lnk">
                                                                                                    @if (collect(session('comparison', []))->contains('proid', $product['productid']))
                                                                                                        <a id="removefromcompare{{ $product['productid'] }}"
                                                                                                            onclick="removeFromCompare({{ $product['productid'] }}); return false;"
                                                                                                            class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark"
                                                                                                            title="{{ __('staticwords.RemoveFromCompare') }}">
                                                                                                            <i
                                                                                                                class="fa fa-signal"></i>
                                                                                                        </a>
                                                                                                    @else
                                                                                                        <a id="addtocompare{{ $product['productid'] }}"
                                                                                                            onclick="addToCompare({{ $product['productid'] }}); return false;"
                                                                                                            class="cursor-pointer icon kal addtocartcus btn"
                                                                                                            title="{{ __('staticwords.Compare') }}">
                                                                                                            <i
                                                                                                                class="fa fa-signal"></i>
                                                                                                        </a>
                                                                                                    @endif
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!-- /.action -->
                                                                                    </div>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Clothing Tab -->
                                                @foreach ($newproduct['cats'] as $cat)
                                                    <div class="tab-pane fade"
                                                        id="{{ str_replace(' ', '-', $cat['title'][$data['lang']] ?? $cat['title'][$data['fallback_local']]) }}">
                                                        <div class="product-slider">
                                                            <div
                                                                class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                                                @php
                                                                    $products = app(
                                                                        'App\Http\Controllers\Web\HomeController',
                                                                    )->getProducts($cat['id']);
                                                                @endphp
                                                                @foreach ($products as $product)
                                                                    @php
                                                                        $discountedPrice =
                                                                            $product['mainprice'] > 0
                                                                                ? round(
                                                                                        (100 *
                                                                                            ($product['mainprice'] -
                                                                                                $product[
                                                                                                    'offerprice'
                                                                                                ])) /
                                                                                            $product['mainprice'],
                                                                                    ) . '%'
                                                                                : '0%';
                                                                        $starbadge = false;
                                                                        $baseurl = url('/');
                                                                    @endphp
                                                                    <div class="item item-carousel">
                                                                        @if (!$starbadge && is_array($product['sale_tag']) && isset($product['sale_tag'][$data['lang']]))
                                                                            <div class="ribbon ribbon-top-right">
                                                                                <span
                                                                                    style="background: {{ $product['sale_tag_color'] }}; color: {{ $product['sale_tag_text_color'] }}">
                                                                                    {{ $product['sale_tag'][$data['lang']] ?? $product['sale_tag'][$data['fallback_local']] }}
                                                                                </span>
                                                                            </div>
                                                                        @endif
                                                                        <div class="products">
                                                                            {{-- Ribbon for Sale Tag --}}
                                                                            {{-- Star Badge for Featured Products --}}
                                                                            @if ($starbadge && $product['featured'] == 1)
                                                                                <div class="starBadge">
                                                                                    <div class="ribbon2 down"
                                                                                        style="color: #fd9c2e;">
                                                                                        <div class="content2">
                                                                                            <svg width="24px"
                                                                                                height="24px"
                                                                                                aria-hidden="true"
                                                                                                focusable="false"
                                                                                                data-prefix="far"
                                                                                                data-icon="star"
                                                                                                class="svg-inline--fa fa-star fa-w-18"
                                                                                                role="img"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 576 512">
                                                                                                <path fill="currentColor"
                                                                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            <div class="product">
                                                                                @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                    <div class="badges bg-priamry">
                                                                                        <span>OFF
                                                                                            <span>{{ $discountedPrice }}</span></span>
                                                                                    </div>
                                                                                @endif
                                                                                <div class="product-image">
                                                                                    <div
                                                                                        class="{{ $product['stock'] == 0 ? 'pro-img-box' : '' }} image">
                                                                                        <a href="{{ $product['producturl'] }}"
                                                                                            title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}">
                                                                                            {{-- Thumbnail Image --}}
                                                                                            @if (!empty($product['thumbnail']))
                                                                                                <span>
                                                                                                    <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                        data-src="{{ $product['thumbnail'] }}"
                                                                                                        alt="product_image" />
                                                                                                    <img class="owl-lazy hover-image {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                        data-src="{{ $product['hover_thumbnail'] }}"
                                                                                                        alt="product_image" />
                                                                                                    {{-- Offer Badge --}}
                                                                                                    @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                                        <div
                                                                                                            class="badges bg-priamry">
                                                                                                            <span>OFF<span>{{ $discountedPrice }}</span></span>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </span>
                                                                                            @else
                                                                                                {{-- Fallback Image --}}
                                                                                                <span>
                                                                                                    <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                        title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}"
                                                                                                        src="{{ $baseurl . '/images/no-image.png' }}"
                                                                                                        alt="No Image" />
                                                                                                </span>
                                                                                            @endif
                                                                                        </a>
                                                                                    </div>
                                                                                    @if ($product['stock'] == 0)
                                                                                        <h6 text-align="center"
                                                                                            class="oottext">
                                                                                            <span>{{ __('staticwords.Outofstock') }}</span>
                                                                                        </h6>
                                                                                    @endif
                                                                                    @if (isset($product['pre_order']) && $product['pre_order'] == 1 && $product['product_avbl_date'] >= now())
                                                                                        <h6 text-align="center"
                                                                                            class="preordertext">
                                                                                            <span>{{ __('staticwords.Available for preorder') }}</span>
                                                                                        </h6>
                                                                                    @endif
                                                                                    @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                        <h6 text-align="center"
                                                                                            class="oottext2">
                                                                                            <span>{{ __('staticwords.ComingSoon') }}</span>
                                                                                        </h6>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="product-info"
                                                                                    class="{{ app()->getLocale() == 'rtl' ? 'text-right' : 'text-left' }}">
                                                                                    <h3 class="text-truncate name">
                                                                                        <a
                                                                                            href="{{ $product['producturl'] }}">
                                                                                            {{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}
                                                                                        </a>
                                                                                    </h3>
                                                                                    @if ($product['rating'] != 0)
                                                                                        <div
                                                                                            class="{{ app()->getLocale() == 'rtl' ? 'float-right' : 'float-left' }}">
                                                                                            <div
                                                                                                class="star-ratings-sprite">
                                                                                                <span
                                                                                                    class="star-ratings-sprite-rating"
                                                                                                    style="width: {{ $product['rating'] }}%"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    @else
                                                                                        <div class="no-rating">No Rating
                                                                                        </div>
                                                                                    @endif
                                                                                    <!-- Product-price -->
                                                                                    <div class="product-price">
                                                                                        <span class="price">
                                                                                            @if ($product['offerprice'] == 0 || $product['offerprice'] == '0,00')
                                                                                                <span class="price">
                                                                                                    @if ($product['position'] == 'rs')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    {{ $product['mainprice'] }}
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    @if ($product['position'] == 'ls')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                </span>
                                                                                            @else
                                                                                                <span class="price">
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    @if ($product['position'] == 'ls')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    @if ($product['position'] == 'rs')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    {{ $product['offerprice'] }}
                                                                                                </span>
                                                                                                <span
                                                                                                    class="price-before-discount">
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    @if ($product['position'] == 'ls')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    @if ($product['position'] == 'rs')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    {{ $product['mainprice'] }}
                                                                                                </span>
                                                                                            @endif
                                                                                        </span>
                                                                                    </div>
                                                                                    <!-- /.product-price -->
                                                                                </div>
                                                                                @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                    <div>
                                                                                        {{-- Your content here --}}
                                                                                    </div>
                                                                                @elseif (isset($product['pre_order']) &&
                                                                                        $product['pre_order'] == 1 &&
                                                                                        isset($product['product_avbl_date']) &&
                                                                                        $product['product_avbl_date'] >= now())
                                                                                    <div>
                                                                                        {{-- Your content for pre-order --}}
                                                                                    </div>
                                                                                @else
                                                                                    @if ($product['stock'] != 0)
                                                                                        <div
                                                                                            class="cart clearfix animate-effect">
                                                                                            <div class="action">
                                                                                                <ul class="list-unstyled">
                                                                                                    <!-- Cart condition -->
                                                                                                    <li id="addCart"
                                                                                                        class="lnk wishlist">
                                                                                                        <form
                                                                                                            action="{{ $product['cartURL'] }}"
                                                                                                            method="POST">
                                                                                                            @csrf
                                                                                                            <button
                                                                                                                title="{{ __('staticwords.AddtoCart') }}"
                                                                                                                type="submit"
                                                                                                                class="addtocartcus btn">
                                                                                                                <i
                                                                                                                    class="fa fa-shopping-cart"></i>
                                                                                                            </button>
                                                                                                        </form>
                                                                                                    </li>
                                                                                                    <!-- Wishlist -->
                                                                                                    {{-- @if ($data['logged_in'] == 1)
                                                                                                <li
                                                                                                    class="lnk wishlist {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}">
                                                                                                    <!-- Variant product add to cart system -->
                                                                                                    @if ($product['product_type'] == 'variant')
                                                                                                        <form
                                                                                                            action="{{ route('add.pro.wishlist', $product['variantid']) }}"
                                                                                                            method="GET">
                                                                                                            <button
                                                                                                                type="submit"
                                                                                                                class="addtocartcus btn {{ $product['is_in_wishlist'] == 1 ? 'text-dark' : '' }}">
                                                                                                                <i
                                                                                                                    class="fa fa-heart"></i>
                                                                                                            </button>
                                                                                                        </form>
                                                                                                    @else
                                                                                                        <!-- Simple product add to cart system -->
                                                                                                        <form
                                                                                                            action="{{ route('add.simple.pro.in.wishlist') }}"
                                                                                                            method="GET">
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="proid"
                                                                                                                value="{{ $product['productid'] }}">
                                                                                                            <button
                                                                                                                type="submit"
                                                                                                                class="addtocartcus btn {{ $product['is_in_wishlist'] == 1 ? 'text-dark' : '' }}">
                                                                                                                <i
                                                                                                                    class="fa fa-heart"></i>
                                                                                                            </button>
                                                                                                        </form>
                                                                                                    @endif
                                                                                                </li>
                                                                                            @endif --}}
                                                                                                    <!-- Wishlist -->
                                                                                                    <!-- Wishlist -->
                                                                                                    @if ($data['logged_in'] == 1)
                                                                                                        <li
                                                                                                            class="lnk wishlist {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}">
                                                                                                            @if ($product['is_in_wishlist'] == 1)
                                                                                                                <a id="removefromwish{{ $product['productid'] }}"
                                                                                                                    onclick="removeFromWishlist({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                    class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark"
                                                                                                                    title="{{ __('staticwords.RemoveFromWishlist') }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </a>
                                                                                                            @else
                                                                                                                <a id="addtowish{{ $product['productid'] }}"
                                                                                                                    onclick="addToWishlist({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                    class="cursor-pointer icon kal addtocartcus btn"
                                                                                                                    title="{{ __('staticwords.AddToWishlist') }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </a>
                                                                                                            @endif
                                                                                                        </li>
                                                                                                    @endif
                                                                                                    <!-- Compare -->
                                                                                                    <!-- Compare -->
                                                                                                    <li class="lnk">
                                                                                                        @if (collect(session('comparison', []))->contains('proid', $product['productid']))
                                                                                                            <a id="removefromcompare{{ $product['productid'] }}"
                                                                                                                onclick="removeFromCompare({{ $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark"
                                                                                                                title="{{ __('staticwords.RemoveFromCompare') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-signal"></i>
                                                                                                            </a>
                                                                                                        @else
                                                                                                            <a id="addtocompare{{ $product['productid'] }}"
                                                                                                                onclick="addToCompare({{ $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer icon kal addtocartcus btn"
                                                                                                                title="{{ __('staticwords.Compare') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-signal"></i>
                                                                                                            </a>
                                                                                                        @endif
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <!-- /.action -->
                                                                                        </div>
                                                                                    @endif
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                @php
                                    $items = range(1, 6);
                                @endphp
                                @foreach ($items as $index => $item)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image p-2">
                                                        <div class="skeleton skeleton-img" style="height: 250px;"></div>
                                                    </div>
                                                </div>
                                                <div class="product-info p-1">
                                                    <h3 class="name">
                                                        <div class="skeleton skeleton-text"
                                                            style="animation: throb; height: 10px; width: 60%;"></div>
                                                        <!-- product name -->
                                                    </h3>
                                                    <div class="no-rating">
                                                        <div class="skeleton skeleton-text"
                                                            style="animation: throb; height: 8px; width: 20%;"></div>
                                                        <!-- no rating -->
                                                    </div>
                                                    <div class="product-price mt-2">
                                                        <div class="skeleton skeleton-text"
                                                            style="animation: throb; height: 9px; width: 30%;"></div>
                                                        <!-- price -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        @if (!empty($blogs))
                            <section class="mt-2 section latest-blog">
                                {{-- <a title="View all posts" href="{{ url('blog') }}"
                                        class="pull-right btn btn-md btn-info">View All</a> --}}
                                <h3 class="section-title">Latest From Blog</h3>
                                <div class="blog-slider-container outer-top-xs">
                                    <div
                                        class="owl-responsive owl-carousel blog-slider custom-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1227px;">
                                                @foreach ($blogs as $blog)
                                                    <div class="owl-item active" style="width: 408.887px;">
                                                        <div class="item">
                                                            <div class="blog-post">
                                                                <div class="blog-post-image">
                                                                    <div class="image">
                                                                        <a title="{{ $blog['heading'] }}"
                                                                            href="{{ $blog->url }}">
                                                                            <img src="{{ $blog->image }}"
                                                                                alt="{{ $blog->image }}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="blog-post-info text-left">
                                                                    <h3 class="name"><a
                                                                            href="{{ $blog->url }}">{{ $blog->heading }}</a>
                                                                    </h3> <span class="info">By:
                                                                        {{ $blog->user }}
                                                                        &nbsp;|&nbsp;
                                                                        {{ $blog->created_on }} |
                                                                        {{ $blog->read_time }}</span>
                                                                    <p class="text">
                                                                        {{ strlen($blog->des ?? '') > 150 ? substr($blog->des ?? '', 0, 150) . '...' : $blog->des ?? '' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled"><button type="button" role="presentation"
                                                class="owl-prev disabled"><i
                                                    class="icon fa fa-angle-left"></i></button><button type="button"
                                                role="presentation" class="owl-next disabled"><i
                                                    class="icon fa fa-angle-right"></i></button></div>
                                        <div class="owl-dots disabled"><button role="button"
                                                class="owl-dot active"><span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                        <div>
                            <div class="mt-2 top_cat_header feature-product-block">
                                <h3 class="cat_title">{{ __('staticwords.tpc') }}</h3>
                            </div>
                            @if ($topcatgoryproducts)
                                @foreach ($topcatgoryproducts as $topproduct)
                                    <section class="section-random2 section new-arriavls feature-product-block mt-0">
                                        <h3 class="section-title">
                                            {{ $topproduct['category_name'][$data['lang']] ?? $topproduct['category_name']['en'] }}
                                        </h3>
                                        <div>
                                            <div>
                                                <div
                                                    class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs owl-loaded owl-drag">
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage"
                                                            style="transform: translate3d(0px, 0px, 0px); transition: all; width: 3463px;">
                                                            @foreach ($topproduct['products'] as $product)
                                                                @php
                                                                    $discountedPrice =
                                                                        $product['mainprice'] > 0
                                                                            ? round(
                                                                                    (100 *
                                                                                        ($product['mainprice'] -
                                                                                            $product['offerprice'])) /
                                                                                        $product['mainprice'],
                                                                                ) . '%'
                                                                            : '0%';
                                                                    $starbadge = false;
                                                                    $baseurl = url('/');
                                                                @endphp
                                                                <div class="owl-item active"
                                                                    style="width: 236px; margin-right: 10px;">
                                                                    <div class="item item-carousel"><!---->
                                                                        @if (!empty($product->sale_tag) && !empty($product->sale_tag[$data['lang']]))
                                                                            <div class="ribbon ribbon-top-right">
                                                                                <span
                                                                                    style="background: {{ $product['sale_tag_color'] }}; color: {{ $product['sale_tag_text_color'] }};">
                                                                                    {{ $product['sale_tag'][$data['lang']] ?? ($product['sale_tag'][$data['fallback_local']] ?? '') }}
                                                                                </span>
                                                                            </div>
                                                                        @endif
                                                                        <div class="products">
                                                                            {{-- Ribbon for Sale Tag --}}
                                                                            {{-- Star Badge for Featured Products --}}
                                                                            @if ($starbadge && $product['featured'] == 1)
                                                                                <div class="starBadge">
                                                                                    <div class="ribbon2 down"
                                                                                        style="color: #fd9c2e;">
                                                                                        <div class="content2">
                                                                                            <svg width="24px"
                                                                                                height="24px"
                                                                                                aria-hidden="true"
                                                                                                focusable="false"
                                                                                                data-prefix="far"
                                                                                                data-icon="star"
                                                                                                class="svg-inline--fa fa-star fa-w-18"
                                                                                                role="img"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 576 512">
                                                                                                <path fill="currentColor"
                                                                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            <div class="product">
                                                                                @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                    <div class="badges bg-priamry">
                                                                                        <span>OFF
                                                                                            <span>{{ $discountedPrice }}</span></span>
                                                                                    </div>
                                                                                @endif
                                                                                <div class="product-image">
                                                                                    <div
                                                                                        class="{{ $product['stock'] == 0 ? 'pro-img-box' : '' }} image">
                                                                                        <a href="{{ $product['producturl'] }}"
                                                                                            title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}">
                                                                                            {{-- Thumbnail Image --}}
                                                                                            @if (!empty($product['thumbnail']))
                                                                                                <span>
                                                                                                    <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                        data-src="{{ $product['thumbnail'] }}"
                                                                                                        alt="product_image" />
                                                                                                    <img class="owl-lazy hover-image {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                        data-src="{{ $product['hover_thumbnail'] }}"
                                                                                                        alt="product_image" />
                                                                                                    {{-- Offer Badge --}}
                                                                                                    @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                                        <div
                                                                                                            class="badges bg-priamry">
                                                                                                            <span>OFF<span>{{ $discountedPrice }}</span></span>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </span>
                                                                                            @else
                                                                                                {{-- Fallback Image --}}
                                                                                                <span>
                                                                                                    <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                        title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}"
                                                                                                        src="{{ $baseurl . '/images/no-image.png' }}"
                                                                                                        alt="No Image" />
                                                                                                </span>
                                                                                            @endif
                                                                                        </a>
                                                                                    </div>
                                                                                    @if ($product['stock'] == 0)
                                                                                        <h6 text-align="center"
                                                                                            class="oottext">
                                                                                            <span>{{ __('staticwords.Outofstock') }}</span>
                                                                                        </h6>
                                                                                    @endif
                                                                                    @if (isset($product['pre_order']) && $product['pre_order'] == 1 && $product['product_avbl_date'] >= now())
                                                                                        <h6 text-align="center"
                                                                                            class="preordertext">
                                                                                            <span>{{ __('staticwords.Available for preorder') }}</span>
                                                                                        </h6>
                                                                                    @endif
                                                                                    @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                        <h6 text-align="center"
                                                                                            class="oottext2">
                                                                                            <span>{{ __('staticwords.ComingSoon') }}</span>
                                                                                        </h6>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="product-info"
                                                                                    class="{{ app()->getLocale() == 'rtl' ? 'text-right' : 'text-left' }}">
                                                                                    <h3 class="text-truncate name">
                                                                                        <a
                                                                                            href="{{ $product['producturl'] }}">
                                                                                            {{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}
                                                                                        </a>
                                                                                    </h3>
                                                                                    @if ($product['rating'] != 0)
                                                                                        <div
                                                                                            class="{{ app()->getLocale() == 'rtl' ? 'float-right' : 'float-left' }}">
                                                                                            <div
                                                                                                class="star-ratings-sprite">
                                                                                                <span
                                                                                                    class="star-ratings-sprite-rating"
                                                                                                    style="width: {{ $product['rating'] }}%"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    @else
                                                                                        <div class="no-rating">No Rating
                                                                                        </div>
                                                                                    @endif
                                                                                    <!-- Product-price -->
                                                                                    <div class="product-price">
                                                                                        <span class="price">
                                                                                            @if ($product['offerprice'] == 0 || $product['offerprice'] == '0,00')
                                                                                                <span class="price">
                                                                                                    @if ($product['position'] == 'rs')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    {{ $product['mainprice'] }}
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    @if ($product['position'] == 'ls')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                </span>
                                                                                            @else
                                                                                                <span class="price">
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    @if ($product['position'] == 'ls')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    @if ($product['position'] == 'rs')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    {{ $product['offerprice'] }}
                                                                                                </span>
                                                                                                <span
                                                                                                    class="price-before-discount">
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    @if ($product['position'] == 'ls')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    @if ($product['position'] == 'rs')
                                                                                                        &nbsp;
                                                                                                    @endif
                                                                                                    <i
                                                                                                        @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                    {{ $product['mainprice'] }}
                                                                                                </span>
                                                                                            @endif
                                                                                        </span>
                                                                                    </div>
                                                                                    <!-- /.product-price -->
                                                                                </div>
                                                                                @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                    <div>
                                                                                        {{-- Your content here --}}
                                                                                    </div>
                                                                                @elseif (isset($product['pre_order']) &&
                                                                                        $product['pre_order'] == 1 &&
                                                                                        isset($product['product_avbl_date']) &&
                                                                                        $product['product_avbl_date'] >= now())
                                                                                    <div>
                                                                                        {{-- Your content for pre-order --}}
                                                                                    </div>
                                                                                @else
                                                                                    @if (
                                                                                        $product['stock'] != 0 &&
                                                                                            (!$product['selling_start_at'] || $product['selling_start_at'] < now()) &&
                                                                                            (!isset($product['pre_order']) ||
                                                                                                $product['pre_order'] != 1 ||
                                                                                                !isset($product['product_avbl_date']) ||
                                                                                                $product['product_avbl_date'] < now()))
                                                                                        <div
                                                                                            class="cart clearfix animate-effect">
                                                                                            <div class="action">
                                                                                                <ul class="list-unstyled">
                                                                                                    <!-- Cart button -->
                                                                                                    <li
                                                                                                        class="lnk cart-lnk">
                                                                                                        <form
                                                                                                            action="{{ $product['cartURL'] }}"
                                                                                                            method="POST">
                                                                                                            @csrf
                                                                                                            <button
                                                                                                                title="{{ __('staticwords.AddtoCart') }}"
                                                                                                                type="submit"
                                                                                                                class="addtocartcus btn">
                                                                                                                <i
                                                                                                                    class="fa fa-shopping-cart"></i>
                                                                                                            </button>
                                                                                                        </form>
                                                                                                    </li>
                                                                                                    <!-- Wishlist -->
                                                                                                    @if ($data['logged_in'] == 1)
                                                                                                        <li class="lnk wishlist-cat {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}"
                                                                                                            data-proid="{{ $product['productid'] }}"
                                                                                                            data-type="{{ $product['product_type'] }}"
                                                                                                            data-varid="{{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}">
                                                                                                            @if ($product['is_in_wishlist'] == 1)
                                                                                                                <a onclick="removeFromWishlistCat({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                    class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark"
                                                                                                                    title="{{ __('staticwords.RemoveFromWishlist') }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </a>
                                                                                                            @else
                                                                                                                <a onclick="addToWishlistCat({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                    class="cursor-pointer icon kal addtocartcus btn"
                                                                                                                    title="{{ __('staticwords.AddToWishlist') }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </a>
                                                                                                            @endif
                                                                                                        </li>
                                                                                                    @endif
                                                                                                    <!-- Compare -->
                                                                                                    <li class="lnk compare-cat"
                                                                                                        data-proid="{{ $product['productid'] }}">
                                                                                                        @if (collect(session('comparison', []))->contains('proid', $product['productid']))
                                                                                                            <a onclick="removeFromCompareCat({{ $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark"
                                                                                                                title="{{ __('staticwords.RemoveFromCompare') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-signal"></i>
                                                                                                            </a>
                                                                                                        @else
                                                                                                            <a onclick="addToCompareCat({{ $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer icon kal addtocartcus btn"
                                                                                                                title="{{ __('staticwords.Compare') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-signal"></i>
                                                                                                            </a>
                                                                                                        @endif
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="owl-nav"><button type="button" role="presentation"
                                                            class="owl-prev disabled"><i
                                                                class="icon fa fa-angle-left"></i></button><button
                                                            type="button" role="presentation" class="owl-next"><i
                                                                class="icon fa fa-angle-right"></i></button></div>
                                                    <div class="owl-dots"><button role="button"
                                                            class="owl-dot active"><span></span></button><button
                                                            role="button" class="owl-dot"><span></span></button><button
                                                            role="button" class="owl-dot"><span></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                @endforeach
                            @else
                                @php
                                    $items = range(1, 6);
                                @endphp
                                @foreach ($items as $index => $item)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image p-2">
                                                        <div class="skeleton skeleton-img" style="height: 250px;"></div>
                                                    </div>
                                                </div>
                                                <div class="product-info p-1">
                                                    <h3 class="name">
                                                        <div class="skeleton skeleton-text"
                                                            style="animation: throb; height: 10px; width: 60%;"></div>
                                                        <!-- product name -->
                                                    </h3>
                                                    <div class="no-rating">
                                                        <div class="skeleton skeleton-text"
                                                            style="animation: throb; height: 8px; width: 20%;"></div>
                                                        <!-- no rating -->
                                                    </div>
                                                    <div class="product-price mt-2">
                                                        <div class="skeleton skeleton-text"
                                                            style="animation: throb; height: 9px; width: 30%;"></div>
                                                        <!-- price -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <section class="mt-2 section new-arriavls feature-product-block">
                                <h3 class="section-title">{{ __('staticwords.fpro') }}</h3>
                                <div>
                                    <div>
                                        <div>
                                            <div
                                                class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs owl-loaded owl-drag">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                        style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1968px;">
                                                        @foreach ($featuredproducts as $product)
                                                            @php
                                                                $discountedPrice =
                                                                    $product['mainprice'] > 0
                                                                        ? round(
                                                                                (100 *
                                                                                    ($product['mainprice'] -
                                                                                        $product['offerprice'])) /
                                                                                    $product['mainprice'],
                                                                            ) . '%'
                                                                        : '0%';
                                                                $starbadge = true;
                                                                $baseurl = url('/');
                                                            @endphp
                                                            <div class="owl-item active"
                                                                style="width: 236px; margin-right: 10px;">
                                                                <div class="item item-carousel">
                                                                    @if (!$starbadge && is_array($product['sale_tag']) && isset($product['sale_tag'][$data['lang']]))
                                                                        <div class="ribbon ribbon-top-right">
                                                                            <span
                                                                                style="background: {{ $product['sale_tag_color'] }}; color: {{ $product['sale_tag_text_color'] }}">
                                                                                {{ $product['sale_tag'][$data['lang']] ?? $product['sale_tag'][$data['fallback_local']] }}
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                    <div class="products">
                                                                        {{-- Ribbon for Sale Tag --}}
                                                                        {{-- Star Badge for Featured Products --}}
                                                                        @if ($starbadge && $product['featured'] == 1)
                                                                            <div class="starBadge">
                                                                                <div class="ribbon2 down"
                                                                                    style="color: #fd9c2e;">
                                                                                    <div class="content2">
                                                                                        <svg width="24px" height="24px"
                                                                                            aria-hidden="true"
                                                                                            focusable="false"
                                                                                            data-prefix="far"
                                                                                            data-icon="star"
                                                                                            class="svg-inline--fa fa-star fa-w-18"
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 576 512">
                                                                                            <path fill="currentColor"
                                                                                                d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                        <div class="product">
                                                                            @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                <div class="badges bg-priamry">
                                                                                    <span>OFF
                                                                                        <span>{{ $discountedPrice }}</span></span>
                                                                                </div>
                                                                            @endif
                                                                            <div class="product-image">
                                                                                <div
                                                                                    class="{{ $product['stock'] == 0 ? 'pro-img-box' : '' }} image">
                                                                                    <a href="{{ $product['producturl'] }}"
                                                                                        title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}">
                                                                                        {{-- Thumbnail Image --}}
                                                                                        @if (!empty($product['thumbnail']))
                                                                                            <span>
                                                                                                <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                    data-src="{{ $product['thumbnail'] }}"
                                                                                                    alt="product_image" />
                                                                                                <img class="owl-lazy hover-image {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                    data-src="{{ $product['hover_thumbnail'] }}"
                                                                                                    alt="product_image" />
                                                                                                {{-- Offer Badge --}}
                                                                                                @if ($product['offerprice'] != 0 && $product['offerprice'] != '0.00')
                                                                                                    <div
                                                                                                        class="badges bg-priamry">
                                                                                                        <span>OFF<span>{{ $discountedPrice }}</span></span>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </span>
                                                                                        @else
                                                                                            {{-- Fallback Image --}}
                                                                                            <span>
                                                                                                <img class="owl-lazy {{ $product['stock'] == 0 ? 'filterdimage' : '' }}"
                                                                                                    title="{{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}"
                                                                                                    src="{{ $baseurl . '/images/no-image.png' }}"
                                                                                                    alt="No Image" />
                                                                                            </span>
                                                                                        @endif
                                                                                    </a>
                                                                                </div>
                                                                                @if ($product['stock'] == 0)
                                                                                    <h6 text-align="center"
                                                                                        class="oottext">
                                                                                        <span>{{ __('staticwords.Outofstock') }}</span>
                                                                                    </h6>
                                                                                @endif
                                                                                @if (isset($product['pre_order']) && $product['pre_order'] == 1 && $product['product_avbl_date'] >= now())
                                                                                    <h6 text-align="center"
                                                                                        class="preordertext">
                                                                                        <span>{{ __('staticwords.Available for preorder') }}</span>
                                                                                    </h6>
                                                                                @endif
                                                                                @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                    <h6 text-align="center"
                                                                                        class="oottext2">
                                                                                        <span>{{ __('staticwords.ComingSoon') }}</span>
                                                                                    </h6>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-info"
                                                                                class="{{ app()->getLocale() == 'rtl' ? 'text-right' : 'text-left' }}">
                                                                                <h3 class="text-truncate name">
                                                                                    <a
                                                                                        href="{{ $product['producturl'] }}">
                                                                                        {{ $product['productname'][$data['lang']] ?? $product['productname'][$data['fallback_local']] }}
                                                                                    </a>
                                                                                </h3>
                                                                                @if ($product['rating'] != 0)
                                                                                    <div
                                                                                        class="{{ app()->getLocale() == 'rtl' ? 'float-right' : 'float-left' }}">
                                                                                        <div class="star-ratings-sprite">
                                                                                            <span
                                                                                                class="star-ratings-sprite-rating"
                                                                                                style="width: {{ $product['rating'] }}%"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                @else
                                                                                    <div class="no-rating">No Rating</div>
                                                                                @endif
                                                                                <!-- Product-price -->
                                                                                <div class="product-price">
                                                                                    <span class="price">
                                                                                        @if ($product['offerprice'] == 0 || $product['offerprice'] == '0,00')
                                                                                            <span class="price">
                                                                                                @if ($product['position'] == 'rs')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                <i
                                                                                                    @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                {{ $product['mainprice'] }}
                                                                                                <i
                                                                                                    @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                @if ($product['position'] == 'ls')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                            </span>
                                                                                        @else
                                                                                            <span class="price">
                                                                                                <i
                                                                                                    @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                @if ($product['position'] == 'ls')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                @if ($product['position'] == 'rs')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                <i
                                                                                                    @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                {{ $product['offerprice'] }}
                                                                                            </span>
                                                                                            <span
                                                                                                class="price-before-discount">
                                                                                                <i
                                                                                                    @if ($product['position'] == 'l' || $product['position'] == 'ls') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                @if ($product['position'] == 'ls')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                @if ($product['position'] == 'rs')
                                                                                                    &nbsp;
                                                                                                @endif
                                                                                                <i
                                                                                                    @if ($product['position'] == 'r' || $product['position'] == 'rs') class="{{ $product['symbol'] }}" @endif></i>
                                                                                                {{ $product['mainprice'] }}
                                                                                            </span>
                                                                                        @endif
                                                                                    </span>
                                                                                </div>
                                                                                <!-- /.product-price -->
                                                                            </div>
                                                                            @if ($product['stock'] != 0 && $product['selling_start_at'] && $product['selling_start_at'] >= now())
                                                                                <div>
                                                                                    {{-- Your content here --}}
                                                                                </div>
                                                                            @elseif (isset($product['pre_order']) &&
                                                                                    $product['pre_order'] == 1 &&
                                                                                    isset($product['product_avbl_date']) &&
                                                                                    $product['product_avbl_date'] >= now())
                                                                                <div>
                                                                                    {{-- Your content for pre-order --}}
                                                                                </div>
                                                                            @else
                                                                                @if ($product['stock'] != 0)
                                                                                    <div
                                                                                        class="cart clearfix animate-effect">
                                                                                        <div class="action">
                                                                                            <ul class="list-unstyled">
                                                                                                <!-- Cart condition -->
                                                                                                <li id="addCart"
                                                                                                    class="lnk wishlist">
                                                                                                    <form
                                                                                                        action="{{ $product['cartURL'] }}"
                                                                                                        method="POST">
                                                                                                        @csrf
                                                                                                        <button
                                                                                                            title="{{ __('staticwords.AddtoCart') }}"
                                                                                                            type="submit"
                                                                                                            class="addtocartcus btn">
                                                                                                            <i
                                                                                                                class="fa fa-shopping-cart"></i>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </li>
                                                                                                <!-- Wishlist -->
                                                                                                {{-- @if ($data['logged_in'] == 1)
                                                                                                    <li
                                                                                                        class="lnk wishlist {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}">
                                                                                                        <!-- Variant product add to cart system -->
                                                                                                        @if ($product['product_type'] == 'variant')
                                                                                                            <form
                                                                                                                action="{{ route('add.pro.wishlist', $product['variantid']) }}"
                                                                                                                method="GET">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="addtocartcus btn {{ $product['is_in_wishlist'] == 1 ? 'text-dark' : '' }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </button>
                                                                                                            </form>
                                                                                                        @else
                                                                                                            <!-- Simple product add to cart system -->
                                                                                                            <form
                                                                                                                action="{{ route('add.simple.pro.in.wishlist') }}"
                                                                                                                method="GET">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    name="proid"
                                                                                                                    value="{{ $product['productid'] }}">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="addtocartcus btn {{ $product['is_in_wishlist'] == 1 ? 'text-dark' : '' }}">
                                                                                                                    <i
                                                                                                                        class="fa fa-heart"></i>
                                                                                                                </button>
                                                                                                            </form>
                                                                                                        @endif
                                                                                                    </li>
                                                                                                @endif --}}
                                                                                                <!-- Wishlist -->
                                                                                                @if ($data['logged_in'] == 1)
                                                                                                    <li
                                                                                                        class="lnk wishlist {{ $product['is_in_wishlist'] == 1 ? 'active' : '' }}">
                                                                                                        @if ($product['is_in_wishlist'] == 1)
                                                                                                            <a id="removefromwish{{ $product['productid'] }}"
                                                                                                                onclick="removeFromWishlist({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark"
                                                                                                                title="{{ __('staticwords.RemoveFromWishlist') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-heart"></i>
                                                                                                            </a>
                                                                                                        @else
                                                                                                            <a id="addtowish{{ $product['productid'] }}"
                                                                                                                onclick="addToWishlist({{ $product['productid'] }}, '{{ $product['product_type'] }}', {{ $product['product_type'] == 'variant' ? $product['variantid'] : $product['productid'] }}); return false;"
                                                                                                                class="cursor-pointer icon kal addtocartcus btn"
                                                                                                                title="{{ __('staticwords.AddToWishlist') }}">
                                                                                                                <i
                                                                                                                    class="fa fa-heart"></i>
                                                                                                            </a>
                                                                                                        @endif
                                                                                                    </li>
                                                                                                @endif
                                                                                                <!-- Compare -->
                                                                                                <!-- Compare -->
                                                                                                <li class="lnk">
                                                                                                    @if (collect(session('comparison', []))->contains('proid', $product['productid']))
                                                                                                        <a id="removefromcompare{{ $product['productid'] }}"
                                                                                                            onclick="removeFromCompare({{ $product['productid'] }}); return false;"
                                                                                                            class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark"
                                                                                                            title="{{ __('staticwords.RemoveFromCompare') }}">
                                                                                                            <i
                                                                                                                class="fa fa-signal"></i>
                                                                                                        </a>
                                                                                                    @else
                                                                                                        <a id="addtocompare{{ $product['productid'] }}"
                                                                                                            onclick="addToCompare({{ $product['productid'] }}); return false;"
                                                                                                            class="cursor-pointer icon kal addtocartcus btn"
                                                                                                            title="{{ __('staticwords.Compare') }}">
                                                                                                            <i
                                                                                                                class="fa fa-signal"></i>
                                                                                                        </a>
                                                                                                    @endif
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!-- /.action -->
                                                                                    </div>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="owl-nav"><button type="button" role="presentation"
                                                        class="owl-prev disabled"><i
                                                            class="icon fa fa-angle-left"></i></button><button
                                                        type="button" role="presentation" class="owl-next"><i
                                                            class="icon fa fa-angle-right"></i></button></div>
                                                <div class="owl-dots"><button role="button"
                                                        class="owl-dot active"><span></span></button><button
                                                        role="button" class="owl-dot"><span></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        {{-- @include('front.mainhome') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (isset($offersettings) && $offersettings->enable_popup == 1)
        @if (Cookie::get('popup') == '')
            <div class="modal fade" id="offerpopup_center" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close d-flex align-items-center justify-content-center"
                                data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="fa fa-times"></span>
                            </button>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-6 d-flex">
                                <div class="modal-body p-5 img d-flex"
                                    style="background-image: url('{{ url('/images/offerpopup/' . $offersettings->image) }}');">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="modal-body p-5 d-flex align-items-center">
                                    <div class="text w-100 text-center py-2">
                                        <h2 style="color:{{ $offersettings->heading_color }}" class="mb-0">
                                            {{ $offersettings->heading }}
                                        </h2>
                                        <h4 style="color:{{ $offersettings->subheading_color }}" class="mt-2 mb-4">
                                            {{ $offersettings->subheading }}
                                        </h4>
                                        @if ($offersettings->description != '')
                                            <p style="color: {{ $offersettings->description_text_color }}">
                                                {{ $offersettings->description }}
                                            </p>
                                        @endif
                                        @if ($offersettings->enable_button == 1)
                                            <a style="background: {{ $offersettings->button_color }}"
                                                href="{{ $offersettings->button_link }}"
                                                class="btn btn-primary d-block py-3">
                                                <span
                                                    style="color: {{ $offersettings->button_text_color }}">{{ $offersettings->button_text }}</span>
                                            </a>
                                        @endif
                                        <p class="mt-3">
                                            <label><input class="offerpop_not_show" type="checkbox"
                                                    name="do_not_show_me">
                                                {{ __('staticwords.dontshowpopuptext') }}</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endsection
@section('script')
    <script>
        $('.offerpop_not_show').on('change', function() {
            if ($(this).is(":checked")) {
                var opt = 1;
            } else {
                var opt = 0;
            }
            $.ajax({
                type: 'GET',
                url: '{{ route('offer.pop.not.show') }}',
                data: {
                    opt: opt
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                }
            });
        });
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() ||
                    isMobile.Windows());
            }
        };
        if (!isMobile.any()) { //check if it is not mobile
            $('#offerpopup_center').modal('show');
        }
    </script>
    <script>
        function redirectMe(id, type) {
            let url;
            if (type === 'p') url = '/get/category/url';
            else if (type === 's') url = '/get/subcategory/url';
            else url = '/get/childcategory/url';
            axios.get(url, {
                    params: {
                        id
                    }
                })
                .then(response => {
                    if (response.data.status && response.data.status === 'fail') {
                        alert(response.data.message);
                    } else {
                        window.location.href = response.data;
                    }
                })
                .catch(error => console.error(error));
        }
    </script>
    <script>
        function addToWishlist(id, productType, productId) {
            let addToWishUrl;
            if (productType == 'variant') {
                addToWishUrl = '{{ url('AddToWishList') }}/' + productId;
            } else {
                addToWishUrl = '{{ url('add/simple_pro') }}/' + productId;
            }
            console.log("[ADD TO WISHLIST] Product:", {
                id,
                productType,
                productId,
                url: addToWishUrl
            });
            $.ajax({
                url: addToWishUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log("[ADD TO WISHLIST] Response:", response);
                    if (response === 'success' || (response.status && response.status === 'success')) {
                        var wc = Number($('#wishcount').text()) + 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Added",
                            text: 'Added to your wishlist!',
                            icon: 'success'
                        });
                        // Update the specific element by finding its parent li
                        $('#addtowish' + id).closest('li').html(
                            '<a id="removefromwish' + id + '" onclick="removeFromWishlist(' + id + ', \'' +
                            productType + '\', ' + productId +
                            '); return false;" class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromWishlist') }}"><i class="fa fa-heart"></i></a>'
                        );
                    } else if (response === 'exists' || (response.status && response.status === 'exists')) {
                        Swal.fire({
                            title: "Oops!",
                            text: 'Product is already in your wishlist!',
                            icon: 'warning'
                        });
                    } else if (response === 'deleted' || (response.status && response.status === 'deleted')) {
                        var wc = Number($('#wishcount').text()) - 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Removed",
                            text: response.msg || 'Product removed from wishlist!',
                            icon: 'success'
                        });
                        $('#removefromwish' + id).closest('li').html(
                            '<a id="addtowish' + id + '" onclick="addToWishlist(' + id + ', \'' +
                            productType + '\', ' + productId +
                            '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.AddToWishlist') }}"><i class="fa fa-heart"></i></a>'
                        );
                    } else if (response === 'unauthenticated' || (response.status && response.status ===
                            'unauthenticated')) {
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
                },
                error: function(xhr, status, error) {
                    console.error("[ADD TO WISHLIST] AJAX Error:", {
                        response: xhr.responseText,
                        status,
                        error
                    });
                    Swal.fire({
                        title: "Error",
                        text: 'Failed to connect to the server!',
                        icon: 'error'
                    });
                }
            });
        }
        function removeFromWishlist(id, productType, productId) {
            let removeWishUrl;
            if (productType === 'variant') {
                removeWishUrl = '{{ url('/removeWishList') }}/' + productId;
            } else {
                removeWishUrl = '{{ url('/removesimplesWishList') }}/' + productId;
            }
            console.log("[REMOVE FROM WISHLIST] Params:", {
                id,
                productType,
                productId,
                url: removeWishUrl
            });
            $.ajax({
                url: removeWishUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log("[REMOVE FROM WISHLIST] Response:", response);
                    if (response === 'deleted' || (response.status && response.status === 'deleted')) {
                        var wc = Number($('#wishcount').text()) - 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Removed",
                            text: response.msg || 'Removed from your wishlist!',
                            icon: 'success'
                        });
                        $('#removefromwish' + id).closest('li').html(
                            '<a id="addtowish' + id + '" onclick="addToWishlist(' + id + ', \'' +
                            productType + '\', ' + productId +
                            '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.AddToWishlist') }}"><i class="fa fa-heart"></i></a>'
                        );
                    } else if (response === 'not_found' || (response.status && response.status ===
                            'not_found')) {
                        Swal.fire({
                            title: "Oops!",
                            text: 'Product not found in your wishlist!',
                            icon: 'warning'
                        });
                    } else if (response === 'unauthenticated' || (response.status && response.status ===
                            'unauthenticated')) {
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
                },
                error: function(xhr, status, error) {
                    console.error("[REMOVE FROM WISHLIST] AJAX Error:", {
                        response: xhr.responseText,
                        status,
                        error
                    });
                    Swal.fire({
                        title: "Error",
                        text: 'Failed to connect to the server!',
                        icon: 'error'
                    });
                }
            });
        }
        function addToCartFromWishlist(id, productType) {
            if (productType !== 'variant') {
                Swal.fire({
                    title: "Error",
                    text: 'This feature is only available for variant products!',
                    icon: 'error'
                });
                return;
            }
            var addToCartUrl = '{{ url('/addtTocartfromWishList') }}/' + id;
            $.ajax({
                url: addToCartUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    if (response === 'success') {
                        var wc = Number($('#wishcount').text()) - 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Success",
                            text: 'Product moved to cart!',
                            icon: 'success'
                        }).then(() => {
                            window.location.href = '{{ url('/addtocart') }}/' + id;
                        });
                        $('#removefromwish' + id).parent().html(
                            '<a id="addtowish' + id + '" onclick="addToWishlist(' + id + ', \'' +
                            productType + '\', ' + id +
                            '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.AddToWishlist') }}"><i class="fa fa-heart"></i></a>'
                        );
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: 'Something went wrong!',
                            icon: 'error'
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: "Error",
                        text: 'Failed to connect to the server!',
                        icon: 'error'
                    });
                }
            });
        }
        function addToCompare(id) {
            var addToCompareUrl = '{{ route('compare.product', ':id') }}'.replace(':id', id);
            console.log('Adding product ID:', id); // Debug the ID being sent
            $.ajax({
                url: addToCompareUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log('Compare Response:', response);
                    if (response.status === 'success') {
                        // Update comparison count
                        $('#comparecount').text(response.count);
                        // Update comparison container with new view
                        $('#comparison-container').html(response.view);
                        Swal.fire({
                            title: "Added",
                            text: response.message,
                            icon: 'success'
                        });
                        // Update UI to show remove button
                        $('#addtocompare' + id).parent().html(
                            '<a id="removefromcompare' + id + '" onclick="removeFromCompare(' + id +
                            '); return false;" class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromCompare') }}"><i class="fa fa-signal"></i></a>'
                        );
                    } else {
                        Swal.fire({
                            title: "Oops!",
                            text: response.message || 'An error occurred while adding the product.',
                            icon: 'warning'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', xhr.responseText, status, error);
                    let errorMessage = 'Failed to connect to the server! Check console for details.';
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.message) {
                            errorMessage = response.message; // e.g., "Product not found!"
                        }
                    } catch (e) {
                        console.error('Error parsing response:', e);
                    }
                    Swal.fire({
                        title: "Error",
                        text: errorMessage,
                        icon: 'error'
                    });
                }
            });
        }
        $(document).ready(function() {
            // Handle remove button click
            $(document).on('click', '.remove-from-comparison', function(e) {
                e.preventDefault(); // Prevent default link behavior
                let productId = $(this).data('id');
                $.ajax({
                    url: '{{ url('remove-from-comparison') }}/' + productId,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-Requested-With': 'XMLHttpRequest' // Ensure AJAX detection
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Update the comparison container with the new view
                            $('#comparison-container').html(response.view);
                            // Update the count display
                            $('#comparison-count').text(response.count);
                            // Optional: Show success message
                            alert(response
                                .message); // Replace with a better UI notification if needed
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Error: ' + (xhr.responseJSON?.message || 'An error occurred'));
                    }
                });
            });
        });
        function removeFromCompare(id) {
            var removeFromCompareUrl = '{{ route('remove.compare.product', ':id') }}'.replace(':id', id);
            console.log('Removing product ID:', id); // Debug the ID
            $.ajax({
                url: removeFromCompareUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log('Remove Compare Response:', response);
                    if (response.status === 'success') {
                        // Update comparison count
                        $('#comparecount').text(response.count);
                        Swal.fire({
                            title: "Removed",
                            text: response.message,
                            icon: 'success'
                        });
                        // Update UI to show add button
                        $('#removefromcompare' + id).parent().html(
                            '<a id="addtocompare' + id + '" onclick="addToCompare(' + id +
                            '); return false;" class="cursor-pointer removeFrmWish  icon kal addtocartcus btn text-dark" title="{{ __('staticwords.AddToCompare') }}"><i class="fa fa-signal"></i></a>'
                        );
                        // Update comparison view
                        $('#comparison-view').html(response.view);
                    } else {
                        Swal.fire({
                            title: "Oops!",
                            text: response.message || 'An error occurred while removing the product.',
                            icon: 'warning'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', xhr.responseText, status, error);
                    let errorMessage = 'Failed to connect to the server! Check console for details.';
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.message) {
                            errorMessage = response.message;
                        }
                    } catch (e) {
                        console.error('Error parsing response:', e);
                    }
                    Swal.fire({
                        title: "Error",
                        text: errorMessage,
                        icon: 'error'
                    });
                }
            });
        }
    </script>
    <script>
        function addToWishlistCat(id, productType, productId) {
            let addToWishUrl;
            if (productType == 'variant') {
                addToWishUrl = '{{ url('AddToWishList') }}/' + productId;
            } else {
                addToWishUrl = '{{ url('add/simple_pro') }}/' + productId;
            }
            console.log("[ADD TO WISHLIST CAT] Product:", {
                id,
                productType,
                productId,
                url: addToWishUrl
            });
            $.ajax({
                url: addToWishUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log("[ADD TO WISHLIST CAT] Response:", response);
                    if (response === 'success' || (response.status && response.status === 'success')) {
                        var wc = Number($('#wishcount').text()) + 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Added",
                            text: 'Added to your wishlist!',
                            icon: 'success'
                        });
                        // Update ALL wishlist-cat lis for this product ID
                        $('li.wishlist-cat[data-proid="' + id + '"]').each(function() {
                            $(this).html(
                                '<a onclick="removeFromWishlistCat(' + id + ', \'' + productType +
                                '\', ' + productId +
                                '); return false;" class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromWishlist') }}"><i class="fa fa-heart"></i></a>'
                            ).addClass('active');
                        });
                    } else if (response === 'exists' || (response.status && response.status === 'exists')) {
                        Swal.fire({
                            title: "Oops!",
                            text: 'Product is already in your wishlist!',
                            icon: 'warning'
                        });
                    } else if (response === 'unauthenticated' || (response.status && response.status ===
                            'unauthenticated')) {
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
                },
                error: function(xhr, status, error) {
                    console.error("[ADD TO WISHLIST CAT] AJAX Error:", {
                        response: xhr.responseText,
                        status,
                        error
                    });
                    Swal.fire({
                        title: "Error",
                        text: 'Failed to connect to the server!',
                        icon: 'error'
                    });
                }
            });
        }
        function removeFromWishlistCat(id, productType, productId) {
            let removeWishUrl;
            if (productType === 'variant') {
                removeWishUrl = '{{ url('/removeWishList') }}/' + productId;
            } else {
                removeWishUrl = '{{ url('/removesimplesWishList') }}/' + productId;
            }
            console.log("[REMOVE FROM WISHLIST CAT] Params:", {
                id,
                productType,
                productId,
                url: removeWishUrl
            });
            $.ajax({
                url: removeWishUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log("[REMOVE FROM WISHLIST CAT] Response:", response);
                    if (response === 'deleted' || (response.status && response.status === 'deleted')) {
                        var wc = Number($('#wishcount').text()) - 1;
                        $('#wishcount').text(wc);
                        Swal.fire({
                            title: "Removed",
                            text: response.msg || 'Removed from your wishlist!',
                            icon: 'success'
                        });
                        // Update ALL wishlist-cat lis for this product ID
                        $('li.wishlist-cat[data-proid="' + id + '"]').each(function() {
                            $(this).html(
                                '<a onclick="addToWishlistCat(' + id + ', \'' + productType +
                                '\', ' + productId +
                                '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.AddToWishlist') }}"><i class="fa fa-heart"></i></a>'
                            ).removeClass('active');
                        });
                    } else if (response === 'not_found' || (response.status && response.status ===
                        'not_found')) {
                        Swal.fire({
                            title: "Oops!",
                            text: 'Product not found in your wishlist!',
                            icon: 'warning'
                        });
                    } else if (response === 'unauthenticated' || (response.status && response.status ===
                            'unauthenticated')) {
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
                },
                error: function(xhr, status, error) {
                    console.error("[REMOVE FROM WISHLIST CAT] AJAX Error:", {
                        response: xhr.responseText,
                        status,
                        error
                    });
                    Swal.fire({
                        title: "Error",
                        text: 'Failed to connect to the server!',
                        icon: 'error'
                    });
                }
            });
        }
        function addToCompareCat(id) {
            var addToCompareUrl = '{{ route('compare.product', ':id') }}'.replace(':id', id);
            console.log('[ADD TO COMPARE CAT] Product ID:', id);
            $.ajax({
                url: addToCompareUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log('[ADD TO COMPARE CAT] Response:', response);
                    if (response.status === 'success') {
                        $('#comparecount').text(response.count);
                        $('#comparison-container').html(response.view);
                        Swal.fire({
                            title: "Added",
                            text: response.message,
                            icon: 'success'
                        });
                        // Update ALL compare-cat lis for this product ID
                        $('li.compare-cat[data-proid="' + id + '"]').each(function() {
                            $(this).html(
                                '<a onclick="removeFromCompareCat(' + id +
                                '); return false;" class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromCompare') }}"><i class="fa fa-signal"></i></a>'
                            );
                        });
                    } else {
                        Swal.fire({
                            title: "Oops!",
                            text: response.message || 'An error occurred while adding the product.',
                            icon: 'warning'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('[ADD TO COMPARE CAT] AJAX Error:', {
                        response: xhr.responseText,
                        status,
                        error
                    });
                    let errorMessage = 'Failed to connect to the server! Check console for details.';
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.message) errorMessage = response.message;
                    } catch (e) {
                        console.error('Error parsing response:', e);
                    }
                    Swal.fire({
                        title: "Error",
                        text: errorMessage,
                        icon: 'error'
                    });
                }
            });
        }
        function removeFromCompareCat(id) {
            var removeFromCompareUrl = '{{ route('remove.compare.product', ':id') }}'.replace(':id', id);
            console.log('[REMOVE FROM COMPARE CAT] Product ID:', id);
            $.ajax({
                url: removeFromCompareUrl,
                type: 'GET',
                global: false,
                success: function(response) {
                    console.log('[REMOVE FROM COMPARE CAT] Response:', response);
                    if (response.status === 'success') {
                        $('#comparecount').text(response.count);
                        $('#comparison-container').html(response.view);
                        Swal.fire({
                            title: "Removed",
                            text: response.message,
                            icon: 'success'
                        });
                        // Update ALL compare-cat lis for this product ID
                        $('li.compare-cat[data-proid="' + id + '"]').each(function() {
                            $(this).html(
                                '<a onclick="addToCompareCat(' + id +
                                '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.Compare') }}"><i class="fa fa-signal"></i></a>'
                            );
                        });
                    } else {
                        Swal.fire({
                            title: "Oops!",
                            text: response.message || 'An error occurred while removing the product.',
                            icon: 'warning'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('[REMOVE FROM COMPARE CAT] AJAX Error:', {
                        response: xhr.responseText,
                        status,
                        error
                    });
                    let errorMessage = 'Failed to connect to the server! Check console for details.';
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.message) errorMessage = response.message;
                    } catch (e) {
                        console.error('Error parsing response:', e);
                    }
                    Swal.fire({
                        title: "Error",
                        text: errorMessage,
                        icon: 'error'
                    });
                }
            });
        }
    </script>
@endsection
