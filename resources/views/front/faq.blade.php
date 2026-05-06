@extends('front.layout.master')
@section('title', "FAQ's | Emart ")
@section('body')
    <div class="checkout-box faq-page">
        <h4>{{ __('staticwords.AllFAQs') }}</h4>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="checkout-steps" id="accordion">
                    <!-- checkout-step-01  -->

                    <!-- checkout-step-01  -->
                    @foreach ($faqs as $key => $faq)
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4 class="unicase-checkout-title">
                                    <a class="faq-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#faq{{ $faq->id }}">
                                        <span>{{ $key + 1 }}.</span> {{ $faq->que }}
                                    </a>
                                </h4>
                            </div>

                            <div id="faq{{ $faq->id }}" class="card-collapse collapse {{ $key == 0 ? 'show' : '' }}">
                                <div class="card-body">
                                    {{ $faq->ans }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).on("click", ".faq-toggle", function(e) {
            e.preventDefault();
            $(".card-collapse").collapse("hide"); // Hide all
            $($(this).attr("href")).collapse("toggle"); // Toggle the clicked one
        });
    </script>
@endsection
