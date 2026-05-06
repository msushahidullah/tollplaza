@extends("frontend.layout.master")
@section('title','Emart | Home')
@section("content")    
    @if($offersettings && $offersettings->enable_popup=='1' && Cookie::get('popup') == '')
      <!-- Modal Start -->
        <div id="homemodal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-center">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="modal-home-img" style="background-image: url('<?= URL::to('/'); ?>/images/offerpopup/{{$offersettings->image}}');"></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="modal-home-block text-center">
                      <h3 class="section-title" style="color: {{ $offersettings->heading_color }};">{{$offersettings?$offersettings->heading:''}}</h3>
                      <h4 class="section-sub-title" style="color: {{ $offersettings->subheading_color }};">{{$offersettings?$offersettings->subheading:''}}</h4>
                      <p style="color: {{ $offersettings->description_text_color }};">{{$offersettings?$offersettings->description:''}}</p>
                      @if($offersettings->enable_button=='1' && $offersettings->button_text)
                      <a href="{{$offersettings?$offersettings->button_link:''}}" class="btn btn-primary" title="{{$offersettings?$offersettings->button_text:''}}" style="color: {{ $offersettings->button_color }};"><span style="color: {{ $offersettings->button_text_color }};">{{$offersettings?$offersettings->button_text:''}}</span></a>
                      @endif
                      <div class="form-check">
                        <input class="form-check-input offerpop_not_show" type="checkbox" name="do_not_show_me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Don't show me this popup again !</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Modal End -->
    @endif

    <!-- Home Start -->
    <section id="home" class="home-main-block" data-aos="fade-left">
      <div class="container">
        <div class="row g-0">
          <div class="col-xl-3 col-lg-3"></div>
          <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="fade-home-slider">
              @foreach($sliders as $key => $slider)
                <div class="item">
                  <div class="home-image">
                    <img src="{{url('images/slider/'.$slider->image)}}" class="img-fluid" alt="">
                  </div>
                  <div class="home-block" data-aos="fade-up">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="home-title-block">
                          <h3 class="home-title" style="color: {{ $slider->headingtextcolor }};">{{ $slider->heading }}</h3>
                          <h6 class="home-sub-title" style="color: {{ $slider->subheadingcolor }};">{{ $slider->topheading }}</h6>
                        </div>
                        <div class="home-dtl">
                          <p style="color: {{ $slider->short_description_color }};">{{ $slider->short_description }}</p>
                          @if($slider->call_support_status=='1')
                          <div class="home-contact">
                            <div class="contact-icon">
                              <i data-feather="phone-call" style="color: {{ $slider->call_icon_color }};"></i>
                            </div>
                            <div class="contact-dtl">
                              <h6 class="contact-title" style="color: {{ $slider->call_title_color }};">{{ $slider->call_title }}</h6>
                              <p style="color: {{ $slider->call_no_color }};">{{ $slider->call_no }}</p>
                            </div>
                          </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home End -->

    @if(!empty($footer3_widget ))
    <!-- Customer Support Start -->
    <section id="customer-support" class="customer-support-main-block">
        <div class="container">
            <div class="row">
                @if($footer3_widget->shiping)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="customer-support-block border-hover" data-aos="fade-right">
                      <div class="border-hover-two">
                        <div class="row">
                          <div class="col-lg-3 col-4">
                            <div class="support-img">
                              <img src="{{ url('frontend/assets/images/support/shipping icon.png') }}" class="img-fluid shipping-img" alt="">
                            </div>
                          </div>
                          <div class="col-lg-9 col-8">
                            <div class="support-dtl">
                                <h5 class="support-title">{{ $footer3_widget->shiping }}</h5>
                                <p></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @endif
                @if($footer3_widget->mobile)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="customer-support-block border-hover" data-aos="fade-up">
                      <div class="border-hover-two">
                        <div class="row">
                          <div class="col-lg-3 col-4">
                            <div class="support-img">
                                <img src="{{ url('frontend/assets/images/support/headset-solid.png') }}" class="img-fluid" alt="">
                            </div>
                          </div>
                          <div class="col-lg-9 col-8">
                            <div class="support-dtl">
                                <h5 class="support-title">{{ $footer3_widget->mobile }}</h5>
                                <p></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @endif
                @if($footer3_widget->return)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="customer-support-block border-hover" data-aos="fade-up">
                      <div class="border-hover-two">
                        <div class="row">
                          <div class="col-lg-3 col-4">
                            <div class="support-img">
                                <img src="{{ url('frontend/assets/images/support/security.png') }}" class="img-fluid" alt="">
                            </div>
                          </div>
                          <div class="col-lg-9 col-8">
                            <div class="support-dtl">
                                <h5 class="support-title">{{ $footer3_widget->return }}</h5>
                                <p></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @endif
                @if($footer3_widget->money)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="customer-support-block border-hover" data-aos="fade-left">
                      <div class="border-hover-two">
                        <div class="row">
                          <div class="col-lg-3 col-4">
                            <div class="support-img">
                                <img src="{{ url('frontend/assets/images/support/money.png') }}" class="img-fluid" alt="">
                            </div>
                          </div>
                          <div class="col-lg-9 col-8">
                            <div class="support-dtl">
                                <h5 class="support-title">{{ $footer3_widget->money }}</h5>
                                <p></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Customer Support End -->
    @endif

    @if(count($featured_category))
    <!-- Categories Start -->
    <section id="categories" class="categories-main-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="section-title">{{__('Top Categories')}}</h3>
          </div>
          <div class="col-lg-6">
            <div class="view-all-btn">
              <a href="{{url('shop')}}" type="button" class="btn btn-primary" title="{{__('View All')}}">{{__('View All')}}</a>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($featured_category as $key => $featured_cat)
            <div class="col-lg-3">
              <div class="categories-block border-hover" data-aos="fade-up">
                <div class="border-hover-two">
                  <div class="cat-img">
                    @if($featured_cat->image != '' && file_exists(public_path() . '/images/category/' . $featured_cat->image))
                      <img src="{{ url('images/category/'.$featured_cat->image) }}" class="img-fluid" alt="{{__($featured_cat->title)}}">
                    @else
                      <img class="img-fluid" title="{{__($featured_cat->title)}}" src="{{url('images/no-image.png')}}" alt="No Image" />
                    @endif
                    <div class="cat-dtl">
                      <div class="cat-dtl-two">
                        <h4 class="cat-title">{{$featured_cat->title}}</h4>
                        <a href="javascript:" title="{{$featured_cat->title}}" onclick="changeCategory({{$featured_cat->id}},'main')" type="button" target="_blank" class="btn btn-primary shop-now-btn" title="">Shop Now <i data-feather="arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </section>
    <!-- Categories End -->
    @endif

    @if(count($featured_products))
    <!-- Featured Product Start -->
    <section id="featured-product" class="featured-product-main-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-8">
            <h3 class="section-title">{{__('Featured Products')}}</h3>
          </div>
          <div class="col-lg-6 col-4">
            <div class="view-all-btn">
              <a href="{{url('featured/products')}}" type="button" class="btn btn-primary" title="{{__('View All')}}">{{__('View All')}}</a>
            </div>
          </div>
        </div>
        <div class="row">
          @if(count($featured_products))
          <div class="col-lg-4" data-aos="fade-right">
            <div class="featured-block">
              <div class="featured-img">
              @if($featured_products[0]->thumbnail != '' && file_exists(public_path().'/images/simple_products/'.$featured_products[0]->thumbnail))
                <img src="{{ url('images/simple_products/'.$featured_products[0]->thumbnail) }}" class="img-fluid" alt="{{__($featured_products[0]->product_name)}}">
              @else
                <img class="img-fluid" title="{{ $featured_products[0]->product_name }}" src="{{url('images/no-image.png')}}" alt="No Image" />
              @endif
              </div>
              <div class="featured-badge">
                @if($featured_products[0]->offer_price != 0)
                  @php
                    $conversion_rate = 1;
                    $getdisprice = ($featured_products[0]->price*$conversion_rate) - ($featured_products[0]->offer_price * $conversion_rate);
                    $gotdis = $getdisprice/($featured_products[0]->price * $conversion_rate);
                    $offamount = round($gotdis*100);

                  @endphp
                  <span class="badge text-bg-warning">{{ $offamount }}% {{__("off")}}</span>
                @endif
              </div>
            </div>
            <div class="featured-dtl">
              <div class="featured-title-star">
                <div class="row">
                  <div class="col-lg-6 col-6">
                    <h4 class="featured-dtl-title truncate"><a href="{{ route('show.product',['id' => $featured_products[0]->id, 'slug' => $featured_products[0]->slug]) }}" title="{{__($featured_products[0]->product_name)}}">{{__($featured_products[0]->product_name)}}</a></h4>
                    <p>{{__('By')}} <span><a href="#" title="" class="store-name">{{__($featured_products[0]->store?$featured_products[0]->store->name:'')}}</a></span></p>
                  </div>
                  <div class="col-lg-6 col-6">
                    <?php

                      $review_t = 0;

                      $price_t = 0;

                      $value_t = 0;

                      $sub_total = 0;

                      $ratings_var = 0;

                      $count = count($featured_products[0]->reviews);

                      $onlyrev = array();

                      foreach ($featured_products[0]->reviews as $review) {
                          $review_t = $review->qty * 5;
                          $price_t = $review->price * 5;
                          $value_t = $review->value * 5;
                          $sub_total = $sub_total + $review_t + $price_t + $value_t;
                      }

                      $count = ($count * 3) * 5;

                      if ($count != "" && $count > 0) {
                        $rat = $sub_total / $count;

                        $ratings_var = ($rat * 100) / 5;

                        $overallrating = ($ratings_var / 2) / 10;
                      }

                      ?>
                    @if(isset($ratings_var))
                      <div class="star-ratings-sprite"><span style="width:<?php echo $ratings_var; ?>%;" class="star-ratings-sprite-rating"></span></div>
                    @endif
                  </div>
                </div>
              </div>
              <div class="featured-price-btn">
                <div class="row">
                  <div class="col-lg-6 col-6">
                    <div class="featured-price">
                      <i class="{{ session()->get('currency')?session()->get('currency')['value']:'' }}"></i>
                      {{ $featured_products[0]->offer_price != 0 && $featured_products[0]->offer_price != '' ? price_format($featured_products[0]->offer_price) :  price_format($featured_products[0]->price)  }}
                    </div>
                  </div>
                  <div class="col-lg-6 col-6">
                    <div class="featured-add-btn">
                      <form method="POST" action="{{ $featured_products[0]->type == 'ex_product' ? $featured_products[0]->external_product_link : route('add.cart.simple',['pro_id' => $featured_products[0]->id, 'price' => $featured_products[0]->price, 'offerprice' => $featured_products[0]->offer_price]) }}" class="addSimpleCardFrom{{$featured_products[0]->id}}">
                          @csrf

                          <input name="qty" type="hidden" value="{{ $featured_products[0]->min_order_qty }}" max="{{ $featured_products[0]->max_order_qty }}" class="qty-section">

                          <a href="javascript:" class="btn btn-primary" onclick="addSimpleProCard({{$featured_products[0]->id}})" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Add To Cart')}}">{{__('Add')}}<i data-feather="shopping-cart"></i></a>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          <div class="col-lg-8" data-aos="fade-up">
            <div class="row">
              @if($featured_products)
              @foreach($featured_products as $key => $featured_pro)
                @if(!$key==0)
                <div class="col-lg-4 col-md-4 col-6">
                  <div class="featured-product-block">
                    <div class="featured-product-img">
                      <a href="javascript:" title="">
                        @if($featured_pro->thumbnail != '' && file_exists(public_path().'/images/simple_products/'.$featured_pro->thumbnail))
                          <img src="{{ url('images/simple_products/'.$featured_pro->thumbnail) }}" class="img-fluid" alt="{{__($featured_pro->product_name)}}">
                        @else
                          <img class="img-fluid" title="{{ $featured_pro->product_name }}" src="{{url('images/no-image.png')}}" alt="No Image" />
                        @endif
                      </a>
                      <div class="featured-product-icon">
                        <ul>
                          <li><a href="{{ route('show.product',['id' => $featured_pro->id, 'slug' => $featured_pro->slug]) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('View')}}"><i data-feather="eye"></i></a></li>
                          @auth

                            @if($featured_pro->type != 'ex_product')
                            
                                @if(inwishlist($featured_pro->id))
                                <li>
                                    <a class="add_in_wish_simple add-wishlist" data-proid="{{ $featured_pro->id }}" data-bs-status="{{ inwishlist($featured_pro->id) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Wishlist')}}" href="javascript:void(0)">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                @else
                                <li>
                                    <a class="add_in_wish_simple" data-proid="{{ $featured_pro->id }}" data-bs-status="{{ inwishlist($featured_pro->id) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Wishlist')}}" href="javascript:void(0)">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                @endif

                            @endif

                          @endauth
                          <li>
                            <form method="POST" action="{{ $featured_pro->type == 'ex_product' ? $featured_pro->external_product_link : route('add.cart.simple',['pro_id' => $featured_pro->id, 'price' => $featured_pro->price, 'offerprice' => $featured_pro->offer_price]) }}" class="addSimpleCardFrom{{$featured_pro->id}}">
                                @csrf

                                <input name="qty" type="hidden" value="{{ $featured_pro->min_order_qty }}" max="{{ $featured_pro->max_order_qty }}" class="qty-section">

                                <a href="javascript:" onclick="addSimpleProCard({{$featured_pro->id}})" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Add To Cart')}}"><i data-feather="shopping-cart"></i></a>

                            </form>
                          </li>
                          <li><a href="{{ route('compare.product',$featured_pro->id) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Compare"><i data-feather="anchor"></i></a></li>
                        </ul>
                      </div>
                      <div class="featured-product-badge">
                        @if($featured_pro->offer_price != 0)
                          @php
                            $conversion_rate = 1;
                            $getdisprice = ($featured_pro->price*$conversion_rate) - ($featured_pro->offer_price * $conversion_rate);
                            $gotdis = $getdisprice/($featured_pro->price * $conversion_rate);
                            $offamount = round($gotdis*100);

                          @endphp
                          <span class="badge text-bg-warning">{{ $offamount }}% {{__("off")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="featured-product-dtl">
                      <div class="row">
                        <div class="col-lg-7">
                          <h6 class="featured-product-title truncate"><a href="{{ route('show.product',['id' => $featured_pro->id, 'slug' => $featured_pro->slug]) }}" title="{{__($featured_pro->product_name)}}">{{__($featured_pro->product_name)}}</a></h6>
                          <p>By <span><a href="#" title="" class="store-name">{{__($featured_pro->store?$featured_pro->store->name:'')}}</a></span></p>
                        </div>
                        <div class="col-lg-5">
                          <div class="featured-product-price">
                            <i class="{{ session()->get('currency')?session()->get('currency')['value']:'' }}"></i>
                            {{ $featured_pro->offer_price != 0 && $featured_pro->offer_price != '' ? price_format($featured_pro->offer_price) :  price_format($featured_pro->price)  }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
              @endforeach
              @else
                @php
                  $conversion_rate = 1;
                @endphp
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Product End -->
    @else
        <?php $conversion_rate = 1; ?>
    @endif

    @if(count($deals) && $deals)
    <!-- Flash Deal Start -->
    <section id="flash-deal" class="flash-deal-main-block">
      <div class="container">
        <h3 class="section-title">{{__('Flash Deals')}} <i data-feather="zap"></i></h3>
        <div class="fade-home-slider">
          @foreach($deals as $deal)
          <div class="item">
            <a href="{{ route('flashdeals.view',['id' => $deal->id, 'slug' => str_slug($deal->title,'-')]) }}" title="{{$deal->title}}">
              <div class="flashdeal-bg-block">
                <div class="flashdeal-bg-block-img">
                  <img src="{{ url('frontend/assets/images/flash_deals/flash-deal-bg.png')}}" class="img-fluid" alt="{{$deal->title}}">
                  <div class="flashdeal-bg-dtl">
                    <div class="row">
                      <div class="col-lg-8" data-aos="fade-right">
                        <h4 class="section-title">{{$deal->title}}</h4>
                        <div class="badge text-bg-warning sale-date">{{date('d', strtotime($deal->start_date))}}<sup>st</sup>{{date('F', strtotime($deal->start_date))}} - {{date('d', strtotime($deal->end_date))}}<sup>th</sup> {{date('F', strtotime($deal->end_date))}}</div>
                      </div>
                      <div class="col-lg-4" data-aos="fade-left">
                        <div class="flashdeal-bg-img">
                          <img src="{{ url('images/flashdeals/'.$deal->background_image) }}" class="img-fluid" alt="{{$deal->title}}">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach          
        </div>
      </div>
    </section>
    <!-- Flash Deal End -->
    @endif

    <!-- three_layout_banners -->
    @if(isset($three_layout_banners) && $three_layout_banners)
    <section id="offer-one" class="offer-one-main-block">
      <div class="container">
        <div class="row">
          @if($three_layout_banners->image1 && file_exists(public_path() . '/images/layoutads/' . $three_layout_banners->image1))
            <div class="col-lg-6">
              <div class="gift-block" data-aos="fade-right">
                <div class="gift-img">
                  <img src="{{ url('/images/layoutads/'.$three_layout_banners->image1) }}" class="img-fluid" alt="">
                  <div class="gift-dtl">
                    <h4 class="gift-title">{{$three_layout_banners->heading1}}</h4>
                    <p>{{$three_layout_banners->sub_heading1}}</p>
                    @if($three_layout_banners->url1)
                    <a href="{{$three_layout_banners->url1}}" type="button" class="btn btn-primary shop-now-btn" title="{{__('Shop Now')}}">{{__('Shop Now')}} <i data-feather="arrow-right"></i></a> 
                    @endif
                  </div>
                </div>
              </div>
            </div>
          @endif
          <div class="col-lg-6" data-aos="fade-left">
            @if($three_layout_banners->image2 && file_exists(public_path() . '/images/layoutads/' . $three_layout_banners->image2))
              <div class="bluetooth-block">
                <div class="bluetooth-img">
                  <img src="{{ url('/images/layoutads/'.$three_layout_banners->image2) }}" class="img-fluid" alt="">
                  <div class="bluetooth-dtl">
                    <h5 class="bluetooth-sub-title">{{$three_layout_banners->heading2}}</h5>
                    <h4 class="bluetooth-title">{{$three_layout_banners->sub_heading2}}</h4>
                    @if($three_layout_banners->url2)
                    <a href="{{$three_layout_banners->url2}}" type="button" class="btn btn-primary shop-now-btn" title="{{__('Shop Now')}}">{{__('Shop Now')}} <i data-feather="arrow-right"></i></a> 
                    @endif
                  </div>
                </div>
              </div>
            @endif
            @if($three_layout_banners->image3 && file_exists(public_path() . '/images/layoutads/' . $three_layout_banners->image3))
            <div class="sunglass-block">
              <div class="sunglass-img">
                <img src="{{ url('/images/layoutads/'.$three_layout_banners->image3) }}" class="img-fluid" alt="">
                <div class="sunglass-dtl">
                  <h5 class="sunglass-sub-title">{{$three_layout_banners->heading3}}</h5>
                  <h4 class="sunglass-title">{{$three_layout_banners->sub_heading3}}</h4>
                  @if($three_layout_banners->url3)
                    <a href="{{$three_layout_banners->url3}}" type="button" class="btn btn-primary shop-now-btn" title="{{__('Shop Now')}}">{{__('Shop Now')}} <i data-feather="arrow-right"></i></a> 
                    @endif
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </section>
    @endif

    @if(count($categories_tab))
    <!-- Popular Item Start -->
    <section id="popular-item" class="popular-item-main-block">
      <div class="container">
        <h3 class="section-title">{{__('Popular Items')}}</h3>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              @foreach($categories_tab as $key => $cat)
              @if($key=='0')
              <a href="#{{str_replace(' ','-',$cat->title)}}" class="nav-link active show" id="{{str_replace(' ','-',$cat->title)}}-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="{{str_replace(' ','-',$cat->title)}}" aria-selected="true" title="{{ __($cat->title) }}">
                @if($cat->icon != '' && file_exists(public_path() . '/images/category/' . $cat->icon))
                <img src="{{url('images/category/'.$cat->icon)}}" class="img-fluid" alt="{{ __($cat->title) }}">
                @endif 
                {{ __($cat->title) }}
              </a>
              @else
              <a href="#{{str_replace(' ','-',$cat->title)}}" class="nav-link" id="{{str_replace(' ','-',$cat->title)}}-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="{{str_replace(' ','-',$cat->title)}}" aria-selected="false" title="{{ __($cat->title) }}">
              @if($cat->icon != '' && file_exists(public_path() . '/images/category/' . $cat->icon))
                <img src="{{url('images/category/'.$cat->icon)}}" class="img-fluid" alt="{{ __($cat->title) }}">
                @endif 
                {{ __($cat->title) }}
              </a>
              @endif
              @endforeach
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-6" data-aos="fade-left">
            <div class="tab-content" id="v-pills-tabContent">
            @foreach($categories_tab as $key => $cat)
              <div class="tab-pane fade {{$key=='0'?'show active':''}}" id="{{str_replace(' ','-',$cat->title)}}" role="tabpanel" aria-labelledby="{{str_replace(' ','-',$cat->title)}}-tab" tabindex="0">
                <div class="row"> 
                
                  @if($cat->products->where('status', 1)->count())
                    @foreach($cat->products->where('status', 1)->take(9) as $product)
                    @if(isset($product->product_name) && $product->product_name)
                      <?php $url = "route('show.product',['id' => $product->id, 'slug' => $product->slug])"; ?>
                    @else
                      <?php 
                          
                          if($product->subvariants && count($product->subvariants)){
                              $url = App\Helpers\ProductUrl::getUrl($product->subvariants[0]->id);
                          }else {
                              $url = 'javascript:';
                          }
                        
                      ?>
                    @endif
                      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-6">
                        <div class="popular-block">
                          <div class="popular-img-dtl">
                            <div class="popular-img">
                              <a href="{{ $url }}">
                              @if($product->thumbnail != '' && file_exists(public_path().'/images/simple_products/'.$product->thumbnail))
                                <img src="{{ url('images/simple_products/'.$product->thumbnail) }}" class="img-fluid" alt="{{__($product->product_name)}}">
                              @else
                                @if(isset($product->subvariants) && count($product->subvariants))
                                  @if($product->subvariants != '' && $product->subvariants[0]->variantimages != '' && file_exists(public_path().'/variantimages/thumbnails/'.$product->subvariants[0]->variantimages->main_image))
                                    <img src="{{ url('/variantimages/thumbnails/'.$product->subvariants[0]->variantimages->main_image) }}" class="img-fluid" alt="{{__($product->product_name)}}">
                                  @else
                                    <img class="img-fluid" title="{{ $product->product_name }}" src="{{url('images/no-image.png')}}" alt="No Image" />
                                  @endif
                                @else
                                  <img class="img-fluid" title="{{ $product->product_name }}" src="{{url('images/no-image.png')}}" alt="No Image" />
                                @endif
                              @endif
                              </a>
                            </div>
                            <div class="popular-dtl">
                              <a href="{{ $url }}">
                              <h5 class="popular-title truncate">
                                @if(isset($product->product_name) && $product->product_name)
                                  {{ $product->product_name }}
                                @else
                                  {{ $product->name }}
                                @endif                            
                              </h5>
                              <p>
                                <i class="{{ session()->get('currency')?session()->get('currency')['value']:'' }}"></i>
                                @if(isset($product->product_name) && $product->product_name)
                                {{ $product->offer_price != 0 && $product->offer_price != '' ? price_format($product->offer_price) :  price_format($product->price)  }}
                                @else
                                  {{ $product->vender_offer_price != 0 && $product->vender_offer_price != '' ? price_format($product->vender_offer_price) :  price_format($product->vender_price)  }}
                                @endif  
                              </p>
                              </a>
                            </div>
                          </div>
                          <div class="featured-product-icon">
                            <ul>
                              @if(isset($product->product_name) && $product->product_name)
                                <!-- Simple Product -->
                                <li><a href="{{ route('show.product',['id' => $product->id, 'slug' => $product->slug]) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('View')}}"><i data-feather="eye"></i></a></li>
                                @auth

                                  @if($product->type != 'ex_product')
                                      
                                      
                                      @if(inwishlist($product->id))
                                      <li>
                                          <a class="add_in_wish_simple add-wishlist" data-proid="{{ $product->id }}" data-status="{{ inwishlist($product->id) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Wishlist')}}" href="javascript:void(0)">
                                              <i data-feather="heart"></i>
                                          </a>
                                      </li>
                                      @else
                                      <li>
                                          <a class="add_in_wish_simple" data-proid="{{ $product->id }}" data-status="{{ inwishlist($product->id) }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Wishlist')}}" href="javascript:void(0)">
                                              <i data-feather="heart"></i>
                                          </a>
                                      </li>
                                      @endif

                                  @endif

                                @endauth
                                <li>
                                  <form method="POST" action="{{ $product->type == 'ex_product' ? $product->external_product_link : route('add.cart.simple',['pro_id' => $product->id, 'price' => $product->price, 'offerprice' => $product->offer_price]) }}" class="addSimpleCardFrom{{$product->id}}">
                                      @csrf

                                      <input name="qty" type="hidden" value="{{ $product->min_order_qty }}" max="{{ $product->max_order_qty }}" class="qty-section">

                                      <a href="javascript:" onclick="addSimpleProCard({{$product->id}})" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Add To Cart')}}"><i data-feather="shopping-cart"></i></a>

                                  </form>
                                </li>
                              @else
                                <!-- Variant Product -->
                                <?php 
                               
                                    if($product->subvariants && count($product->subvariants)){
                                        $url = App\Helpers\ProductUrl::getUrl($product->subvariants[0]->id);
                                    }else {
                                        $url = 'javascript:';
                                    }
                                   
                                ?>
                                <li><a href="{{ $url }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('View')}}"><i data-feather="eye"></i></a></li>
                                @auth
                                    @if(Auth::user()->wishlist()->count() < 1) 
                                    @if(isset($product->subvariants[0]))
                                        <li class="lnk wishlist">
                                            <a class="addtowish" mainid="{{ $product->subvariants[0]->id }}" data-add="{{url('AddToWishList/'.$product->subvariants[0]->id)}}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{ __('Add To WishList') }}"> <i data-feather="heart"></i></a>
                                        </li>
                                        @endif
                                    @else

                                        @php
                                            $ifinwishlist = App\Wishlist::where('user_id',Auth::user()->id)->where('pro_id',$product->subvariants[0]->id)->first();
                                        @endphp

                                        @if(!empty($ifinwishlist))
                                        <li class="lnk wishlist active">
                                            <a class="addtowish" mainid="{{ $product->subvariants[0]->id }}" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{ __('Remove From Wishlist') }}" data-add="{{url('removeWishList/'.$product->subvariants[0]->id)}}"> <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                        @else
                                        <li class="lnk wishlist">
                                          <a data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{ __('Add To WishList') }}" class="addtowish" mainid="{{ $product->subvariants[0]->id }}" data-add="{{url('AddToWishList/'.$product->subvariants[0]->id)}}"> <i data-feather="heart"></i> </a>
                                        </li>
                                        @endif

                                    @endif
                                @endauth
                                <li>
                                    <?php
                                        if($product->subvariants && count($product->subvariants)){
                                            $varintid = $product->subvariants[0]->id;
                                        } else {
                                            $varintid = '0';
                                        }
                                    ?>
                                    <form method="POST" action="{{route('add.product.cart',['id' => $product->id ,'variantid' =>$varintid, 'varprice' => $product->vender_price?$product->vender_price:"0"  , 'varofferprice' => $product->vender_offer_price?$product->vender_offer_price:"0" ,'qty' =>'1'])}}" class="addVariantProCard{{$product->id}}">
                                        {{ csrf_field() }}
                                        <a href="javascript:" onclick="addVariantProCard({{$product->id}})" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="{{__('Add to Cart')}}"><i data-feather="shopping-cart"></i></a>
                                    </form>
                                </li>
                              @endif
                            </ul>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @else
                      <div class="text-center">
                        <h6>No Products</h6>
                      </div>
                  @endif
                </div>
              </div>
            @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Item End -->
    @endif

    @if($brands_info && count($brands_info))
    <!-- Feature Brand Start -->
    <section id="feature-brand" class="feature-brand-main-block">
      <div class="container">
        <h3 class="section-title">{{__('Brand')}}</h3>
        <div class="row">
          <div class="col-lg-12">
            <div id="featured-brand-slider" class="featured-brand-slider-main-block owl-carousel owl-theme">
              @foreach($brands_info as $brand)
              <div class="item" data-aos="fade-right">
                <div class="featured-brand-block border-hover">
                  <div class="border-hover-two">
                    <div class="featured-brand-img">
                      <!-- <a href="" title="{{ $brand->name }}"> -->
                        @if($brand->image != '' && file_exists(public_path().'/images/brands/'.$brand->image))
                          <img src="{{ url('/images/brands/'.$brand->image) }}" width="200px" height="200px" class="img-fluid" alt="{{__($brand->name)}}">
                        @else
                          <img class="img-fluid" title="{{ $brand->name }}" src="{{url('images/no-image.png')}}" width="200px" height="200px" alt="No Image" />
                        @endif
                      <!-- </a> -->
                    </div>
                    <div class="featured-brand-dtl">
                      <h6 class="featured-brand-title">
                        <!-- <a href="javascript:" title="{{$brand->name}}"> -->
                          {{$brand->name}}
                        <!-- </a> -->
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature Brand End -->
    @endif

    @if($two_adv_banners && isset($two_adv_banners))
      <!-- Offer Two Start -->
      <section id="offer-two" class="offer-two-main-block">
        <div class="container">
          <div class="row">

            @if($two_adv_banners->image1 && file_exists(public_path() . '/images/layoutads/' . $two_adv_banners->image1))
            <div class="col-lg-6 col-md-6">
              <div class="furniture-block" data-aos="fade-right">
                <a href="{{$two_adv_banners->url1?$two_adv_banners->url1:'javascript:'}}">
                  <div class="furniture-img">
                    <img src="{{ url('/images/layoutads/'.$two_adv_banners->image1) }}" class="img-fluid" alt="">
                    <div class="furniture-dtl" data-aos="fade-down">
                      <h3 class="furniture-sub-title">{{$two_adv_banners->heading1}}</h3>
                      <h2 class="furniture-title">{{$two_adv_banners->sub_heading1}}</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            @endif
                                        
            @if($two_adv_banners->image2 && file_exists(public_path() . '/images/layoutads/' . $two_adv_banners->image2))
            <div class="col-lg-6 col-md-6">
              <div class="camera-block" data-aos="fade-left">
                <a href="{{$two_adv_banners->url2?$two_adv_banners->url2:'javascript:'}}">
                  <div class="camera-img">
                    <img src="{{ url('/images/layoutads/'.$two_adv_banners->image2) }}" class="img-fluid" alt="">
                    <div class="camera-dtl" data-aos="fade-up">
                      <h3 class="camera-sub-title">{{$two_adv_banners->heading2}}</h3>
                      <h2 class="camera-title">{{$two_adv_banners->sub_heading2}}</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            @endif

          </div>
        </div>
      </section>
      <!-- Offer Two End -->
    @endif

    @if($blogs && count($blogs))
    <!-- Blog Start -->
    <section id="blog" class="blog-main-block">
      <div class="container">
        <h3 class="section-title">{{__('Latest Blog')}}</h3>
        <div class="row">
          @foreach($blogs as $key => $blog)
          
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="blog-block border-hover" data-aos="fade-left">
              <div class="border-hover-two">
                <div class="blog-img">
                  <a href="{{ route('front.blog.show',$blog->slug) }}" title="">
                    @if($blog->image != '' && file_exists(public_path().'/images/blog/'.$blog->image))
                      <img src="{{ url('/images/blog/'.$blog->image) }}" class="img-fluid" alt="{{__($blog->heading)}}">
                    @else
                      <img class="img-fluid" title="{{ $blog->heading }}" src="{{url('images/no-image.png')}}" alt="No Image" />
                    @endif
                  </a>
                </div>
                <div class="blog-post">
                  <div class="row">
                    <div class="col-lg-8 col-8">
                      <div class="blog-date">
                        <ul>
                          <li><a href="{{ route('front.blog.show',$blog->slug) }}" title="{{date('M d,Y', strtotime($blog->created_at))}}">{{date('M d,Y', strtotime($blog->created_at))}}</a></li>
                          <li>{{__('By')}} <span><a href="{{ route('front.blog.show',$blog->slug) }}" title="{{__('User')}}">{{$blog->user}}</a></span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4 col-4">
                      <p><a href="{{ route('front.blog.show',$blog->slug) }}" title="{{ read_time($blog->des ) }}">{{ read_time($blog->des ) }}</a></p>
                    </div>
                  </div>
                </div>
                <div class="blog-dtl">
                  <h5 class="blog-title"><a href="{{ route('front.blog.show',$blog->slug) }}" title="{{ __($blog->heading) }}">{{ substr($blog->heading,'0','25') }}..</a></h5>
                  <p>{{ str_limit(strip_tags(html_entity_decode($blog->des)), $limit = 100, $end = '...') }}</p>
                  <a href="{{ route('front.blog.show',$blog->slug) }}" type="button" class="btn btn-primary" title="Read More">Read More</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Blog End -->
    @endif

    @if($genral && $genral->content && $genral->writer)
    <!-- Background Start -->
    <section id="background" class="background-main-block" style="background-image: url('frontend/assets/images/slider/bg.png');">
      <div class="container">
        <div class="background-block">
          <h3 class="bg-title" data-aos="fade-right">{!!$genral->content!!}</h3>
          <p data-aos="fade-left">― {{$genral->writer}}</p>
        </div>
      </div>
    </section>
    <!-- Background End -->
    @endif
    
    @if($stores && count($stores))
    <!-- Clients Start -->
    <section id="clients" class="clients-main-block">
      <div class="container">
        <div class="row">
          <h3 class="section-title">{{__('Our Clients')}}</h3>
          <div id="clients-slider" class="clients-slider-main-block owl-carousel owl-theme">
            @foreach($stores as $key => $store)
              @if($store->store_logo != '' && file_exists(public_path().'/images/store/'.$store->store_logo))
              <div class="item" data-aos="fade-right">
                <div class="clients-slider-block border-hover">
                  <div class="border-hover-two">
                    <div class="clients-slider-img">
                      <a href="javascript:" title="{{__($store->name)}}">
                        <img src="{{ url('/images/store/'.$store->store_logo) }}" class="img-fluid" alt="{{__('Store Logo')}}">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Clients End -->
    @endif

    <section id="newsletter" class="newsletter-main-block">
      <div class="container">
        <div class="row g-0">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="newsletter-block">
              <h1 class="newsletter-title">@lang("Subscribe to Our Newsletter")</h1>
              <p>@lang("Sign up today for a 10% off coupon and unlock more deals.")</p>
              <div class="newsletter-mail">
                <form method="post" action="{{url('newsletter')}}">
                  @csrf
                  <input required type="email" name="email" id="email" placeholder="Your Email" class="form-control">
                  <button class="btn" type="submit"><i data-feather="send"></i></button>
                  <label>
                    <input type="checkbox" checked="checked" name="subscribe">{{__('I agree with the terms and conditions')}}
                  </label>
                </form>
              </div>
            </div>
          </div>
          @if($footer && isset($footer) && $footer->image != '' && file_exists(public_path().'/images/newslatter/'.$footer->image))
          <div class="col-lg-6" data-aos="fade-left">
            <div class="newsletter-img">
              <img src="{{url('images/newslatter/'.$footer->image)}}" class="img-fluid" alt="">
              <div class="newsletter-dtl">
                <div class="code"></div>
                <p>{{$footer->heading}}</p>
                <h4 class="title">{{$footer->sub_heading}}</h4>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>

@endsection
@section('script')  
    <script>
        $(document).ready(function () {
            $('.categorylist').show();
        });
    </script>
    <script>
      $('.offerpop_not_show').on('change',function(){

        if($(this).is(":checked")){
            var opt = 1;
        }else{
            var opt = 0;
        }

        $.ajax({
            type : 'GET',
            url  : '{{ route("offer.pop.not.show") }}',
            data : {opt : opt},
            dataType : 'json',
            success : function(response){
                console.log(response);
            }
        });

      });
    </script>

@endsection