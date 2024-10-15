@extends('web.partials.main')
@section('content')
    <!-- Start About
                        ============================================= -->
    <div id="about" class="about-area de-pt v-card-section" style="position:relative">
        <img class="right-top-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="">
        <div class="container">
            <div class="about-wpr">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <h2 class="about-title">
                                    Our Team
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start About
                        ============================================= -->
    <div id="about" class="about-area de-padding v-card-section">
        <div class="container">
            <div class="about-wpr">
                <div class="row">
                    <div class="col-xl-4 text-center">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <h2>
                                    {{ $person_one->name }}
                                </h2>
                                <h6 class="about-title-3">
                                    {{ $person_one->title }}
                                </h6>
                                <div class="about-txt mb-30">
                                    <p>
                                        {!! $person_one->description !!}
                                    </p>
                                </div>
                            </div>
                            <h2>
                                {{ $person_three->name }}
                            </h2>
                            <h6 class="about-title-3">
                                {{ $person_three->title }}
                            </h6>
                            <div class="about-txt mb-30">
                                <p>
                                    {!! $person_three->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 text-center d-flex align-items-center ">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <img src="{{ asset('web/assets/img/hands.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 text-center">
                        <div class="about-right wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="about-right-content">
                                <h2>
                                    {{ $person_two->name }}

                                </h2>
                                <h6 class="about-title-3">
                                    {{ $person_two->title }}
                                </h6>
                                <div class="about-txt mb-30">
                                    <p>
                                        {!! $person_two->description !!}
                                    </p>
                                </div>
                            </div>
                            <h2>
                                {{ $person_four->name }}
                            </h2>
                            <h6 class="about-title-3">
                                {{ $person_four->title }}
                            </h6>
                            <div class="about-txt mb-30">
                                <p>
                                    {!! $person_four->description !!}
                                </p>
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
