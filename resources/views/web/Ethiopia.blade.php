@extends('web.partials.main')
@section('content')
    <!-- Start About -->
     
    <div class="container" style="z-index: 9999 ;">
            <div class="row" style="margin:90px 0px">
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
        <img src="{{asset('web/assets/img/images/maps-13.png')}}"    class="img-screen">
    </div>

    <div class="row" style="text-align: center;  margin:100px 0px">
        <div  >
            <h3 class="col site-title text-left" style="font-weight:bold;">Ethiopia</h3>
            <div class="about-right-content">
            <p class="about-title" style="font-size:20px">Ethiopia, the birthplace of coffee, continues to impress the specialty coffee sector with its rich flavours. The exceptional quality of
                    Ethiopian coffee is attributed to its genetic diversity and varied processing methods, rooted in longstanding producing traditions.</p>
            </div> 
        
        </div>
    </div>


    <div class="row" style=" margin:100px 0px">
            <div class="col" style="text-align: center;">
                <h3 class="col site-title text-left"> Single-origin Organic Arabica Coffee Beans</h3>
            </div>
    </div>


    <div class="row" style=" margin:100px 0px">
            <div class="col" style="text-align: center;">
                <h3 class="col site-title text-left"> Single-origin Natural Arabica Coffee Beans</h3>
            </div>
    </div>

    
    <div class="row" style=" margin:120px 0px" id="whatsapp">
            <div class="col contact-addr-icon" style="text-align:end">
            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #cbaa62;"></i>
            </div>
    </div>
      
@endsection
    