<!DOCTYPE html>
<html lang="en">

@extends('layout.headLinks')
@section('title')
    دور معمار للعقارات- عرض التفاصيل
@endsection
<head>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
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

  <!-- ***** Header Area Start ***** -->
  @extends('layout.header')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>{{$data->number_of_offer}}</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">

            <div class="autoplay1">
              @foreach($data->images_2 as $image)
              <div>
                  <img src="{{ asset($image) }}" alt="Image">
              </div>
              @endforeach
            </div>

            <div class="m-5 d-flex justify-content-between">
                <a href="https://web.whatsapp.com/send?phone=201204266876&text=http://localhost:8000/showDetails/{{$data->id}}" target="_blank" class="btn btn-success">واتساب</a>
                <a href="#" class="btn btn-primary">راسلنا</a>
                <a href="#" class="btn btn-danger">اتصل بنا</a>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="text-center bg-dark">
                <h3 style="color:#f35525;">تفاصيل العقار</h3>
            </div>

            <div style="direction: rtl;
               box-shadow: 2px 2px 5px #888888;
               padding: 10px;">
              <ul>
                <li class="m-3"><i class="text-warning fa-solid fa-key"></i>رقم العقار: <span>{{$data->number_of_offer}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-stairs"></i>الادوار : <span>{{$data->floors}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-bed"></i>عدد الغرف : <span>{{$data->numberOfRooms}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-house"></i>عدد الصالات : <span>{{$data->numberOfLivingrooms}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-bath"></i>الحمامات : <span>{{$data->bathrooms}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-door-closed"></i>عدد المداخل : <span>{{$data->numberOfEntrances}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-stairs"></i>نوع الدرج : <span>{{$data->kindOfStairs}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-elevator"></i>المصاعد : <span>{{$data->elevators}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-road"></i>الحوش : <span>{{$data->theYard}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-water-ladder"></i>المسابح : <span>{{$data->Swimming_pools}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-building"></i>الواجهه : <span>{{$data->interFace}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-road"></i>عرض الشارع : <span>{{$data->widthOfStreet}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-bed"></i>غرفه الحارس : <span>{{$data->security_room}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-bed"></i>غرفه الخادمه : <span>{{$data->Maid_s_room}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-bed"></i>غرفه السائق : <span>{{$data->Driver_s_room}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-building"></i>عمر العقار : <span>{{$data->ageOfRealEstate}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-square-parking"></i>الباركنج : <span>{{$data->barking}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-temperature-empty"></i>الحاله : <span>{{$data->status->status}}</span></li>
                <li class="m-3"><i class="text-warning fa-solid fa-text-width"></i>المساحه : <span>{{$data->space}}</span></li>
              </ul>
            </div>

            <div style="direction: rtl;
               box-shadow: 2px 2px 5px #888888;
               padding: 10px;">
              <ul>
                <li class="m-3">رقم العقار: <span>{{$data->number_of_offer}}</span></li>
                <li class="m-3"> العنوان: <span>{{$data->address}}</span></li>
                <li class="m-3"> نوع العقار: <span>{{$data->Real_estate->real_estate_name}}</span></li>
                <li class="m-3"> السعر: <span></span>{{$data->price}}</li>
                <li class="m-3"> المساحه: <span></span>{{$data->space}}</li>
            </ul>
            </div>
        </div>
    </div>
</div>


@include('fixedButton')
@extends('layout.scriptLinks')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
<script>
  $(document).ready(function(){
    $('.autoplay1').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
    });    });
  </script>
    @extends('layout.footer')

</html>
