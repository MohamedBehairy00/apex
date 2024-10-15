@extends('web.partials.main')
@section('content')
    <!-- Start About
                                                                                                                                                              ============================================= -->
    <div id="about" class="about-area de-padding v-card-section" style="position:relative">
        <img class="right-top-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-top-teama" src="{{ asset('web/assets/img/shapes-07.png') }}" alt="teama">
        <img class="right-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">

        <div class="container align-items-left" style="z-index: 9999999">
            <div class="about-wpr mt-5">

                <div class="row mb-5">
                    <div class="col-xl-12 text-left">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <h2 class="about-title"> <a class="margin" href="{{ route('products', ['id' => 1]) }}">Green
                                        Coffee Beans </a> </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-wpr mt-5">
                <div class="row mb-5">
                    <div class="col-xl-12 text-left">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <h2 class="about-title"> <a class="margin" href="{{ route('products', ['id' => 2]) }}">
                                        Sesame Oil (Nameer) </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-wpr mt-5">
                <div class="row mb-5">
                    <div class="col-xl-12 text-left">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <h2 class="about-title"> <a class="margin" href="{{ route('products', ['id' => 3]) }}">
                                        Vegan Rebelicious (Coming Soon)
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    </main>
@endsection
