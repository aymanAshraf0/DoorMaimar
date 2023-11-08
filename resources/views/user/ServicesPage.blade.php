<!DOCTYPE html>
<html lang="en">

@extends('layout.headLinks')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@section('title')
    دور معمار للعقارات-خدماتنا
@endsection
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
        <div  class="col-lg-12">
          <h3>خدماتنا</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row text-center">

        <div class="col-sm-12 col-lg-6 mb-4"  data-aos="fade-up" data-aos-duration="2000">
            <div class="card bg-transparent text-light" style="width: 100%; border: none;">
                <img src="https://media.istockphoto.com/id/473683922/photo/civil-engineers-looking-at-blueprints.webp?b=1&s=170667a&w=0&k=20&c=RNFq-gCGy6YrMtMhhEisv0U9mruSyDLEsJ4HqCQglPc=" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title text-dark">التطوير العقاري</h2>
                    <p class="card-text fs-4">برؤية متجددة وبفكر إبداعي أسهمت دور معمار بإحداث نقلة في التطوير العقاري وجعل القطاع العقاري جاذبا لرؤوس الأموال بشكل أكبر.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mb-4"  data-aos="fade-down" data-aos-duration="2000">
          <div class="card bg-transparent text-light" style="width: 100%; border: none;">
              <img src="https://images.unsplash.com/photo-1667912100232-a457b313ec18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8ZW5naW5lZXJpbmclMjBjb21wYXNzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
              <div class="card-body">
                  <h2 class="card-title text-dark">إدارة الأملاك</h2>
                  <p class="card-text fs-4">نقوم بمساعدة عملائنا من خلال الاستماع إلى أفكارهم وتقديم المشورة لهم لتنفيذ أفضل الحلول التي تتناسب مع رؤيتهم وطموحاتهم.</p>
              </div>
          </div>
      </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mb-4"  data-aos="fade-right" data-aos-duration="2000">
            <div class="card bg-transparent text-light" style="width: 100%; border: none;">
                <img src="https://plus.unsplash.com/premium_photo-1663126365722-c2cb3cb83977?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fGVuZ2luZWVyaW5nJTIwYnVpbGRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title text-dark">التقييم العقاري</h2>
                    <p class="card-text fs-4">التقييم العقاري هو عملية تقدير قيمة الأملاك العقارية محل الاعتبار وإبداء المشورة فيما يتعلق بتقييم الممتلكات حسب القيمة المتداولة في السوق في فترة معينة.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6 mb-4"  data-aos="fade-left" data-aos-duration="2000">
          <div class="card bg-transparent text-light" style="width: 100%; border: none;">
              <img src="https://images.unsplash.com/photo-1582881853443-7c5a7e4e0d1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZW5naW5lZXJpbmclMjBidWilsZGluZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
              <div class="card-body">
                  <h2 class="card-title text-dark">الوساطة العقارية</h2>
                  <p class="card-text fs-4">نقوم بتقديم خدمات الوساطة العقارية في عمليات البيع والشراء لمن يرغب من عملائنا في بيع وتسويق عقاراتهم المختلفة أو شراء عقارات جديدة.</p>
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