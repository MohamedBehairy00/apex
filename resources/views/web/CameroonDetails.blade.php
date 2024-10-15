@extends('web.partials.main')
@section('content')
    <!-- Start About -->
     
    <div class="container" style="z-index: 9999 ;">
            <div class="row" style="margin:60px 0px">
                <div class="col-md-3">
                    <a class="tm-btn-2" href="javascript:void(0);" onclick="goBack()">
                        <span style="color: #fff">
                            <i class="fas fa-chevron-left"></i>
                            Back
                        </span>
                    </a>
                </div>
            </div>


    <div style="display:flex; justify-content: center; margin:100px 0px">
        <img src="{{asset('web/assets/img/images/maps-16.png')}}"   class="img-screen-cameroon">
    </div>

    <div class="row" style="text-align: center;  margin:100px 0px">
        <div  >
            <h3 class="col site-title text-left" style="font-weight:bold;">Cameroon</h3>
            <div class="about-right-content">
            <p class="about-title" style="font-size:20px"> Cameroon Robusta epitomizes boldness and intensity in flavour.</p>
               <p> Sourced from the fertile regions of Cameroon, this coffee variety delivers a distinct taste revered by coffee enthusiasts globally.</p>
            </div> 
        
        </div>
    </div>




        <!-- ICON -->



        <div class="row">

            <div class="col-12" style="display:flex; justify-content: center; margin:30px 0px">
                <img src="{{asset('web/assets/img/images/icon.png')}}" style="width:250px" >
            </div>
        </div>




    <div class="row" style="text-align: center;  margin:100px 0px">
        <div  >
            <h3 class="col site-title text-left" style="font-weight:bold;"> Flavour Profile</h3>
            <div class="about-right-content">
            <p class="about-title" style="font-size:20px"> Cameroonian Robusta beans are balanced, chocolatey, earthy, and have a distinct nutty taste.</p>

        </div>
    </div>
    
    
    <div class="row" style=" margin:120px 0px" id="whatsapp">
            <div class="col contact-addr-icon" style=" text-align:end">
            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #cbaa62;"></i>
            </div>
    </div>
      
@endsection
    