@php

$pricing = array();
$customer_price = 0;
$customer_price=0;
$customeroffer_price;
$show_price = 0;
$convert_price = 0;

if($a != null){
  $products = array_unique($products);
}

$current_date = date('Y-m-d h:i:s');

@endphp

@if(count($simple_products))
  @foreach($simple_products as $sp)
  @if($sp->offer_price != 0)

    @php
      array_push($pricing, $sp->offer_price);
    @endphp

  @else 

    @php
      array_push($pricing, $sp->price);
    @endphp

  @endif
  @endforeach
@endif


@if($products != null && count($products) || count($simple_products))

@foreach($simple_products as $simple_pro)

    @php
      $finalprice = $simple_pro->offer_price != 0 ? $simple_pro->offer_price : $simple_pro->price;
      
    @endphp

    @if($starts <= $finalprice * $conversion_rate && $ends >= $finalprice * $conversion_rate)
    
      @include('front.cat.simple_product')

    @endif

@endforeach

@foreach($products as $product)

@foreach($product->subvariants as $key=> $sub)



@if($price_login == 0 || Auth::user())

@php


$commision_setting = App\CommissionSetting::first();

if($commision_setting->type == "flat"){

  $commission_amount = $commision_setting->rate;

if($commision_setting->p_type == 'f'){

if($product->tax_r !=''){

  $cit = $commission_amount*$product->tax_r/100;

  $totalprice = $product->vender_price+$sub->price+$commission_amount+$cit;

  if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL)
  {
    $totalsaleprice = $product->vender_offer_price + $sub->price + $commission_amount+$cit;
  }else{
    $totalsaleprice = 0;
  }

}else{

  $totalprice = $product->vender_price+$orivar->price+$commission_amount;

  if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL)
  {
    $totalsaleprice = $product->vender_offer_price + $sub->price + $commission_amount;
  }else{
    $totalsaleprice = 0;
  }

}


if($totalsaleprice == 0){

  $customer_price = $totalprice;
  $customer_price = round($customer_price * round($conversion_rate, 4), 2);
  $convert_price = 0;
  $show_price = $customer_price;

}else{

  $customer_price = $totalsaleprice;
  $customer_price = round($customer_price * round($conversion_rate, 4), 2);
  $convert_price = $totalsaleprice;
  $show_price = $totalprice;
}


}else{


  $totalprice = ($product->vender_price+$sub->price)*$commission_amount;

  if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL){
    $totalsaleprice = ($product->vender_offer_price+$sub->price)*$commission_amount;
  }

  $buyerprice = ($product->vender_price+$sub->price)+($totalprice/100);

  if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL){
    $buyersaleprice = ($product->vender_offer_price+$sub->price)+($totalsaleprice/100);
  }else {
    $buyersaleprice = 0;
  }


  if($buyersaleprice ==0){
    $customer_price = round($buyerprice,2);
    $customer_price = round($customer_price * round($conversion_rate, 4), 2);
    $convert_price = 0;
    $show_price = $buyerprice;
  }else{
    $customer_price = round($buyersaleprice,2);
    $customer_price = round($customer_price * round($conversion_rate, 4), 2);
    $convert_price = $buyersaleprice;
    $show_price = $buyerprice;
  }


}
}else{

$comm = App\Commission::where('category_id',$product->category_id)->first();


if(isset($comm)){
if($comm->type=='f'){

  $commission_amount = $comm->rate;

  if($product->tax_r !=''){

    $cit = $commission_amount*$product->tax_r/100;
    $totalprice = $product->vender_price+$sub->price+$commission_amount+$cit;

    if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL)
    {
      $totalsaleprice = $product->vender_offer_price + $sub->price + $commission_amount + $cit;
    }else{
      $totalsaleprice = 0;
    }

  }else{

    $totalprice = $product->vender_price+$sub->price+$commission_amount;

    if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL)
    {
      $totalsaleprice = $product->vender_offer_price + $sub->price + $commission_amount;
    }else{
      $totalsaleprice = 0;
    }

  }

  if($totalsaleprice == 0){

    $customer_price = $totalprice;
    $customer_price = round($customer_price * round($conversion_rate, 4), 2);
    $convert_price = 0;
    $show_price = $totalprice;

  }else{

    $customer_price = $totalsaleprice;
    $customer_price = round($customer_price * round($conversion_rate, 4), 2);
    $convert_price = $totalsaleprice;
    $show_price = $totalprice;

  }

}
else{

  $commission_amount = $comm->rate;

  $totalprice = ($product->vender_price+$sub->price)*$commission_amount;

  if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL){
    $totalsaleprice = ($product->vender_offer_price+$sub->price)*$commission_amount;
  }

  $buyerprice = ($product->vender_price+$sub->price)+($totalprice/100);

  if($product->vender_offer_price != 0 || $product->vender_offer_price != NULL){
    $buyersaleprice = ($product->vender_offer_price+$sub->price)+($totalsaleprice/100);
  }else {
    $buyersaleprice = 0;
  }


  if($buyersaleprice ==0){
    $customer_price = round($buyerprice,2);
    $customer_price = round($customer_price * round($conversion_rate, 4), 2);
    $convert_price = 0;
    $show_price = $buyerprice;
  }else{
    $customer_price = round($buyersaleprice,2);
    $customer_price = round($customer_price * round($conversion_rate, 4), 2);
    $convert_price = $buyersaleprice;
    $show_price = $buyerprice;
  }

}
}else{

  $commission_amount = 0;

  $totalprice = ($product->vender_price + $sub->price) * $commission_amount;

  $totalsaleprice = ($product->vender_offer_price + $sub->price) * $commission_amount;

  $buyerprice = ($product->vender_price + $sub->price) + ($totalprice / 100);

  $buyersaleprice = ($product->vender_offer_price + $sub->price) + ($totalsaleprice / 100);

  if ($product->vender_offer_price == 0)
  {
    $customer_price = round($buyerprice, 2);
    $customer_price = round($customer_price * round($conversion_rate, 4) , 2);
  }
  else
  {
    $customer_price = round($buyersaleprice, 2);
    $customer_price = round($customer_price * round($conversion_rate, 4) , 2);
    $convert_price = $buyersaleprice == '' ? $buyerprice : $buyersaleprice;
    $show_price = $buyerprice;
  }
}
}

@endphp

@endif
@php

  $var_name_count = count($sub['main_attr_id']);

  $name;
  $var_name;
  $newarr = array();

  for($i = 0; $i<$var_name_count; $i++){ 
  
    $var_id=$sub['main_attr_id'][$i];
    
    $var_name[$i]=$sub['main_attr_value'][$var_id]; // echo($orivar['main_attr_id'][$i]);
    $name[$i]=App\ProductAttributes::where('id',$var_id)->first();

  }


  try{
    $url = url('details').'/'.$product->id.'?'.$name[0]['attr_name'].'='.$var_name[0].'&'.$name[1]['attr_name'].'='.$var_name[1];
  }catch(\Exception $e)
  {
    $url = url('details').'/'.$product->id.'?'.$name[0]['attr_name'].'='.$var_name[0];
  }

  array_push($pricing, $customer_price);
  @endphp
  @if($outofstock == 1)




  @if($sub->stock > 0)

  <!-- if stock is greater than 0 start -->
  @if($start_price == 1)

  <!-- on price slider start_price = 1 and on load also -->
  @if($starts <= $customer_price && $ends>= $customer_price)
    <!-- Starts and Ends values are came from URL -->

    @if($a != null)
    <!-- $a = subvariant unique array only work with variant filter -->
      @foreach($a as $provars)
      <!-- Extract Variant array  -->
        @if($provars->id == $sub->id)
        <!-- match unique subvariant id to all subvariant id -->
          

          @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)

            <!-- only work with rating filter -->
            @include('front.cat.filterproduct')

          @else
            @if($ratings == 0)
              @include('front.cat.filterproduct')
            @else
                <!-- No code -->
            @endif
            
          @endif


        @endif
      @endforeach
    @else

    

      @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
            
        @include('front.cat.filterproduct')

      @else
        @if($ratings == 0)

        @include('front.cat.filterproduct')

        @else
        @endif
      @endif


    @endif

    @endif
    @else

    @if($start <= $customer_price && $end >= $customer_price)

      @if($a != null)
          @foreach($a as $provars)
            @if($provars->id == $sub->id)
            

              @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
                @include('front.cat.filterproduct')
              @else
                @if($ratings == 0)
                  @include('front.cat.filterproduct')
                @else

                @endif
              @endif

            @endif
          @endforeach
      @else
     


        @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
          @include('front.cat.filterproduct')
        @else
          @if($ratings == 0)
            @include('front.cat.filterproduct')
          @else

          @endif
        @endif

      @endif
      @endif
      @endif
      @else

      {{--  <span>{{ __('staticwords.ComingSoon') }}</span> Product will show here --}}

      @endif



      @else
      {{--   <span>{{ __('staticwords.ComingSoon') }}</span> include --}}
      @if($sub->stock > 0)
      @if($start_price == 1)

      @if($starts <= $customer_price && $ends>= $customer_price)


        @if($a != null)
        @foreach($a as $provars)
        @if($provars->id == $sub->id)
        
        @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
          @include('front.cat.filterproduct')
        @else

        @if($ratings == 0)
          @include('front.cat.filterproduct')
        @else

        @endif
        @endif


        @endif
        @endforeach
        @else

       
        @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)

          @include('front.cat.filterproduct')

        @else

        @if($ratings == 0)

          @include('front.cat.filterproduct')

        @else



        @endif
        @endif


        @endif

        @endif
        @else

        @if($start <= $customer_price && $end>= $customer_price)
          @if($a != null)
          @foreach($a as $provars)
          @if($provars->id == $sub->id)
          
          @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)

            @include('front.cat.filterproduct')

          @else


          @if($ratings == 0)
            @include('front.cat.filterproduct')
          @else

          @endif
          @endif

          @endif
          @endforeach
          @else
          

          @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)

            @include('front.cat.filterproduct')

          @else

            @if($ratings == 0)
              @include('front.cat.filterproduct')
            @else

            @endif

          @endif

          @endif
          @endif
          @endif
          @else



          @if($start_price == 1)

          @if($starts <= $customer_price && $ends>= $customer_price)


            @if($a != null)
              @foreach($a as $provars)
                @if($provars->id == $sub->id)
                

                  @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
                    @include('front.cat.filterproduct')
                  @else
                    @if($ratings == 0)
                      @include('front.cat.filterproduct')
                    @else

                    @endif
                  @endif


                @endif
              @endforeach
            @else


              @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)

                @include('front.cat.filterproduct')

              @else
                @if($ratings == 0)
                  @include('front.cat.filterproduct')
                @else

                @endif
              @endif


            @endif

            @endif
            @else
            @if($start <= $customer_price && $end>= $customer_price)
              @if($a != null)
                @foreach($a as $provars)
                
                    @if($provars->id == $sub->id)
                  

                      @if(get_product_rating($product->id) != 0 && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
                        
                        @include('front.cat.filterproduct')

                      @else

                        @if($ratings == 0)
                          @include('front.cat.filterproduct')
                        @else

                      @endif

                    @endif

                @endif
                @endforeach
              @else

                

                  @if(get_product_rating($product->id) != 0  && $start_rat !=null && get_product_rating($product->id) >= $start_rat)
                    @include('front.cat.filterproduct')
                  @else

                    @if($ratings == 0)
                                  
                      @include('front.cat.filterproduct')
                    
                    @else

                    @endif
                    
                  @endif

              @endif
              @endif
              @endif



              @endif
              @endif


              @endforeach
              @endforeach
              @else
                <div class="mx-auto">
                  <img class="lazy" data-src="{{ url('images/nocart.jpg') }}" alt="{{ __("404") }}"
                    title="{{ __("No results found !") }}">
                  <h3 class="text-center">{{ __('No results found !') }}</h3>
                </div>
              @endif

              <?php
                if($pricing != null){
                  $first_cat=min($pricing);
                  $last_cat=max($pricing);
                }else{
                  $first_cat=0;
                  $last_cat=0;
                }
                if($brand_names == null || $tags_pro == null){
                $brandAvl = 0;
                }else{
                $brandAvl = 1;
                }
                if($slider == 'yes'){
                  $sliding = 1;
                }else{
                  $sliding = 0;
                }
              ?>




  <script>
    var baseUrl = @json('/');
  </script>
  <script>
    var lprice = @json($first_cat * round($conversion_rate, 4));
    var hprice = @json($last_cat * round($conversion_rate, 4));
    var brandAvl = @json($brandAvl);
    var sliding = @json($sliding);
    var tag_chk = @json($tag_check);
  </script>
  <script src="{{ url('js/filterproduct.js') }}"></script>
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
        addToWishUrl = '{{ route('add.pro.wishlist', ':id') }}'.replace(':id', productId);
    } else {
        addToWishUrl = '{{ route('add.simple.pro.in.wishlist', ':id') }}'.replace(':id', productId);
    }
    
    $.ajax({
        url: addToWishUrl,
        type: 'GET',
        global: false,
        success: function(response) {
            
            // Handle both JSON object and string responses
            let status, message, count;
            
            if (typeof response === 'object') {
                status = response.status;
                message = response.msg || response.message;
                count = response.count;
            } else {
                status = response; // For backward compatibility with string responses
            }
            
            if (status === 'success') {
                // Update wishlist count if provided
                if (count !== undefined) {
                    $('#wishcount').text(count);
                } else {
                    // Fallback: increment current count
                    var wc = Number($('#wishcount').text()) + 1;
                    $('#wishcount').text(wc);
                }
                
                Swal.fire({
                    title: "Added",
                    text: message || 'Added to your wishlist!',
                    icon: 'success'
                });
                
                // Update UI to show remove button
                $('#addtowish' + id).parent().html(
                    '<a id="removefromwish' + id + '" onclick="removeFromWishlist(' + id + ', \'' +
                    productType + '\', ' + productId +
                    '); return false;" class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromWishlist') }}"><i class="fa fa-heart"></i></a>'
                );
            } else if (status === 'exists' || status === 'error') {
                Swal.fire({
                    title: "Oops!",
                    text: message || 'Product is already in your wishlist!',
                    icon: 'warning'
                });
            } else if (status === 'unauthenticated') {
                Swal.fire({
                    title: "Login Required",
                    text: message || 'Please login to use this feature!',
                    icon: 'info'
                });
            } else {
                // Handle unexpected responses
                Swal.fire({
                    title: "Error",
                    text: message || 'Something went wrong!',
                    icon: 'error'
                });
            }
        },
        error: function(xhr, status, error) {
            console.error("[ADD TO WISHLIST] AJAX Error:", { 
                response: xhr.responseText, 
                status: xhr.status, 
                error 
            });
            
            let errorMessage = 'Failed to connect to the server!';
            
            // Try to parse error response
            try {
                const errorResponse = JSON.parse(xhr.responseText);
                if (errorResponse.message || errorResponse.msg) {
                    errorMessage = errorResponse.message || errorResponse.msg;
                }
            } catch (e) {
                // If response is not JSON, check for common HTTP errors
                if (xhr.status === 404) {
                    errorMessage = 'Wishlist endpoint not found!';
                } else if (xhr.status === 500) {
                    errorMessage = 'Server error occurred!';
                } else if (xhr.status === 419) {
                    errorMessage = 'Session expired. Please refresh the page!';
                }
            }
            
            Swal.fire({
                title: "Error",
                text: errorMessage,
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
    
    $.ajax({
        url: removeWishUrl,
        type: 'GET',
        global: false,
        success: function(response) {
            
            // Handle both JSON object and string responses
            let status, message, count;
            
            if (typeof response === 'object') {
                status = response.status;
                message = response.msg || response.message;
                count = response.count;
            } else {
                status = response; // For backward compatibility with string responses
            }
            
            if (status === 'deleted' || status === 'success') {
                // Update wishlist count if provided
                if (count !== undefined) {
                    $('#wishcount').text(count);
                } else {
                    // Fallback: decrement current count
                    var wc = Number($('#wishcount').text()) - 1;
                    $('#wishcount').text(wc);
                }
                
                Swal.fire({
                    title: "Removed",
                    text: message || 'Removed from your wishlist!',
                    icon: 'success'
                });
                
                // Update UI to show add button
                $('#removefromwish' + id).parent().html(
                    '<a id="addtowish' + id + '" onclick="addToWishlist(' + id + ', \'' +
                    productType + '\', ' + productId +
                    '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.AddToWishlist') }}"><i class="fa fa-heart"></i></a>'
                );
            } else if (status === 'not_found' || status === 'error') {
                Swal.fire({
                    title: "Oops!",
                    text: message || 'Product not found in your wishlist!',
                    icon: 'warning'
                });
            } else if (status === 'unauthenticated') {
                Swal.fire({
                    title: "Login Required",
                    text: message || 'Please login to use this feature!',
                    icon: 'info'
                });
            } else {
                // Handle unexpected responses
                Swal.fire({
                    title: "Error",
                    text: message || 'Something went wrong!',
                    icon: 'error'
                });
            }
        },
        error: function(xhr, status, error) {
            console.error("[REMOVE FROM WISHLIST] AJAX Error:", { 
                response: xhr.responseText, 
                status: xhr.status, 
                error 
            });
            
            let errorMessage = 'Failed to connect to the server!';
            
            // Try to parse error response
            try {
                const errorResponse = JSON.parse(xhr.responseText);
                if (errorResponse.message || errorResponse.msg) {
                    errorMessage = errorResponse.message || errorResponse.msg;
                }
            } catch (e) {
                // If response is not JSON, check for common HTTP errors
                if (xhr.status === 404) {
                    errorMessage = 'Remove wishlist endpoint not found!';
                } else if (xhr.status === 500) {
                    errorMessage = 'Server error occurred!';
                } else if (xhr.status === 419) {
                    errorMessage = 'Session expired. Please refresh the page!';
                }
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
      function addToWishlistCategory(id, productType, productId) {
    let addToWishUrl = productType === 'variant' ? '{{ url('AddToWishList') }}/' + productId : '{{ url('add/simple_pro') }}/' + productId;
    $.ajax({
        url: addToWishUrl,
        type: 'GET',
        global: false,
        success: function(response) {
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
                        '<a onclick="removeFromWishlistCategory(' + id + ', \'' + productType + '\', ' + productId + '); return false;" class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromWishlist') }}"><i class="icon fa fa-heart"></i></a>'
                    ).addClass('active');
                });
            } else if (response === 'exists' || (response.status && response.status === 'exists')) {
                Swal.fire({
                    title: "Oops!",
                    text: 'Product is already in your wishlist!',
                    icon: 'warning'
                });
            } else if (response === 'unauthenticated' || (response.status && response.status === 'unauthenticated')) {
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
            console.error("[ADD TO WISHLIST CATEGORY] AJAX Error:", { response: xhr.responseText, status, error });
            Swal.fire({
                title: "Error",
                text: 'Failed to connect to the server!',
                icon: 'error'
            });
        }
    });
}

function removeFromWishlistCategory(id, productType, productId) {
    let removeWishUrl = productType === 'variant' ? '{{ url('/removeWishList') }}/' + productId : '{{ url('/removesimplesWishList') }}/' + productId;
    $.ajax({
        url: removeWishUrl,
        type: 'GET',
        global: false,
        success: function(response) {
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
                        '<a onclick="addToWishlistCategory(' + id + ', \'' + productType + '\', ' + productId + '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.AddToWishlist') }}"><i class="icon fa fa-heart"></i></a>'
                    ).removeClass('active');
                });
            } else if (response === 'not_found' || (response.status && response.status === 'not_found')) {
                Swal.fire({
                    title: "Oops!",
                    text: 'Product not found in your wishlist!',
                    icon: 'warning'
                });
            } else if (response === 'unauthenticated' || (response.status && response.status === 'unauthenticated')) {
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
            console.error("[REMOVE FROM WISHLIST CATEGORY] AJAX Error:", { response: xhr.responseText, status, error });
            Swal.fire({
                title: "Error",
                text: 'Failed to connect to the server!',
                icon: 'error'
            });
        }
    });
}

function addToCompareCategory(id) {
    var addToCompareUrl = '{{ route('compare.product', ':id') }}'.replace(':id', id);
    $.ajax({
        url: addToCompareUrl,
        type: 'GET',
        global: false,
        success: function(response) {
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
                        '<a onclick="removeFromCompareCategory(' + id + '); return false;" class="cursor-pointer removeFrmWish icon kal addtocartcus btn text-dark" title="{{ __('staticwords.RemoveFromCompare') }}"><i class="fa fa-signal" aria-hidden="true"></i></a>'
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
            console.error('[ADD TO COMPARE CATEGORY] AJAX Error:', { response: xhr.responseText, status, error });
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

function removeFromCompareCategory(id) {
    var removeFromCompareUrl = '{{ route('remove.compare.product', ':id') }}'.replace(':id', id);
    $.ajax({
        url: removeFromCompareUrl,
        type: 'GET',
        global: false,
        success: function(response) {
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
                        '<a onclick="addToCompareCategory(' + id + '); return false;" class="cursor-pointer icon kal addtocartcus btn" title="{{ __('staticwords.Compare') }}"><i class="fa fa-signal" aria-hidden="true"></i></a>'
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
            console.error('[REMOVE FROM COMPARE CATEGORY] AJAX Error:', { response: xhr.responseText, status, error });
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