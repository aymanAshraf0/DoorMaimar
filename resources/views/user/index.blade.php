<!DOCTYPE html>
<html lang="en">
@extends('layout.headLinks')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
@extends('layout.header')

<style>
  .fa-solid{
  color: #AC9366;
  margin-left: 10px;
}

</style>
  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      @foreach ($sliderimage as $item)
      <div class="item" style="background-image:url('{{ asset("uploads/images/slider/$item->image") }}');">
        <div class="header-text">
          <h2>!اسرع<br>احصل على أفضل اختيار لك</h2>
        </div>
      </div>

      @endforeach
    </div>
  </div>



  <div class="properties section" >
    <div class="container">
      <div class="row underSlider" data-aos="zoom-in" data-aos-duration="2000">
        <div class="col-lg-4 offset-lg-4 ">
          <div class="section-heading text-center">
            <h2>نوفر أفضل العقارات التي ستنال إعجابك</h2>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-right" data-aos-duration="2000">
        @foreach ($realEstate2 as $item)
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="{{url('/showDetails',$item->id)}}"><img src="{{ asset('uploads/images/realEstateImage/'. $item->images) }}" alt=""></a>
      
              <ul class="property-details">
                <li class="fristt">
                <div class="row">
                  <div class="col">
                  <div class="property-details-row">
                    <span><i class="fa-solid fa-house"></i></span>
                    <span class="property-data">{{$item->Real_estate->real_estate_name}}</span>
                  </div>
                  </div>

                  <div class="col">
                  <div class="property-details-row">
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <span class="property-data">{{$item->address}}</span>
                  </div>
                  </div>
                  
                </div>
              </li>
              <li class="secondd">
                <div class="row">
                  
                  <div class="col">
                    <div class="property-details-row">
                    <span><i class="fa-solid fa-money-bill"></i></span>
                    <span class="property-data">{{$item->price}}</span>
                  </div>
                </div>
                
                <div class="col">
                  <div class="property-details-row">
                    <span><i class="fa-solid fa-key"></i></span>
                    <span class="property-data">{{$item->number_of_offer}}</span>
                  </div>
                </div>
                
              </div>
              <div class="row">
                
                <div class="col">
                  <div class="property-details-row">
                    <span><i class="fa-solid fa-stairs"></i></span>
                    <span class="property-data">{{$item->kindOfStairs}}</span>
                  </div>
                </div>
                
                <div class="col">
                  <div class="property-details-row">
                    <span><i class="fa-solid fa-parking"></i></span>
                    <span class="property-data">{{$item->barking}}</span>
                  </div>
                </div>
                
              </div>

            </li>
                
                  <hr>
                  <div class="row">
                    
                    <div class="col">
                      <div class="property-details-row">
                        <span><i class="fa-solid fa-bed"></i></span>
                        <span class="property-data">{{$item->numberOfRooms}}</span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="property-details-row">
                        <span><i class="fa-solid fa-bath"></i></span>
                        <span class="property-data">{{$item->bathrooms}}</span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="property-details-row">
                        <span><i class="fa-solid fa-text-width"></i></span>
                        <span class="property-data">{{$item->space}}</span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="property-details-row">
                        <span><i class=" fa-solid fa-elevator"></i></span>
                        <span class="property-data">{{$item->elevators}}</span>
                      </div>
                    </div>
                    <div class="main-button mt-3"> 
                      <a href="{{url('/showDetails',$item->id)}}"><i class="fa-solid text-light fs-6 fa-arrow-left"></i>   عرض التفاصيل</a>
                    </div>

                </div>
              </ul>
            </div>
          </div>
        @endforeach
      
        <div class="row">
          <div class="col-lg-12">
            <ul class="pagination">
              {{ $realEstate2P->links() }}
            </ul>
          </div>
        </div>
      </div>
      
        
      </div>
    </div>
  </div>

@include('fixedButton')
@extends('layout.footer')
@extends('layout.scriptLinks')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  </body>
</html>