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
            <span class="category">{{$item->Real_estate->real_estate_name}}</span>
            <h6>{{$item->price}}</h6>
            
            <ul>
              <div class="row mt-2">
                <div class="col "><li><span>{{$item->address}}</span></li></div>
                <div class="col"><li>رقم العرض: <span>{{$item->number_of_offer}}</span></li></div>
              </div>
              
              
              <hr>
              <li>نوع الدرج: <span>{{$item->kindOfStairs}}</span></li>
              <li>الغرف: <span>{{$item->numberOfRooms}}</span></li>
              <li>الحمامات: <span>{{$item->bathrooms}}</span></li>
              <li>الباركينج: <span>{{$item->barking}}</span></li>
              <hr>
              <li>المساحه: <span>{{$item->space}}</span></li>
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