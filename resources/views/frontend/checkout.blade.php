@extends("frontend.layout.master")
@section('title','Emart | Checkout')
@section("content")   
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<!-- Home Start -->
<section id="home" class="home-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" class="breadcrumb-main-block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" title="Home">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Checkout')}}</li>
                    </ol>
                </nav>
                <div class="about-breadcrumb-block wishlist-breadcrumb" style="background-image: url('frontend/assets/images/checkout/breadcrumb.png');">
                    <div class="breadcrumb-nav">
                        <h3 class="breadcrumb-title">{{__('Checkout')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home End -->

    <!-- Checkout Start -->
    <section id="checkout" class="checkout-main-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="accordion" id="accordionExample">

              <div class="checkout-login checkout-block accordion-item">
                <div class="accordion-header">
                  <h3 class="section-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">A. @guest <span>1</span> {{ __('Login') }} @else {{ __('Logged In') }} @endguest</h3>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="social-login-block">
                      @auth
        							  <p>
                          <div class="verified-icon">
                            <i data-feather="check-circle"></i>
                            <b>{{ Auth::user()->name }}</b>
                          </div>
                          
                        </p>
                        <p>
                          <div class="verified-icon">
                            <i data-feather="check-circle"></i>
                            {{ Auth::user()->email }}
                          </div>
                            
                        </p>
              	    	@endauth
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="checkout-block accordion-item">
                <div class="checkout-address accordion-header">
                  <h3 class="section-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <div class="row">
                      <div class="col-lg-12">
                        B. {{__('Shipping Address')}}
                      </div>
                    </div>
                  </h3>
                  <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="py-30">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="view-all-btn">
                              <a class="btn btn-primary btn-sm" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i data-feather="plus"></i>{{__('Add New Address')}}</a>
                            </div>
                          </div>
                        </div>
                        <form action="{{route('choose.address')}}" method="post">
                          @csrf
                          <input type="hidden" name="total" value="{{$total}}">

                          @if(count($addresses))
                            @foreach($addresses as $key => $address)
                            <label class="address-checkbox mb-30">
                              @if($address->defaddress == 1)
                              <span>(Default)</span>
                              @endif
                              <div class="address-dtl">
                                <div class="row">
                                  <div class="col-lg-4 col-md-4">
                                    <h6 class="address-name">{{$address->name}}</h6>
                                  </div>
                                  <div class="col-lg-8 col-md-8">
                                    <ul>
                                      <li>{{ $address->phone }}</li>
                                      <li>{{ strip_tags($address->address) }}, </li>
                                      <li>{{ $address->getcity ? $address->getcity->name : '' }},{{ $address->getstate->name }},{{ $address->getCountry->nicename }} {{ $address->pin_code }}</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              @if($address->defaddress == 1)
                              <input type="checkbox" id="add{{$key}}" name="seladd" checked="checked" value="{{ $address->id }}">
                              <span class="checkmark checkmark-one"></span>
                              @else 
                              <input type="checkbox" name="seladd" id="add{{$key}}" value="{{ $address->id }}">
                              <span class="checkmark"></span>
                              @endif
                              
                            </label>
                            @endforeach
                          @else
                            <h3>{{ __('No Address') }}</h3>
                          @endif
                          <input type="hidden" name="shipping" value="{{ $shippingcharge }}">

                          @if(Auth::user()->addresses->count()>0)
                          <button type="submit" class="btn btn-primary">{{ __('Deliver Here') }}</button>
                          @endif
                        </form>

                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Add New Address</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              @php
                                $ifadd = count(Auth::user()->addresses);
                              @endphp
                              <form action="{{ route('address.store2') }}" role="form" method="POST">
                                <div class="modal-body">
                                  <div class="row">

                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label>{{ __('Name') }}: <span class="required">*</span></label>
                                        <input required="" type="text" placeholder="Enter name" name="name" @if($ifadd<1) value="{{ Auth::user()->name }}" @else value="" @endif class="form-control">
                                      </div>
                                    </div>

                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label>{{ __('PhoneNo') }}: <span class="required">*</span></label>
                                        <input pattern="[0-9]+" required="" type="text" name="phone" @if($ifadd<1) value="{{ Auth::user()->mobile }}" @else value="" @endif placeholder="Enter phone no" class="form-control">
                                      </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                      <div class="form-group">
                                        <label>{{ __('Email') }}: <span class="required">*</span></label>
                                        <input required="" @if($ifadd<1) value="{{ Auth::user()->email }}" @else value="" @endif type="email" name="email" placeholder="Enter email" class="form-control">
                                      </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                      <label>{{ __('Address') }}: <span class="required">*</span></label>
                                      <textarea required="" name="address" id="address" cols="20" rows="1" class="form-control"></textarea>
                                    </div>

                                    @if ($pincodesystem == 1)
                                    <div class="col-lg-6 mt-4">
                                      <label>{{ __('Pincode') }}: <span class="required">*</span></label>
                                      <input pattern="[0-9]+" required="" placeholder="{{ __('Enter pin code') }}" type="text" id="pincode" class="form-control z-index99" name="pin_code">
                                    </div>
                                    @endif
                                    
                                    <div class="col-lg-6 mt-4">
                                      <label for="select_city" class="form-label">City: <span class="required">*</span></label>
                                      <select id="select_location" class="form-select select2" name="city_id" onchange="selectCity(this.value)">
                                          <option value="">{{ __('Select City') }}</option>                
                                          @foreach(App\Allcity::get() as $city)
                                          <option value="{{$city->id}}">{{ $city->name }}</option>
                                          @endforeach                
                                      </select>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                      <label for="select_state" class="form-label">{{ __('State') }}: <span class="required">*</span></label>
                                      <select id="select_state" name="state_id" class="form-select" aria-label="Default select example"></select>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                      <label for="select_country" class="form-label">{{ __('Country') }}: <span class="required">*</span></label>
                                      <select id="select_country" class="form-select" aria-label="Default select example" name="country_id"></select>
                                    </div>

                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-primary" type="submit">{{__('Submit')}}</button>
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>  

              <div class="checkout-block accordion-item">
                <div class="checkout-shipping-method accordion-header">
                  <h3 class="section-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">{{__('C.')}} {{__('Billing Information')}}</h3>
                </div>
              </div>

              <div class="checkout-block accordion-item">
                <div class="checkout-shipping-method accordion-header">
                  <h3 class="section-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">{{__('D. Order Review')}}</h3>
                </div>
              </div>

              <div class="checkout-block accordion-item">
                <div class="checkout-shipping-method accordion-header">
                  <h3 class="section-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">{{__('E. Payment Info')}}</h3>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="cart-block">
              <h4 class="section-title">{{__('Payment Details')}}</h4>
              <table class="table">
                <tbody>
                  <tr>
                    <td style="width: 70%;">{{__('Subtotal')}}</td>
                    <td><i class="{{session()->get('currency')['value']}}"></i> {{price_format($total*$conversion_rate,2)}}</td>
                  </tr>
                  @if(Session::get('gift'))
                  <tr>
                    <td style="width: 70%;">{{ __('Gift Discount') }}</td>
                    <td class="wishlist-out-stock"><i class="{{session()->get('currency')['value']}}"></i> {{Session::get('gift')['discount']}}</td>
                  </tr>
                  @endif
                  @if(Auth::check() && App\Cart::isCoupanApplied() == 1)
                  <tr>
                    <td style="width: 70%;">{{ __('Discount') }}</td>
                    <td class="wishlist-out-stock"><i class="{{session()->get('currency')['value']}}"></i> {{price_format(App\Cart::getDiscount()*$conversion_rate,2)}}</td>
                  </tr>
                  @endif
                </tbody>
              </table>
              <table class="table total-amount-table">
                <tbody>
                  <tr>
                    <td style="width: 70%;">{{ __('Total') }}</td>
                    <td>
                    <i class="{{session()->get('currency')['value']}}"></i>
                    @if(!App\Cart::isCoupanApplied() == 1)
                      @if(Session::get('gift'))
                        {{price_format($grandtotal*$conversion_rate,2) - Session::get('gift')['discount']}}
                      @else
                        {{price_format($grandtotal*$conversion_rate,2)}}
                      @endif
                    @else
                      @if(Session::get('gift'))
                        {{price_format(($grandtotal-App\Cart::getDiscount())*$conversion_rate,2) - Session::get('gift')['discount']}}
                      @else
                        {{price_format(($grandtotal-App\Cart::getDiscount())*$conversion_rate,2)}}
                      @endif
                    @endif
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Checkout End -->

@endsection
@section('script')
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
     $("#select_location").select2({
          placeholder: "Select a programming language",
          allowClear: true
      });
      $("#select_location").select2({
          minimumInputLength: 2
      });
    </script>
    <script>
      function selectCity(city_id) {
        var up = $('#select_state').empty();
        var up1 = $('#select_country').empty();
        var cat_id = city_id;

        if (cat_id) {
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: baseUrl + '/admin/select_state_country',
            data: {
              catId: cat_id
            },
            success: function (data) {
              console.log(data);
              // $('#country_id').append('<option value="">Please Choose</option>');
              // up.append('<option value="">Please Choose</option>');
              $.each(data.states, function (id, title) {
                up.append($('<option>', {
                  value: id,
                  text: title
                }));
              });

              $.each(data.country, function (id, title) {
                up1.append($('<option>', {
                  value: id,
                  text: title
                }));
              });
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
              console.log(XMLHttpRequest);
            }
          });
        }
      }
    </script>
    @endsection