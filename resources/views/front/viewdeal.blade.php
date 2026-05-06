@extends("front.layout.master")
@section('title', __("All deals"))
@section('meta_tags')
<link rel="canonical" href="{{ url()->full() }}" />
<meta name="robots" content="all">
<meta property="og:title" content="{{ __("All deals") }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ url()->full() }}" />
@endsection
@section("body")
<div class="breadcrumb">
    <div class="container-fluid">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                <li><a href="{{ route('flashdeals.list') }}">{{ __("Flash deals") }}</a></li>
                <li><a href="{{ url()->full() }}">{{ $deal->title ?? 'N/A' }}</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="test" style="background-image: url('{{ isset($deal->background_image) ? url('images/flashdeals/'.$deal->background_image) : asset('images/default.png') }}');">
        <div class="overlay-bg"></div>
        <div class="bg_image_deal">
            <div class="countdown-deal">
                <p class="text-center text-white">{{__("Sale ends in ")}}</p>
                <div id="countdown">
                    <ul>
                        <li class="text-shadow"><span class="text-white" id="days"></span><span class="text-white text-20">days</span></li>
                        <li class="text-shadow"><span class="text-white" id="hours"></span><span class="text-white text-20"> hours</span></li>
                        <li class="text-shadow"><span class="text-white" id="minutes"></span><span class="text-white text-20"> minutes</span></li>
                        <li class="text-shadow"><span class="text-white" id="seconds"></span><span class="text-white text-20">seconds</span></li>
                    </ul>
                </div>
            </div>
            <div>
                {!! $deal->detail ?? '' !!}
            </div>
            <div class="row p-3">
                @forelse($deal->saleitems ?? [] as $item)
                <div class="mt-2 col-xl-3 col-lg-4 col-md-6">
                    <div class="h-100 card">
                        @if(optional($item)->variant)
                            <center>
                                @if(optional($item->variant)->variantimages)
                                <a href="{{ App\Helpers\ProductUrl::getUrl($item->variant->id) }}">
                                    <img width="100px" src="{{ url('variantimages/'.$item->variant->variantimages->main_image) }}" class="mt-2" alt="...">
                                </a>
                                @endif
                            </center>
                            <div class="card-body">
                                <div class="card-title">
                                    <a class="text-dark" href="{{ App\Helpers\ProductUrl::getUrl($item->variant->id) }}">
                                        {{ optional($item->variant->products)->name ?? 'N/A' }}
                                    </a>
                                </div>

                                <p>
                                    {{ substr(strip_tags(optional($item->variant->products)->des ?? ''), 0, 100) }}{{ strlen(strip_tags(optional($item->variant->products)->des ?? '')) > 100 ? '...' : "" }}
                                </p>

                                <h5>Discount : {{ $item->discount ?? 0 }}% ({{ $item->discount_type ?? '' }})</h5>
                                <hr>
                                @php
                                    $mainprice = 0;
                                    $deal_price = 0;

                                    if(isset($item->variant->products) && isset($item->variant)){
                                        $get_product_data = new App\Http\Controllers\Api\MainController;
                                        $mainprice = $get_product_data->getprice($item->variant->products, $item->variant);
                                        $price = $mainprice->getData();

                                        $sellprice = $price->offerprice != 0 ? $price->offerprice : $price->mainprice;
                                        $discount = $item->discount ?? 0;
                                        $discount_type = $item->discount_type ?? '';

                                        if($discount_type == 'upto'){
                                            $random_no = rand(0,$discount);
                                            $discounted_amount = $sellprice * $random_no / 100;
                                        }else{
                                            $discounted_amount = $sellprice * $discount / 100;
                                        }

                                        $deal_price = $sellprice - $discounted_amount;

                                        echo '<i class="'.(session()->get('currency')['value'] ?? '').'"></i>';
                                        echo sprintf("%.2f", ($price->offerprice != '0' ? $price->offerprice : $price->mainprice) * ($conversion_rate ?? 1));
                                    }
                                @endphp
                                <div class="card-body">
                                    @if(isset($item->variant->products))
                                    <form action="{{ route('add.cart', ['id' => $item->variant->products->id, 'variantid' => $item->variant->id, 'varprice' => $price->mainprice ?? 0, 'varofferprice' => $deal_price ?? 0, 'qty' => $item->variant->min_order_qty ?? 1]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-md btn-primary">
                                            <i class="fa fa-cart-plus"></i> {{ __("Add to cart") }}
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        @else
                            <center>
                                <a href="{{ optional($item->simple_product)->id ? route('show.product', ['id' => $item->simple_product->id, 'slug' => $item->simple_product->slug]) : '#' }}">
                                    <img width="100px"
                                        src="{{ optional($item->simple_product)->thumbnail ? url('images/simple_products/'.$item->simple_product->thumbnail) : asset('images/default.png') }}"
                                        class="mt-2"
                                        alt="{{ optional($item->simple_product)->thumbnail ?? 'No Image' }}">
                                </a>
                            </center>
                            <div class="card-body">
                                <div class="card-title">
                                    <a class="text-dark" href="{{ optional($item->simple_product)->id ? route('show.product',['id' => $item->simple_product->id,'slug'=>$item->simple_product->slug]) : '#' }}">
                                        {{ optional($item->simple_product)->product_name ?? 'N/A' }}
                                    </a>
                                </div>

                                <p>
                                    {{ substr(strip_tags(optional($item->simple_product)->product_detail ?? ''), 0, 100) }}{{ strlen(strip_tags(optional($item->simple_product)->product_detail ?? '')) > 100 ? '...' : "" }}
                                </p>

                                <h5>Discount : {{ $item->discount ?? 0 }}% ({{ $item->discount_type ?? '' }})</h5>
                                <hr>
                                @php
                                    $deal_price = 0;
                                    if(optional($item->simple_product)->id){
                                        $sellprice = ($item->simple_product->offer_price ?? 0) != 0 ? $item->simple_product->offer_price : ($item->simple_product->price ?? 0);
                                        $discount = $item->discount ?? 0;
                                        $discount_type = $item->discount_type ?? '';

                                        if($discount_type == 'upto'){
                                            $random_no = rand(0,$discount);
                                            $discounted_amount = $sellprice * $random_no / 100;
                                        }else{
                                            $discounted_amount = $sellprice * $discount / 100;
                                        }

                                        $deal_price = $sellprice - $discounted_amount;

                                        echo '<i class="'.(session()->get('currency')['value'] ?? '').'"></i>';
                                        echo sprintf("%.2f", ($item->simple_product->offer_price != 0 ? $item->simple_product->offer_price : $item->simple_product->price) * ($conversion_rate ?? 1));
                                    }
                                @endphp
                                <div class="card-body">
                                    @if(optional($item->simple_product)->id)
                                    <form action="{{ route('add.cart.simple',['pro_id' => $item->simple_product->id, 'price' => $item->simple_product->price ?? 0, 'offerprice' => $deal_price]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="qty" value="{{ $item->simple_product->min_order_qty ?? 1 }}">
                                        <button class="btn btn-md btn-primary">
                                            <i class="fa fa-cart-plus"></i> {{ __("Add to cart") }}
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-md-12">
                    <h4 class="text-center">
                        {{__("No products found !")}}
                    </h4>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let birthday = "{{ isset($deal->end_date) ? date('M d, Y h:i:s', strtotime($deal->end_date)) : '' }}",
            countDown = new Date(birthday).getTime(),
            x = setInterval(function () {
                let now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)) || 0,
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)) || 0,
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)) || 0,
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second) || 0;

                if (distance < 0) {
                    clearInterval(x);
                }
            }, 0)
    }());
</script>
@endsection
