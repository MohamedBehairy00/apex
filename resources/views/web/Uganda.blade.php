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
        <img src="{{asset('web/assets/img/images/maps-15.png')}}"   class="img-screen">
    </div>

    <div class="row" style="text-align: center;  margin:100px 0px">
        <div  >
            <h3 class="col site-title text-left" style="font-weight:bold;">Uganda</h3>
            <div class="about-right-content">
            <p class="about-title" style="font-size:20px"> Ugandan Robusta is esteemed for its bold flavour and robust characteristics. Cultivated in the fertile lands of Uganda, this coffee 
                variety offers a distinct profile cherished by coffee enthusiasts worldwide.</p>
            <p class="about-title" style="font-size:20px" >Known for its high caffeine content and strong flavour, Ugandan Robusta provides a rich and intense coffee experience. It is often 
                favoured for its versatility, making it suitable for various brewing methods, from espresso to French press.</p>
            <p class="about-title" style="font-size:20px"> Our Ugandan Robusta beans are carefully selected and graded between 13 to 18, ensuring consistency and quality in every cup.</p>
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
            <p class="about-title" style="font-size:20px">  Ugandan Robusta boasts a bold flavour profile characterized by rich,deep notes and a robust body. Expect a distinctive taste that 
            is earthy and full-bodied, with hints of cocoa and nutty undertones.</p>
            <p class="about-title" style="font-size:20px" >  This coffee variety often exhibits a pronounced bitterness and a lingering finish, making it an excellent choice for those who enjoy 
            a strong and intense cup of coffee.</p>
        </div>
    </div>
    
    
    <div class="row" style=" margin:120px 0px" id="whatsapp">
            <div class="col contact-addr-icon" style=" text-align:end">
            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #cbaa62;"></i>
            </div>
    </div>
      
@endsection
    