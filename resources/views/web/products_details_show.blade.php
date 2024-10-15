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

            <div class="about-wpr">
                @if ($sidamo_section && $sidamo_section->sub_section_id === 1)
                    <div class="row mb-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic mb-5">
                                    <h2 class="mb-5">{{ $sidamo_section->title }}</h2>
                                    @if ($sidamo_section->image)
                                        <img width="50%" src="{{ asset($sidamo_section->image) }}" alt="thumb">
                                    @endif
                                </div>
                                <p>{!! $sidamo_section->desc !!} </p>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic">
                                    <h5>Unique Characteristics</h5>
                                </div>
                            </div>
                        </div>
                @endif

                @if ($Kaffa_section && $Kaffa_section->sub_section_id === 2)
                    <div class="row mb-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic mb-5">
                                    <h2 class="mb-5">{{ $Kaffa_section->title }}</h2>
                                    @if ($Kaffa_section->image)
                                        <img width="50%" src="{{ asset($Kaffa_section->image) }}" alt="thumb">
                                    @endif
                                </div>
                                <p>{!! $Kaffa_section->desc !!} </p>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic">
                                    <h5>Unique Characteristics</h5>
                                </div>
                            </div>
                        </div>
                @endif


                @foreach ($sidamo_small_section as $product)
                    <div class="col-xl-6 text-left mt-5 mb-5">

                        <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="row ">
                                <div class="col-xl-6 text-left">
                                    <div class="about-pic text-right">
                                        <img width="30%" src="{{ asset($product->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 text-left">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{!! $product->desc !!}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach


                @foreach ($Kaffa_small_section as $product)
                    <div class="col-xl-6 text-left mt-5 mb-5">

                        <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="row ">
                                <div class="col-xl-6 text-left">
                                    <div class="about-pic text-right">
                                        <img width="30%" src="{{ asset($product->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 text-left">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{!! $product->desc !!}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach


                @if ($Djimmah_section && $Djimmah_section->sub_section_id === 2)
                    <div class="row mb-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic mb-5">
                                    <h2 class="mb-5">{{ $Djimmah_section->title }}</h2>
                                    @if ($Djimmah_section->image)
                                        <img width="50%" src="{{ asset($Djimmah_section->image) }}" alt="thumb">
                                    @endif
                                </div>
                                <p>{!! $Djimmah_section->desc !!} </p>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-12 text-left">
                            <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                                <div class="about-pic">
                                    <h5>Unique Characteristics</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @foreach ($Djimmah_small_section as $product)
                    <div class="col-xl-6 text-left mt-5 mb-5">

                        <div class="about-left wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".2s">
                            <div class="row ">
                                <div class="col-xl-6 text-left">
                                    <div class="about-pic text-right">
                                        <img width="30%" src="{{ asset($product->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 text-left">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{!! $product->desc !!}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach



            </div>
        </div>
    </div>
    </div>
    <!-- End About -->
    </main>
@endsection
