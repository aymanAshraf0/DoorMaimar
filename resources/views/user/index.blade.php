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
            
            <div class="row mt-2">
              <div class="col  category">{{$item->Real_estate->real_estate_name}} <i class=" fa-solid fa-house"></i></div>
              <div class="col">{{$item->address}} <i class=" fa-solid fa-location-dot"></i></div>
            </div>
            <ul>
              <div class="row mt-2">
                <div class="col "><li><span>{{$item->price}} <i class="fa-solid fa-money-bill"></i></span></li></div>
                <div class="col"><li> <span>{{$item->number_of_offer}} <i class=" fa-solid fa-key"></i></span></li></div>
              </div>

              <div class="row">
                <div class="col">
                  <li><span>{{$item->kindOfStairs}} <i class=" fa-solid fa-stairs"></i></span></li>
                </div>
                <div class="col">
                  <li><span>{{$item->barking}} <i class=" fa-solid fa-parking"></i></span></li>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col">
                  <li><span>{{$item->numberOfRooms}} <i class=" fa-solid fa-bed"></i></span></li>
                </div>
                <div class="col">
                  <li><span>{{$item->bathrooms}} <i class=" fa-solid fa-bath"></i></span></li>
                </div>
                <div class="col">
                  <li><span>{{$item->space}} <i class=" fa-solid fa-text-width"></i></span></li>
                </div>
              </div>
            </ul>
            <div class="main-button"> 
              <a href="{{url('/showDetails',$item->id)}}">عرض التفاصيل</a>
            </div>
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

@include('fixedButton')
@extends('layout.footer')
@extends('layout.scriptLinks')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  </body>
</html>