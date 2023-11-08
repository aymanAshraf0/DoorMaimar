<!DOCTYPE html>
<html lang="en">
@extends('layout.headLinks')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@section('title')
  دور معمار للعقارات-عن دور معمار 
@endsection
<body>
<style>
  h3{
  font-size: large;
  font-family: El Messiri;
  }

.about2 p{
  direction: rtl;
  font-weight:900;
  font-size: 20px !important;
}
.about2 h2{
  direction: rtl;
  border-bottom: 3px solid rgba(212, 169, 50, 0.838);
  
}
</style>
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
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>عن دور معمار</h3>
        </div>
      </div>
    </div>
  </div>

 

  <div class="section best-deal">
    <div class="container">
      <div class="row">
            
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row" >
                    <div class="col-lg-6"  data-aos="fade-up" data-aos-duration="2000">
                      <img src="assets/images/about-img.jpg" alt="">
                    </div>
                    <div class="col-lg-4 about2"  data-aos="fade-down" data-aos-duration="2000">
                      <h2>من نحن</h2>
                  <p >انطلقت شركة دور ومعمار للتطوير العقاري بداية الألفية الثالثة بالكثير من مشاريع التطوير العقاري وحلول الوساطة العقارية والعديد من الشراكات مع القطاع البنكي في المملكة العربية السعودية وقد استلهمت خطواتها من خلال رؤية المملكة العربية السعودية النهضوية والخطوات التي اجتازتها المملكة خلال سنوات معدودة وجعلت من تأمين المسكن الميسر بحلول تمويلية مناسبة بأسرع الطرق وأسهل الخطوات وأفضل السبل أولى الخطوات وأهم المنجزات</p>
                    </div>
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