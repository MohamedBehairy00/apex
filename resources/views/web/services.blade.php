@extends('web.partials.main')
@section('content')
    <!-- Start About
                                                                                                                              ============================================= -->
    <div id="about" class="about-area de-padding v-card-section" style="position:relative">
        <img class="right-top-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-top-teama" src="{{ asset('web/assets/img/shapes-07.png') }}" alt="teama" style="z-index: 999">
        <img class="right-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">

        <div class="container align-items-left" style="z-index: 9999">
            <div class="about-wpr mt-5">
                <div class="row mb-5">
                    <div class="col-xl-12 text-left">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <a href="{{ route('servicesDetails', ['id' => 1]) }}">
                                    <h2 class="about-title"> 
                                <img width="8%" src="{{ asset('web/assets/img/ser.png') }}" alt="">
                                    <a class="margin" href="{{ route('servicesDetails', ['id' => 1]) }}">
                                            Procurement Services 
                                        </a>
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

                                <h2 class="about-title">
                                      <img width="8%" src="{{ asset('web/assets/img/talent.png') }}" alt="">
                                     <a class="margin" href="{{ route('servicesDetails', ['id' => 2]) }}">Talent
                                        Matching Platform (Coming Soon)
                                    </a></h2>

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
