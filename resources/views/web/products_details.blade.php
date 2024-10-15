@extends('web.partials.main')
@section('content')
    <!-- Start About
                                                                                                                                              ============================================= -->
    <div id="about" class="about-area de-padding v-card-section" style="position:relative">
        <img class="right-top-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-top-teama" src="{{ asset('web/assets/img/shapes-07.png') }}" alt="teama">
        <img class="right-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <div class="container">
            <div class="about-wpr">
                <div class="row">
                    <div class="col-md-3">
                        <a class="tm-btn-2" href="javascript:void(0);" onclick="goBack()">
                            <span style="color: #fff">
                                <i class="fas fa-chevron-left"></i>
                                Back
                            </span>
                        </a>
                    </div>
                </div>

                @foreach ($product_details as $product)
                    <!-- Assuming $product->image is an array of image URLs -->
                    <div class="row mb-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic mb-5">
                                    <h2>{{ $product->title }}</h2>
                                    @if ($product->image)
                                         <img width="30%" src="{{ asset($product->image) }}" alt="thumb">
                                    @endif
                                </div>
                                <p class="mb-5">{!! $product->desc !!}</p>
                            </div>
                        </div>
                    </div>
                    @if ($product->id === 1)
                        <div class="row mt-5 mb-5">
                            <div class="col-xl-12 text-left">
                                <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                    <div class="about-pic">
                                        <h4><a class="margin" href="{{ route('products_details_show', ['id' => 1]) }}">
                                                Single-origin Organic Arabica Coffee Beans
                                            </a></h4>
                                        <h4><a class="margin" href="{{ route('products_details_show', ['id' => 2]) }}">
                                                Single-origin Natural Arabica Coffee Beans
                                            </a></h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End About -->
    </main>
@endsection
