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

                <div class="row ">
                    <div class="col-xl-12 text-left">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <p class="about-title"> {!! $servicesDetails->desc !!} </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-xl-12 text-left">
                        <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-pic">
                                <img class="mb-5" width="25%" src="{{ asset($servicesDetails->image) }}"
                                    alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-xl-12 text-left">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <div class="about-txt mb-30">
                                    <div class="row text-left">
                                        <div class="col-md-12 mb-5">
                                            <ul>
                                                <li><h4>{{ $servicesDetails->title1 }}</h4><br>
                                                    <p>{!! $servicesDetails->desc1 !!}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <ul>
                                                <li><h4>{{ $servicesDetails->title2 }}</h4><br>
                                                    <p>{!! $servicesDetails->desc2 !!}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <ul>
                                                <li><h4>{{ $servicesDetails->title3 }}</h4><br>
                                                    <p>{!! $servicesDetails->desc3 !!}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <ul>
                                                <li><h4>{{ $servicesDetails->title4 }}</h4><br>
                                                    <p>{!! $servicesDetails->desc4 !!}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <ul>
                                                <li><h4>{{ $servicesDetails->title5 }}</h4><br>
                                                    <p>{!! $servicesDetails->desc5 !!} </p>
                                                </li>
                                            </ul>
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
    <!-- End About -->
    </main>
@endsection
