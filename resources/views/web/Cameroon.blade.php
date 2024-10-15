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
        <img src="{{asset('web/assets/img/images/maps-14.png')}}"   class="img-screen-cameroon">
    </div>

    <div class="row" style="text-align: center;  margin:100px 0px">
        <div  >
            <h3 class="col site-title text-left" style="font-weight:bold;">Cameroon</h3>
            <div class="about-right-content">
            <p class="about-title" style="font-size:20px">Coffee farming in Cameroon is a significant agricultural activity,particularly in the western highlands of the country. The industry is 
                characterised by smallholder farmers who cultivate coffee on small plots of land. The beans are typically grown under shade 
                trees, which helps to maintain soil fertility and biodiversity.</p>
            <p class="about-title" style="font-size:20px" >Once harvested, thecoffee cherries are processed through either the wet or dry method, depending on the preference of the farm
                ers. Despite facing challenges such as fluctuating prices and aging trees, coffee farming remains an important source of income 
                for many rural communities in Cameroon.</p>
            <p class="about-title" style="font-size:20px">We are instrumental in supporting coffee farmers in Cameroon by offering essential resources and expertise. Our commitment to 
                sustainable farming practices ensures environmental responsibility, while facilitating access to fair markets ensures farmers 
                receive better prices for their coffee produce.</p>
            </div> 
        
        </div>
    </div>


    <div class="row" style="text-align: center;  margin:100px 0px">
        <div  >
            <h3 class="col site-title text-left" style="font-weight:bold;"> Green Arabica Coffee Beans</h3>
            <div class="about-right-content">
            <p class="about-title" style="font-size:20px"> Cameroon Arabica coffee is cultivated in various regions across Cameroon, known for their fertile soils and favourable climate con
                ditions for co ffee cultivation.</p>
            <p class="about-title" style="font-size:20px" >These regions include the western highlands, particularly around the Bafoussam area, as well as the northwest region around the 
                Bamenda area.</p>
            <p class="about-title" style="font-size:20px"> The diverse microclimates and altitudes in these regions contribute to the unique flavour profiles found in Cameroon Arabica 
                coffee.</p>
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
            <p class="about-title" style="font-size:20px"> Cameroon Arabica offers a nuanced flavour profile characterised by floral and fruity notes, accompanied by a smooth and balanced acidity.</p>
            <p class="about-title" style="font-size:20px" > Expect delightful hints of citrus, berries, and sometimes cocoa or nutty undertones, creating a complex and rewarding coffee ex
                perience.</p>
        </div>
    </div>
    
    
    <div class="row" style=" margin:120px 0px" id="whatsapp">
            <div class="col contact-addr-icon" style=" text-align:end">
            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #cbaa62;"></i>
            </div>
    </div>
      
@endsection
    