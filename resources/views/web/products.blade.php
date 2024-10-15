@extends('web.partials.main')
@section('content')
    <!-- Start Service
                                                                                                                                                                                                                                                                                                  ============================================= -->
    <div id="service" class="service-area de-padding v-card-section wow fadeInUp" style="position:relative"
        data-wow-duration="3s" data-wow-delay=".2s">
        <img class="right-top-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="">
        <img class="left-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="">




        <div class="back" >
                <div class="col-md-3">
                    <a class="tm-btn-2" href="javascript:void(0);" onclick="goBack()">
                        <span style="color: #fff">
                            <i class="fas fa-chevron-left"></i>
                            Back
                        </span>
                    </a>
                </div>
            </div>



        @if ($products->isNotEmpty())
        @foreach ($products as $product)
        @if($product->id ===1)
        <div style="display:flex; justify-content: center; margin:100px 0px">
                 <img src="{{asset('web/assets/img/images/coffe.png')}}"   class="img-screen-coffe" >
            </div>
        @endif
        @endforeach
        @endif



        <div class="container" style="z-index: 9999">

            @if ($products->isNotEmpty())

                @foreach ($products as $product)
                    <div class="row mt-5">
                        <div class="col-xl-12">
                            <div class="site-title " style="text-align: center;">
                                <h3>
                                    {{ $product->title }}
                                </h3>
                                <img class="mb-5 mt-3" width="50%" src="{{ asset($product->image) }}" alt="">
                                <h5>{!! $product->desc !!}</h5>
                            </div>
                        </div>
                        @if ($product->id === 1)
                            <div class="col-xl-6 mt-5">
                                <div class="site-title mb-60 text-left">
                                    <img class="mt-5" src="{{ asset($product->sub_image) }}" alt="">
                                    <br>
                                    <h5 class="mb-0 mt-5">{{ $product->sub_title }}
                                    </h5>
                                    <br>
                                    <p>{!! $product->sub_desc !!}</p>
                                </div>
                                



                                <div class="All" style="display:flex; justify-content:space-between">

                                        <div class="right">

                                            <div class="site-title mb-60 text-left">
                                                <h5 class="mb-0 mt-5">
                                                    <a class="margin" href="{{url('Ethiopia')}}">
                                             Ethiopia
                                                 </a>
                                             </h5>
                                            </div>
                                        <div class="site-title mb-60 text-left">
                                            <h5 class="mb-0 mt-5">
                                                <a class="margin" href="{{url('Cameroon')}}">
                                                  Cameroon
                                             </a>
                                          </h5>
                                        </div>
                                        </div>

                                        <div class="left" style="padding-right:20%">
                                            <img class= "right-img" src="{{asset('web/assets/img/images/icon-2.png')}}" >
                                        </div>

                                     </div>

                                </div>








                            <div class="col-xl-6  mt-5">

                            <div class="site-title mb-60 text-left">
                                    <img src="{{ asset($product->sub_image2) }}" alt="">
                                    <br>
                                    <h5 class="mb-0 mt-5">{{ $product->sub_title2 }}
                                    </h5>
                                    <br>
                                    <p>{!! $product->sub_desc2 !!}</p>
                                </div>



                            <div class="ALL" style="display:flex; justify-content:space-between">
                                <div class="LEFT">
                                
                                <div class="site-title mb-60 text-left">
                                    <h5 class="mb-0 mt-5">
                                        <a class="margin"  href="{{url('Uganda')}}">
                                            Uganda
                                        </a>
                                    </h5>
                                </div>
                                <div class="site-title mb-60 text-left">
                                    <h5 class="mb-0 mt-5">
                                        <a class="margin"  href="{{url('CameroonDetails')}}">
                                            Cameroon
                                        </a>
                                    </h5>
                                </div>
                                </div>

                                <div class="RIGHT" style="padding-right:20%">
                                <img class= "right-img" src="{{asset('web/assets/img/images/icon-1.png')}}" >
                                </div>
                            </div>










                            </div>




                            
                        @endif
                    </div>
                @endforeach
            @else
                <p>No products found.</p>
            @endif

            <div class="row" style=" margin:100px 0px 20px 0px" id="whatsapp">
            <div class="col contact-addr-icon" style=" text-align:end">
            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #cbaa62;"></i>
            </div>
    </div>
        </div>

    </div>

    </div>
    
    <!-- End Service -->

    </main>
@endsection
