<div class="d-lg-none overlay">
</div>
@if (isset($bannersetting) && $bannersetting->status == 1)
<div class="alert alert-warning alert-dismissible fade show home-alert" role="alert">
    <a href="{{ optional($bannersetting)['url'] }}" target=_blank title=""><img
            src="{{ url('images/banner/' . $bannersetting->image) }}" class="w-100 mw-100 h-50px h-lg-auto img-fit"></a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="top-bar animate-dropdown top-main-block-one">
    <div class="container-fluid">
        <div class="header-top-inner">
            <div class="cnt-account">
                <div class="display-none-block">
                    <ul class="list-unstyled">

                        @if (Auth::check())

                        <li id="notifications" class="dropdown notifications-menu">
                            {{-- <noti-d></noti-d> --}}
                            <section>
                                @php
                                $notifications = app('App\Http\Controllers\Web\HomeController')->notifications();
                                @endphp
                                <a title="{{ __('staticwords.notification') }}" href="#" class="dropdown-toggle"
                                    data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    @if($notifications['count'] > 0)
                                    <sup id="countNoti" class="bell-badge">
                                        {{ $notifications['count'] }}
                                    </sup>
                                    @endif
                                </a>

                                <ul id="dropdown" class="z-index99 dropdown-menu">
                                     @if($notifications['count'] > 0)
                                        <li class="notiheadergrey header">
                                            {{ __('staticwords.Youhave') }}
                                            <b>{{ $notifications['count'] }}</b>
                                            {{ __('staticwords.notification') }} !
                                            <a class="color111 float-right" href="{{ route('clearall') }}">
                                                {{ __('staticwords.MarkallasRead') }}
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <ul class="menu notification-menu">
                                            @if($notifications['count'] > 0)
                                            @foreach($notifications['notifications'] as $noti)
                                            <li class="notiheaderlightgrey hey1" id="notification-{{ $noti->id }}">
                                                <p></p>
                                                <small class="padding5P float-right">
                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    {{ $noti->created_at->diffForHumans() }}
                                                </small>
                                                <a class="font-weight600 color111"
                                                    href="{{ $noti->n_type === 'order' ? url('view/order/' . $noti->data['url']) : url('mytickets') }}"
                                                    onclick="markAsRead({{ $noti->id }})">
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    {{ $noti->data['data'] ?? __('No message available') }}
                                                </a>

                                                <p></p>
                                            </li>

                                            @endforeach
                                            @else
                                            <li class="notiheaderlightgrey">
                                                {{ __('No notifications') }}
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </section>

                        </li>

                        @if (Auth::user()->role_id == 'a')
                        <li class="first"><a target="_blank" title="Go to Admin Panel" href="{{ route('admin.main') }}"
                                title="Admin">Admin</a></li>
                        @elseif(Auth::user()->role_id == 'v')
                        @if (isset(Auth::user()->store))
                        <li class="first"><a target="_blank" title="{{ __('staticwords.SellerDashboard') }}"
                                href="{{ route('seller.dboard') }}" title="Admin">{{ __('staticwords.SellerDashboard')
                                }}</a>
                        </li>
                        @endif
                        @endif
                        @if (!empty(Session::get('admin_id')))
                        <li class="first"><a title="{{ __('staticwords.SellerDashboard') }}"
                                href="{{ route('backlogin.as', Session::get('admin_id')) }}" title="Admin">{{ __('Return
                                Admin') }}</a>
                        </li>
                        @endif
                        <li class="myaccount"><a href="{{ url('profile') }}" title="My Account"><span>{{
                                    __('staticwords.MyAccount') }}</span></a></li>

                        <li class="wishlist" id="desktop-wis-count">
                            @php
                            $wishcount = auth()->check() ? app('App\Http\Controllers\Web\HomeController')->wishlistcount()->original['wishlist_count'] : 0;
                        @endphp
                        
                        <li class="wishlist" id="desktop-wis-count">
                            <a href="{{ route('my.wishlist') }}" title="{{ __('staticwords.Wishlist') }}">
                                {{ __('staticwords.Wishlist') }} (<span id="wishcount">{{ $wishcount }}</span>)
                            </a>
                        </li>

                            {{-- <main-wish-count></main-wish-count> --}}
                        </li>
                        @endif
                        @if (Auth::check())
                        <li class="login">

                            <a role="button" onclick="logout()">
                                {{ __('staticwords.Logout') }}
                            </a>

                            <form action="{{ route('logout') }}" method="POST" class="logout-form display-none">
                                {{ csrf_field() }}
                            </form>

                        </li>
                        @else
                        <li class="login animate-dropdown-one">
                            <a href="{{ url('login') }}" title="Login">
                                <span>
                                    {{ __('staticwords.Login') }}
                                </span>
                            </a>
                        </li>
                        <li class="myaccount"><a href="{{ url('register') }}" title="Register"><span>
                                    {{ __('staticwords.Register') }}
                                </span></a></li>
                        @endif
                        <li id="comparedesktop">
                            {{-- <compare-c-count></compare-c-count> --}}
                            <div>
                                @php
                                $comptotal = app('App\Http\Controllers\Web\HomeController')->comparecount();
                                @endphp
                                <a title="{{ __('staticwords.YourComparisonList') }}"
                                    href="{{ url('/comparisonlist') }}">
                                    {{ __('staticwords.Compare') }}
                                    ({{ $comptotal }})
                                </a>
                            </div>

                        </li>
                        @auth
                        <li class="check"><a data-toggle="modal" href="#feeddesk" title="Feedback"><span>{{
                                    __('staticwords.Feedback') }}</span></a></li>

                        <li><a href="{{ route('hdesk') }}" title="Help Desk & Support">{{ __('staticwords.hpd') }}</a>
                        </li>

                        <!-- Feedback Modal -->
                        <div data-backdrop="static" data-keyboard="false" class="modal fade" id="feeddesk" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h5 class="p-2 modal-title" id="myModalLabel"><i class="fa fa-envelope-o"
                                                aria-hidden="true"></i>
                                            {{ __('staticwords.FeedBackUs') }} </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="info-feed alert bg-yellow">
                                            <i class="fa fa-info-circle"></i>&nbsp;{{ __('staticwords.feedline') }}
                                        </div>
                                        <form class="needs-validation" action="{{ route('send.feedback') }}"
                                            method="POST" novalidate>
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="font-weight-bold" for="">{{ __('staticwords.Name') }}:
                                                    <span class="required">*</span></label>
                                                <input required="" type="text" name="name" class="form-control"
                                                    value="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-bold" for="">{{ __('staticwords.Email') }}:
                                                    <span class="required">*</span></label>
                                                <input required="" type="email" name="email" class="form-control"
                                                    value="{{ Auth::user()->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-bold" for="">{{ __('staticwords.Message') }}:
                                                    <span class="required">*</span></label>
                                                <textarea required name="msg"
                                                    placeholder="Tell us What You Like about us? or What should we do to more to improve our portal."
                                                    cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="rat">
                                                <label class="font-weight-bold">&nbsp;{{ __('staticwords.RateUs') }}:
                                                    <span class="required">*</span></label>
                                                <ul id="starRating" data-stars="5">
                                                </ul>
                                                <input type="hidden" id="" name="rate" value="1" class="getStar">
                                            </div>
                                            <button type="submit" class="btn text-white bg-primary">
                                                {{ __('staticwords.Send') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                    </ul>
                </div>
            </div>
            <!-- /.cnt-account -->

            <div class="cnt-block">
                <ul class="list-unstyled list-inline">

                    @if ($auto->enabel_multicurrency == '1')
                    <select name="currency" onchange="val()" id="currency">

                        @if ($auto->currency_by_country == 1)


                        @forelse($manualcurrency as $currency)
                        @if (isset($currency->currency))
                        <option {{ Session::get('currency')['mainid']==$currency->currency->id ? 'selected' : '' }}
                            value="{{ $currency->currency->id }}">{{ $currency->currency->code }}
                        </option>
                        @endif

                        @empty

                        <option value="{{ $defCurrency->currency->id }}">
                            {{ $defCurrency->currency->code }}</option>
                        @endforelse
                        @else
                        @foreach ($multiCurrency as $currency)
                        <option {{ Session::get('currency')['mainid']==$currency->currency->id ? 'selected' : '' }}
                            value="{{ $currency->currency->id }}">{{ $currency->currency->code }}
                        </option>
                        @endforeach

                        @endif


                    </select>
                    @else
                    <select name="currency" onchange="val()" id="currency">

                        <option value="{{ $defCurrency->currency->id }}">{{ $defCurrency->currency->code }}
                        </option>

                    </select>

                    @endif

                    <select class="changed_language" name="" id="changed_lng">
                        @foreach ($langauges as $lang)
                        <option {{ Session::get('changed_language')==$lang->lang_code ? 'selected' : '' }}
                            value="{{ $lang->lang_code }}">{{ $lang->name }}</option>
                        @endforeach
                    </select>

                </ul>
                <!-- /.list-unstyled -->
            </div>
            <!-- /.cnt-cart -->
            <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
</div>
<div class="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6  col-md-2 col-sm-2 col-lg-2 logo-holder">
                <!-- ============ LOGO ========================================= -->
                <div class="logo"> <a href="{{ url('/') }}" title="{{ $title }}"> <img height="50px"
                            src="{{ url('images/genral/' . $front_logo) }}" alt="logo"> </a> </div>
                <!-- /.logo -->
                <!--=================== LOGO : END ================= -->
            </div>
            <!-- /.logo-holder -->

            <div class="col-lg-7 col-md-7 col-sm-7 col-12 top-search-holder">
                <!-- ====================== SEARCH AREA ======================== -->
                <div id="search-area" class="search-area">

                    <form method="get" enctype="multipart/form-data" action="{{ url('search/') }}">

                        <div class="control-group search-cat-box">

                            <div class="input-group">
                                <span class="input-group-btn">
                                    <select id="searchDropMenu" class="searchDropMenu" name="cat">
                                        <option value="all">{{ __('staticwords.AllCategory') }}</option>
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        @foreach ($searchCategories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @endforeach
                                    </select>
                                </span>
                                <input required="" id="v_search" class="search-field" value=""
                                    placeholder="{{ __('staticwords.search') }}" name="keyword">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" onclick="document.querySelector('form').submit();">

                                        <!-- Microphone button -->
                                        <i id="icon" class="fa fa-search" style=" cursor: pointer;"></i>

                                        {{-- <voice-search voice_lang="{{ app()->getLocale() }}"></voice-search> --}}
                                    </button>
                                </span>
                            </div>
                            <!-- <button class="search-button"></button> -->
                        </div>

                    </form>

                </div>

                <!-- ============================= SEARCH AREA : END ============================ -->
            </div>


            <!-- /.top-search-holder -->
            @if (!Request::is('cart'))

            <div class="col-lg-3 col-md-3 col-sm-3 col-0 animate-dropdown top-cart-row">

                <!-- ==================== SHOPPING CART DROPDOWN ============================================================= -->
                <div class="dropdown dropdown-cart dropdown-cart-one">
                    <div id="cart-total-d" class="lnk-cart">
                        <div class="items-cart-inner">
                            <button class="basket navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-controls="cartSidebar">
                                <div class="basket-item-count">
                                    <span class="count">
                                        @if (Auth::check())
                                            {{ App\Cart::where('user_id', Auth::user()->id)->count() }}
                                        @else
                                            {{ session()->has('cart') ? count(session('cart')) : '0' }}
                                        @endif
                                    </span>
                                </div>
                                <div class="total-price-basket">
                                    <span class="lbl text-start">{{ __('Your Cart') }}</span>
                                    <i class="{{ session()->get('currency')['value'] }}"></i>
                                    
                                    @if (Auth::check())
                                        @php
                                            $total = app('App\Http\Controllers\Web\HomeController')->totalCart();
                                        @endphp
                                        <span class="value" id="total_cart">
                                            {{ is_array($total) ? number_format($total['total'], 2) : '0.00' }}
                                        </span>
                                    @else
                                        <span class="value" id="total_cart">0.00</span>
                                    @endif
                                </div>
                            </button>
                    
                            <!-- Offcanvas Container -->
                            <div class="offcanvas offcanvas-end" id="cartSidebar" tabindex="-1" aria-labelledby="cartSidebarLabel">
                                <div class="offcanvas-header bg-primary text-white">
                                    <h5 class="offcanvas-title" id="cartSidebarLabel">Your Cart ( 
                                        @if (Auth::check())
                                            {{ App\Cart::where('user_id', Auth::user()->id)->count() }}
                                        @else
                                            {{ session()->has('cart') ? count(session('cart')) : '0' }}
                                        @endif )
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div id="cart-items-container" class="cart-items-container">
                                        @php
                                            $cartitems = app('App\Http\Controllers\Web\HomeController')->totalCart();
                                        @endphp
                                        
                                        @if(is_array($cartitems) && isset($cartitems['items']) && count($cartitems['items']))
                                            <div class="cart-product-block">
                                                @foreach($cartitems['items'] as $index => $item)
                                                    <div class="p-1 row {{ $index > 0 ? 'mt-2' : '' }}">
                                                        <div class="col-md-4">
                                                            <img class="img-fluid" src="{{ $item['image'] }}" alt="product_image">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p>
                                                                <b>{{ $item['name'][$cartitems['lang']] ?? $item['name'][$cartitems['fallback_local']] }} x ({{ $item['qty'] }})</b><br>
                                                                @if($item['type'] == 'variant')
                                                                    @foreach($item['variant'] as $variant)
                                                                        <span>{{ $variant['var_name'] }} {{ $variant['attr_name'] }}</span>
                                                                    @endforeach
                                                                @endif
                                                                <br>
                                                                <span class="mt-2">
                                                                    @if(in_array($currency['position'], ['l', 'ls']))
                                                                        <i class="{{session()->get('currency')['value']}}"></i>
                                                                    @endif
                                                                    @if($currency['position'] == 'ls')&nbsp;@endif
                                                                    <span>{{ number_format($item['price'], 2) }}</span>
                                                                    @if(in_array($currency['position'], ['r', 'rs']))
                                                                        &nbsp;<i class="{{session()->get('currency')['value']}}"></i>
                                                                    @endif
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <h4 class="mt-5 text-center">{{ __('staticwords.YourShoppingcartisempty') }}</h4>
                                        @endif
                                      
                                    </div>
                                    <div class="cart-bottombar">
                                        <div class="text-dark row" style="background: #f2f4f5 !important;">
                                            <div class="p-2 col-md-6">
                                                <h6>{{ __('staticwords.Subtotal') }}</h6>
                                            </div>
                                            <div class="p-2 col-md-6 text-right">
                                                <i class="{{session()->get('currency')['value']}}"></i>
                                                <span>
                                                    @if(is_array($cartitems) && isset($cartitems['subtotal']))
                                                        {{ number_format($cartitems['subtotal'], 2) }}
                                                    @else
                                                        0.00
                                                    @endif
                                                </span>
                                            </div>
                    
                                            <div class="p-2 col-md-6">
                                                <h6>{{ __('staticwords.Shipping') }}</h6>
                                            </div>
                                            <div class="p-2 col-md-6 text-right">
                                                <i class="{{session()->get('currency')['value']}}"></i>
                                                <span>
                                                    @if(is_array($cartitems) && isset($cartitems['shipping']))
                                                        {{ number_format($cartitems['shipping'], 2) }}
                                                    @else
                                                        0.00
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class="row bg-primary text-light">
                                            <div class="p-2 col-md-6">
                                                <h5>{{ __('staticwords.Total') }}</h5>
                                            </div>
                                            <div class="p-2 col-md-6 text-right">
                                                <i class="{{session()->get('currency')['value']}}"></i>
                                                <span>
                                                    @if(is_array($cartitems) && isset($cartitems['total']))
                                                        {{ number_format($cartitems['total'], 2) }}
                                                    @else
                                                        0.00
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        
                                        @if(is_array($cartitems) && isset($cartitems['total']) && $cartitems['total'] != 0)
                                            <div class="row" style="background: #f2f4f5 !important;">
                                                <div class="p-2 col-md-6">
                                                    <a href="{{ url('/cart') }}" class="btn btn-md btn-outline-primary">
                                                        {{ __('staticwords.viewcart') }}
                                                    </a>
                                                </div>
                                                <div class="p-2 col-md-6 text-right">
                                                    <a href="{{ url('/checkout') }}" class="btn btn-md btn-primary">
                                                        {{ __('staticwords.Checkout') }}
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    @guest

                    <div class="login-block">
                        <a href="{{ route('login') }}">{{ __('staticwords.Login') }}</a>
                    </div>
                    @endguest
                </div>
                @auth
                @if ($wallet_system == 1)
                <div class="dropdown dropdown-cart">

                    <a title="My Wallet" href="{{ route('user.wallet.show') }}" class="lnk-cart">

                        <div class="items-cart-inner">
                            @if (($theme_settings && $theme_settings->key == 'pattern2') || $theme_settings->key ==
                            'pattern5')
                            <img style="width: 35px" class="wallet" src="{{ url('images/wallet-black.png') }}"
                                alt="wallet_icon">
                            @else
                            <img style="width: 35px" class="wallet" src="{{ url('images/wallet.png') }}"
                                alt="wallet_icon">
                            @endif
                            <div class="total-price-basket"> <span class="lbl">{{ __('staticwords.Wallet') }}</span>
                                <span class="value">
                                    <i class="{{ session()->get('currency')['value'] }}"></i>
                                    @if (isset(Auth::user()->wallet) && Auth::user()->wallet->status == 1)
                                    {{ price_format(currency(Auth::user()->wallet->balance, $from =
                                    $defCurrency->currency->code, $to = session()->get('currency')['id'], $format =
                                    false)) }}
                                    @else
                                    0.00
                                    @endif
                                </span>
                            </div>

                        </div>
                    </a>

                </div>
                @endif
                @endauth


                <!-- /.dropdown-cart -->

                <!-- ======================= SHOPPING CART DROPDOWN : END================================ -->
            </div>

            @endif

            @if (count($mostsearchwords))
            <div class="col-md-12">
                <div class="text-center">
                    <h6 class="text-white">{{ __('Most searched: ') }}

                        @foreach ($mostsearchwords as $word)
                        {{ $word->keyword }} @if (!$loop->last)
                        {{ __(',') }}
                        @endif
                        @endforeach

                    </h6>

                </div>
            </div>
            @endif

            <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>

<div class="header-nav animate-dropdown header-nav-screen">
    <div style="padding-right : 0px; padding-left : 0px;" class="container-fluid corner">
        <div class="yamm navbar navbar-default" role="navigation">

            <div class="nav-bg-class">
                <div class="bignavbar navbar-collapse collapse display-none" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">

                            @include('front.layout.topmenu')

                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.nav-outer -->
                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

</div>

<!-- Mobile Screen -->

<div class="wrapper" id="mobile-nav">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
            <h5>{{ __('staticwords.Welcome') }} @auth {{ Auth::user()->name }} @endauth
            </h5>
        </div>

        <ul class="mobile-menu-tabs nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="mob-tab nav-link active" id="menu-tab" data-toggle="tab" href="#menus" role="tab"
                    aria-controls="menu" aria-selected="true">{{ __('staticwords.Menu') }}</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link mob-tab" id="categories-tab" data-toggle="tab" href="#categories" role="tab"
                    aria-controls="categories" aria-selected="false">{{ __('staticwords.Categories') }}</a>
            </li>
        </ul>

        <div class="menubar tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="menus" role="tabpanel" aria-labelledby="home-tab">
                <ul id="mobilemenubar" class="list-unstyled components">
                    {{-- @include('front.layout.mobilemenu') --}}
                    @php
                    $menusdata = app('App\Http\Controllers\Web\HomeController')->topmenus();
                    $fallback_local = $menusdata['fallback_local'];
                    // $lang = $menusdata['lang'];
                    @endphp
                    @foreach ($menusdata['menus'] as $menu)
                    <li>
                        @if ($menu['show_cat_in_dropdown'] != 1 && $menu['show_child_in_dropdown'] != 1)
                        <a href="{{ $menu['link_by'] === 'page' ? url('/show/' . $menu['gotopage']['slug']) : $menu['url'] }}"
                            @if ($menu['link_by']==='cat' )
                            onclick="redirectMe('{{ $menu['cat_id'] }}', 'p'); return false;" @endif role="button"
                            class="bignavbar">

                            @if (!empty($menu['icon']))
                            <i class="fa {{ $menu['icon'] }}"></i>
                            @endif

                            {{ $menu['title'] }}
                        </a>
                        @endif
                    </li>
                    @endforeach

                    {{-- <mobile-menu-sidebar></mobile-menu-sidebar> --}}
                </ul>

                <ul class="list-unstyled components">
                    <p class="ml-2">{{ $footer3_widget->footer2 }}</p>
                    @auth
                    <li>
                        <a href="{{ url('profile') }}" title="My Account"><i
                                class="fa fa-user-circle-o"></i>&nbsp;&nbsp;{{ __('staticwords.MyAccount') }}</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    @if ($wallet_system == 1)
                    <li>
                        <a href="{{ route('user.wallet.show') }}">
                            <i class="fa fa-google-wallet"></i> &nbsp;&nbsp;{{ __('staticwords.MyWallet') }}

                            ( <i class="{{ session()->get('currency')['value'] }}"></i>
                            @if (isset(Auth::user()->wallet) && Auth::user()->wallet->status == 1)
                            {{ sprintf('%.2f', currency(Auth::user()->wallet->balance, $from =
                            $defCurrency->currency->code, $to = session()->get('currency')['id'], $format = false)) }}
                            @else
                            0.00
                            @endif)
                        </a>
                    </li>
                    @endif
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="{{ url('order') }}" title="Order History"><i class="fa fa-tasks"></i>&nbsp;&nbsp;{{
                            __('staticwords.OrderHistory') }}</a>
                    </li>
                    @endauth
                    @auth
                    <div id="mobilewishlist">
                        <div>
                            <div class="dropdown-divider"></div>
                            <li>
                               @php
$wishcount = app('App\Http\Controllers\Web\HomeController')->wishlistcount(false);
@endphp

<a href="{{ route('my.wishlist') }}" title="{{ __('staticwords.Wishlist') }}">
    <i class="fa fa-heart"></i>&nbsp;&nbsp;{{ __('staticwords.Wishlist') }}
    ({{ $wishcount }})
</a>

                            </li>
                            <div class="dropdown-divider"></div>
                        </div>

                        {{-- <mobile-wish-count></mobile-wish-count> --}}
                    </div>
                    @endauth
                    <div id="comparemobile">
                        <li>
                            @php
                            $comptotal = app('App\Http\Controllers\Web\HomeController')->comparecount();
                            @endphp
                            <a title="Your Comparison list" href="{{ url('/comparisonlist') }}">
                                <i class="fa fa-signal"></i> {{ __('staticwords.Compare') }}
                                ({{ $comptotal }})
                            </a>
                        </li>

                        {{-- <compare-m-count></compare-m-count> --}}
                    </div>

                </ul>

                <ul class="list-unstyled components">

                    <p class="ml-2">{{ $footer3_widget->footer3 }}</p>

                    @foreach ($widget3items as $fm)
                    <li>
                        @if ($fm->link_by == 'page' && !empty($fm->gotopage['slug']))
                        <a title="{{ $fm->title }}" href="{{ route('page.slug', $fm->gotopage['slug']) }}">
                            <i class="fa fa-circle-o"></i>&nbsp;&nbsp;{{ $fm->title }}
                        </a>
                        @else
                        <a target="__blank" title="{{ $fm->title }}" href="{{ $fm->url }}">
                            <i class="fa fa-circle-o"></i>&nbsp;&nbsp;{{ $fm->title }}
                        </a>
                        @endif
                    </li>
                    @endforeach

                </ul>
                <ul class="list-unstyled components">
                    <p class="ml-2">{{ $footer3_widget->footer4 }}</p>
                    @foreach ($widget4items as $foo)
                    <li>
                        @if ($foo->link_by == 'page' && isset($foo->gotopage->slug))
                        <a title="{{ $foo->title }}" href="{{ route('page.slug', $foo->gotopage->slug) }}">
                            <i class="fa fa-circle-o"></i>&nbsp;&nbsp;{{ $foo->title }}
                        </a>
                        @else
                        <a target="__blank" title="{{ $foo->title }}" href="{{ $foo->url }}">
                            <i class="fa fa-circle-o"></i>&nbsp;&nbsp;{{ $foo->title }}
                        </a>
                        @endif
                    </li>
                    @endforeach
                </ul>

                <ul class="list-unstyled components">

                    <p class="ml-2">{{ __('staticwords.Others') }}</p>


                    <li>
                        <a href="{{ route('hdesk') }}" title="Help Desk &amp; Support"><i class="fa fa-ticket"></i>
                            &nbsp;&nbsp;{{ __('staticwords.hpd') }}</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a title="{{ __('staticwords.ContactUs') }}" href="{{ route('contact.us') }}"
                            title="Contact us"><i class="fa fa-phone"></i>&nbsp;&nbsp;{{ __('staticwords.ContactUs') }}
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="{{ url('faq') }}" title="faq"> <i class="fa fa-question-circle"></i>&nbsp;&nbsp;{{
                            __('staticwords.faqs') }}</a>
                    </li>
                </ul>

            </div>

            <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="profile-tab">
                @php
                $sidebarcategories = app('App\Http\Controllers\Web\HomeController')->sidebarcategories();
                $fallback_local = $menusdata['fallback_local'];
                // $lang = $menusdata['lang'];
                @endphp
                {{-- @foreach ($categories as $category)
                {{ $category }}
                @endforeach --}}
                <ul id="mobilesidebar" class="list-unstyled components">

                    <div>

                        <ul class="nav flex-column flex-nowrap overflow-hidden">
                            @foreach ($sidebarcategories['categories'] as $category)
                            <li class="nav-item">
                                <div class="row">
                                    <div class="col-6">
                                        <a role="button" class="nav-link text-truncate" href="javascript:void(0)"
                                            onclick="redirectMe('{{ $category->id }}', 'p')">
                                            @if (!empty($category->icon))
                                            <i class="fa {{ $category->icon }}"></i>
                                            @endif
                                            <span class="d-inline">
                                                @if (is_array($category->title))
                                                {{ $category->title[$sidebarcategories['lang']] ??
                                                $category->title[$sidebarcategories['fallback_local']] }}
                                                @else
                                                {{ $category->title }}
                                                @endif
                                            </span>
                                        </a>
                                    </div>

                                    @if ($category->subcategory->isNotEmpty())
                                    <div class="col-6">
                                        <a role="button"
                                            class="c_icon_plus float-right collapsed nav-link text-truncate"
                                            href="#submenu{{ $category->id }}" data-toggle="collapse">
                                            <i class="fa fa-plus-square-o"></i>
                                        </a>
                                    </div>
                                    @endif
                                </div>

                                @if ($category->subcategory->isNotEmpty())
                                <div class="collapse" id="submenu{{ $category->id }}" aria-expanded="false">
                                    <ul class="flex-column pl-2 nav">
                                        @foreach ($category->subcategory as $subcategory)
                                        <div class="row">
                                            <div class="col-6">
                                                <a role="button" class="nav-link text-truncate"
                                                    href="javascript:void(0)"
                                                    onclick="redirectMe('{{ $subcategory->id }}', 's')">
                                                    @if (!empty($subcategory->icon))
                                                    <i class="fa {{ $subcategory->icon }}"></i>
                                                    @endif
                                                    <span class="d-inline">
                                                        @if (is_array($subcategory->title))
                                                        {{ $subcategory->title[$sidebarcategories['lang']] ??
                                                        $subcategory->title[$sidebarcategories['fallback_local']] }}
                                                        @else
                                                        {{ $subcategory->title }}
                                                        @endif


                                                    </span>
                                                </a>
                                            </div>

                                            @if ($subcategory->childcategory->isNotEmpty())
                                            <div class="col-6">
                                                <a role="button"
                                                    class="c_icon_plus float-right collapsed nav-link text-truncate"
                                                    href="#childmenu{{ $subcategory->id }}" data-toggle="collapse">
                                                    <i class="fa fa-plus-square-o"></i>
                                                </a>
                                            </div>
                                            @endif
                                        </div>

                                        @if ($subcategory->childcategory->isNotEmpty())
                                        <div class="collapse" id="childmenu{{ $subcategory->id }}"
                                            aria-expanded="false">
                                            <ul class="flex-column nav pl-4">
                                                @foreach ($subcategory->childcategory as $childcategory)
                                                <li class="nav-item">
                                                    <a role="button" class="nav-link p-1" href="javascript:void(0)"
                                                        onclick="redirectMe('{{ $childcategory->id }}', 'c')">
                                                        <i class="fa fa-star-o"></i>

                                                        @if (is_array($childcategory->title))
                                                        {{ $childcategory->title[$sidebarcategories['lang']] ??
                                                        $childcategory->title[$sidebarcategories['fallback_local']] }}
                                                        @else
                                                        {{ $childcategory->title }}
                                                        @endif

                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </li>

                            @endforeach
                        </ul>
                    </div>




                    {{-- <mobile-category-sidebar></mobile-category-sidebar> --}}

                    {{-- @include('front.mobile.categorysidebar') --}}

                </ul>
            </div>

        </div>







    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-align-left"></i>
                </button>

                <div class="d-flex justify-content-start">
                    <a href="{{ url('/') }}">
                        <img class="logo-img" src="{{ url('images/genral/' . $front_logo) }}" alt="min_logo">
                    </a>
                </div>

                <div class="control-group search-cat-box" id="search-xs">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <select id="searchDropMenu" class="searchDropMenu" name="cat">
                                <option value="all">{{ __('staticwords.AllCategory') }}</option>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                @foreach ($searchCategories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </span>
                        <input id="ipad_vsearch" required="" class="search-field" value=""
                            placeholder="{{ __('staticwords.search') }}" name="keyword">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i id="ipad-voice" class="fa fa-microphone" style=" cursor: pointer;"></i>

                                {{-- <ipad-voice-search voice_lang="{{ app()->getLocale() }}"></ipad-voice-search> --}}
                            </button>
                        </span>
                    </div>
                </div>

                <div style="position: relative;top:-3px;" class="btn-group">


                    <button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="btn d-inline-block d-lg-none ml-auto" type="button" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="text-white fa fa-user"></i>
                        @auth
                        @if ($unreadnotifications > 0)
                        <span class="dotbadge badge badge-pill badge-danger">
                            &nbsp;
                        </span>
                        @endif
                        @endauth
                    </button>

                    <div id="dropdownmenu2"
                        class="mt-0 square2 kdrop dropdown-menu {{ isset($selected_language) && $selected_language->rtl_available == 1 ? 'dropdown-menu-left' : 'dropdown-menu-right' }} dropdown-menu-lg-left">

                        <a href="{{ url('/cart') }}" class="dropdown-item" role="button">
                            {{ __('staticwords.Yourcart') }} (
                            @auth

                            {{ Auth::user()->cart->count() }}
                            @else
                            @php

                            $c = [];
                            $c = Session::get('cart');

                            if (!empty($c)) {
                            $c = array_filter($c);
                            } else {
                            $c = [];
                            }

                            @endphp

                            {{ count($c) }}


                            @endauth

                            )

                        </a>

                        @auth

                        <a data-toggle="modal" data-target="#notificationModal" href="{{ route('login') }}"
                            class="dropdown-item" role="button">

                            {{ __('staticwords.notifications') }}

                            <span class="badge badge-pill badge-danger">
                                {{ $unreadnotifications }}
                            </span>

                        </a>


                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="dropdown-item" role="button">
                            {{ __('staticwords.Login') }}
                        </a>
                        <a href="{{ route('register') }}" class="dropdown-item" role="button">
                            {{ __('staticwords.Register') }}
                        </a>
                        @endguest
                        @auth
                        <a class="dropdown-item" role="button" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                            {{ __('staticwords.Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="logout-form display-none">
                            @csrf
                        </form>
                        @endauth

                        <a data-toggle="modal" data-target="#currencyModal" class="dropdown-item" role="button">{{
                            __('staticwords.Currency') }}
                            ({{ session()->get('currency')['id'] }})</a>

                        <a data-toggle="modal" data-target="#langModal" class="dropdown-item" role="button">{{
                            __('staticwords.Langauge') }} ({{ app()->getLocale() }})</a>



                        @auth

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" data-toggle="modal" href="#feed" title="Feedback">
                            {{ __('staticwords.Feedback') }}</a>

                        @endauth


                    </div>

                </div>

                @auth
                <div data-backdrop="static" data-keyboard="false" id="notificationModal" class="modal fade"
                    tabindex="-1" role="dialog" aria-labelledby="notificationModaltitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">


                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                @if ($unreadnotifications > 0)
                                <a class="color111 float-right" href="{{ route('clearall') }}">{{
                                    __('staticwords.MarkallasRead') }}</a>
                                @endif

                                <h6 class="modal-title" id="my-modal-title">{{ __('staticwords.notifications') }}
                                    <span class="badge badge-pill badge-danger">
                                        {{ $unreadnotifications }}
                                    </span>
                                </h6>

                            </div>
                            <div class="modal-body">

                                @foreach (auth()->user()->unreadnotifications()->where('n_type', '!=', 'order_v')->get()
                                as $notification)
                                <small class="padding5P float-right"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ date('jS M y', strtotime($notification->created_at)) }}</small>
                                <a class="font-weight600 color111"
                                    href="{{ $notification->n_type == 'order' ? url('view/order/' . $notification->url) : url('mytickets') }}"
                                    onclick="markread('{{ $notification->id }}')"><i class="fa fa-circle-o"
                                        aria-hidden="true"></i>
                                    {{ $notification->data['data'] }}
                                </a>

                                <div class="dropdown-divider"></div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feedback Modal -->
                <div data-backdrop="static" data-keyboard="false" class="modal fade" id="feed" tabindex="-1"
                    role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h5 class="p-2 modal-title" id="myModalLabel"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i>
                                    {{ __('staticwords.FeedBackUs') }} </h5>
                            </div>
                            <div class="modal-body">
                                <div class="info-feed alert bg-yellow">
                                    <i class="fa fa-info-circle"></i>&nbsp;{{ __('staticwords.feedline') }}
                                </div>
                                <form class="needs-validation" action="{{ route('send.feedback') }}" method="POST"
                                    novalidate>
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="">{{ __('staticwords.Name') }}:
                                            <span class="required">*</span></label>
                                        <input required="" type="text" name="name" class="form-control"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="">{{ __('staticwords.Email') }}: <span
                                                class="required">*</span></label>
                                        <input required="" type="email" name="email" class="form-control"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="">{{ __('staticwords.Message') }}: <span
                                                class="required">*</span></label>
                                        <textarea required name="msg"
                                            placeholder="Tell us What You Like about us? or What should we do to more to improve our portal."
                                            cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="rat">
                                        <label class="font-weight-bold">&nbsp;{{ __('staticwords.RateUs') }}: <span
                                                class="required">*</span></label>
                                        <ul id="starRating" data-stars="5">
                                        </ul>
                                        <input type="hidden" id="" name="rate" value="1" class="getStar">
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('staticwords.Send') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth


                <div data-backdrop="static" data-keyboard="false" id="currencyModal" class="modal fade" tabindex="-1"
                    role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <h5 class="modal-title" id="my-modal-title">
                                    {{ __('staticwords.ChangeCurrency') }}
                                </h5>

                            </div>
                            <div class="modal-body">


                                @if ($auto->enabel_multicurrency == '1')
                                <select class="form-control currency" name="currency" onchange="val()" id="currency">

                                    @if ($auto->currency_by_country == 1)

                                    @if (!empty($manualcurrency))
                                    @foreach ($manualcurrency as $currency)
                                    @if (isset($currency->currency))
                                    <option {{ Session::get('currency')['mainid']==$currency->currency->id ? 'selected'
                                        : '' }}
                                        value="{{ $currency->currency->id }}">
                                        {{ $currency->currency->code }}
                                    </option>
                                    @endif
                                    @endforeach
                                    @else
                                    <option value="{{ $defCurrency->currency->id }}">
                                        {{ $defCurrency->currency->code }}</option>
                                    @endif
                                    @else
                                    @foreach ($multiCurrency as $currency)
                                    <option {{ Session::get('currency')['mainid']==$currency->currency->id ? 'selected'
                                        : '' }}
                                        value="{{ $currency->currency->id }}">
                                        {{ $currency->currency->code }}
                                    </option>
                                    @endforeach

                                    @endif

                                </select>
                                @else
                                <select class="form-control currency" name="currency" onchange="val()" id="currency">

                                    <option value="{{ $defCurrency->currency->id }}">
                                        {{ $defCurrency->currency->code }}</option>

                                </select>

                                @endif

                            </div>
                        </div>
                    </div>
                </div>

                <div data-backdrop="static" data-keyboard="false" id="langModal" class="modal fade" tabindex="-1"
                    role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <h5 class="modal-title" id="my-modal-title">
                                    {{ __('Change Language') }}
                                </h5>

                            </div>
                            <div class="modal-body">


                                <select class="form-control changed_language" name="" id="changed_lng">
                                    @foreach ($langauges as $lang)
                                    <option {{ Session::get('changed_language')==$lang->lang_code ? 'selected' : '' }}
                                        value="{{ $lang->lang_code }}">{{ $lang->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="control-group search-cat-box" id="search-sm">
                <form method="get" action="{{ url('search/') }}">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <select id="searchDropMenu" class="searchDropMenu" name="cat">
                                <option value="all">{{ __('staticwords.AllCategory') }}</option>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                @foreach ($searchCategories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </span>
                        <input id="m_search" required="" class="search-field" value=""
                            placeholder="{{ __('staticwords.search') }}" name="keyword">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i id="mobile-voice" class="fa fa-microphone" style=" cursor: pointer;"></i>
                                {{-- <mobile-voice-search voice_lang="{{ app()->getLocale() }}"></mobile-voice-search>
                                --}}
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </nav>


    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all offcanvas elements
        var offcanvasElements = document.querySelectorAll('.offcanvas')
        offcanvasElements.forEach(function (offcanvasEl) {
            new bootstrap.Offcanvas(offcanvasEl)
        })
    })
</script>
<script>
    function markAsRead(id) {
    axios.get('/usermarkreadsingle', {
        params: {
            id1: id
        }
    })
    .then(res => {
        if (res.data.status === 'success') {
            // Optionally reload or remove the notification
            document.getElementById(`notification-${id}`).remove();
        }
    })
    .catch(err => console.log(err));
}

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const lang = '{{ app()->getLocale() }}'; // Example language
        let recognition = null;
        let runtimeTranscription = '';
        let word = 'Click on Mic to begin search';

        // Initialize jQuery UI Autocomplete
        $("#v_search").autocomplete({
            source: function(request, response) {
                // Perform search logic here and provide suggestions
                var suggestions = ["apple", "banana", "cherry"]; // Example list
                response(suggestions);
            }
        });

        // Function to display the alert
        function showAlert() {
            Swal.fire({
                showConfirmButton: false,
                html: `
                    <div class="mb-5">
                        <div class="circle_ripple"></div>
                        <div class="circle_ripple-2"></div>
                        <div class="circle">
                            <div class="circle-2">
                                <i class="fa fa-microphone"></i>
                            </div>
                        </div>
                        <div class="progress blue">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                        </div>
                    </div>
                    <p class="mt-6">${word}</p>
                `,
            });
        }

        // Start voice recognition
        function startRecognition() {
            word = 'Listening...';
            showAlert();
            checkApi();
            recognition.start();
        }

        // Stop voice recognition
        function stopRecognition() {
            recognition.stop();
            Swal.close();
            recognition = null;
        }

        // Check if the browser supports SpeechRecognition
        function checkApi() {
            window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert('Speech Recognition is not supported on this browser. Use Chrome or Firefox.');
                return;
            }

            recognition = new SpeechRecognition();
            recognition.lang = lang;
            recognition.interimResults = true;

            recognition.addEventListener('result', event => {
                const text = Array.from(event.results)
                    .map(result => result[0])
                    .map(result => result.transcript)
                    .join('');
                runtimeTranscription = text;
            });

            recognition.addEventListener('end', () => {
                if (runtimeTranscription !== '') {
                    word = runtimeTranscription;
                    Swal.close();
                    // Trigger autocomplete search
                    $("#v_search").autocomplete("search", word);
                    stopRecognition();
                } else {
                    word = 'Please try again!';
                    Swal.close();
                    stopRecognition();
                }
                runtimeTranscription = '';
            });
        }

        // Bind the startRecognition method to the mic icon click event
        document.getElementById('voice-icon').addEventListener('click', startRecognition);
    });
</script>


{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const lang = '{{ app()->getLocale() }}'; // Example language
        let recognition = null;
        let runtimeTranscription = '';
        let word = 'Click on Mic to begin search';

        // Initialize jQuery UI Autocomplete
        $("#ipad_vsearch").autocomplete({
            source: function(request, response) {
                // Perform search logic here and provide suggestions
                var suggestions = ["apple", "banana", "cherry"]; // Example list
                response(suggestions);
            }
        });

        // Function to display the alert
        function showAlert() {
            Swal.fire({
                showConfirmButton: false,
                html: `
                    <div class="mb-5">
                        <div class="circle_ripple"></div>
                        <div class="circle_ripple-2"></div>
                        <div class="circle">
                            <div class="circle-2">
                                <i class="fa fa-microphone"></i>
                            </div>
                        </div>
                        <div class="progress blue">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                        </div>
                    </div>
                    <p class="mt-6">${word}</p>
                `,
            });
        }

        // Start voice recognition
        function startRecognition() {
            word = 'Listening...';
            showAlert();
            checkApi();
            recognition.start();
        }

        // Stop voice recognition
        function stopRecognition() {
            recognition.stop();
            Swal.close();
            recognition = null;
        }

        // Check if the browser supports SpeechRecognition
        function checkApi() {
            window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert('Speech Recognition is not supported on this browser. Use Chrome or Firefox.');
                return;
            }

            recognition = new SpeechRecognition();
            recognition.lang = lang;
            recognition.interimResults = true;

            recognition.addEventListener('result', event => {
                const text = Array.from(event.results)
                    .map(result => result[0])
                    .map(result => result.transcript)
                    .join('');
                runtimeTranscription = text;
            });

            recognition.addEventListener('end', () => {
                if (runtimeTranscription !== '') {
                    word = runtimeTranscription;
                    Swal.close();
                    // Trigger autocomplete search
                    $("#ipad_vsearch").autocomplete("search", word);
                    stopRecognition();
                } else {
                    word = 'Please try again!';
                    Swal.close();
                    stopRecognition();
                }
                runtimeTranscription = '';
            });
        }

        // Bind the startRecognition method to the mic icon click event
        document.getElementById('ipad-voice').addEventListener('click', startRecognition);
    });
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const lang = '{{ app()->getLocale() }}'; // Example language
        let recognition = null;
        let runtimeTranscription = '';
        let word = 'Click on Mic to begin search';

        // Initialize jQuery UI Autocomplete
        $("#m_search").autocomplete({
            source: function(request, response) {
                // Perform search logic here and provide suggestions
                var suggestions = ["apple", "banana", "cherry"]; // Example list
                response(suggestions);
            }
        });

        // Function to display the alert
        function showAlert() {
            Swal.fire({
                showConfirmButton: false,
                html: `
                    <div class="mb-5">
                        <div class="circle_ripple"></div>
                        <div class="circle_ripple-2"></div>
                        <div class="circle">
                            <div class="circle-2">
                                <i class="fa fa-microphone"></i>
                            </div>
                        </div>
                        <div class="progress blue">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                        </div>
                    </div>
                    <p class="mt-6">${word}</p>
                `,
            });
        }

        // Start voice recognition
        function startRecognition() {
            word = 'Listening...';
            showAlert();
            checkApi();
            recognition.start();
        }

        // Stop voice recognition
        function stopRecognition() {
            recognition.stop();
            Swal.close();
            recognition = null;
        }

        // Check if the browser supports SpeechRecognition
        function checkApi() {
            window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

            if (!SpeechRecognition) {
                alert('Speech Recognition is not supported on this browser. Use Chrome or Firefox.');
                return;
            }

            recognition = new SpeechRecognition();
            recognition.lang = lang;
            recognition.interimResults = true;

            recognition.addEventListener('result', event => {
                const text = Array.from(event.results)
                    .map(result => result[0])
                    .map(result => result.transcript)
                    .join('');
                runtimeTranscription = text;
            });

            recognition.addEventListener('end', () => {
                if (runtimeTranscription !== '') {
                    word = runtimeTranscription;
                    Swal.close();
                    // Trigger autocomplete search
                    $("#m_search").autocomplete("search", word);
                    stopRecognition();
                } else {
                    word = 'Please try again!';
                    Swal.close();
                    stopRecognition();
                }
                runtimeTranscription = '';
            });
        }

        // Bind the startRecognition method to the mic icon click event
        document.getElementById('mobile-voice').addEventListener('click', startRecognition);
    });

    
</script>

<script>
    document.getElementById('icon').addEventListener('click', function () {
        this.closest('form').submit();
    });
</script>
