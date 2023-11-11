<style>
  footer .btn{
    background-color: #AC9366;
    color: #ffccbc;
  }
  footer .btn:hover{
    color: rgba(212, 169, 50, 0.838);
    background-color:rgba(212, 169, 50, 0.838);
  }

  .footer{
    background-color: black;
  }

 .footerr a{
  display: block;
  padding-left: 20px;
  padding-right: 20px;
  font-weight: 500;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  color: white !important;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  border: transparent;
  letter-spacing: .25px;
  font-size:medium;
  font-family: system-ui;
}
.footerr a:hover{
  color: #AC9366 !important;
}
.footerr a i{
  color: rgba(212, 169, 50, 0.838);
}

.fontt h5{
  font-family: system-ui;
  font-size:medium;
}
.sh{
  font-family: system-ui;
  color: #AC9366;
}

</style>
<!-- Footer -->
<footer class="footer text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center mb-5">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2 fs-1 sh">
              <strong>شركاء النجاح</strong>
              <hr>
            </p>
          </div>
          <!--Grid column-->
          
          <!--Grid column-->
          <div class="slider-container">
            <div class=" autoplay">
                <!-- الصور -->
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh1.jpeg')}}" alt="Image 1"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh2.jpeg')}}" alt="Image 2"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh3.jpeg')}}" alt="Image 3"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh4.jpeg')}}" alt="Image 4"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh5.jpeg')}}" alt="Image 5"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh6.jpeg')}}" alt="Image 6"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh7.jpeg')}}" alt="Image 7"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh8.jpeg')}}" alt="Image 8"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh9.jpeg')}}" alt="Image 9"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh10.jpeg')}}" alt="Image 10"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh11.jpeg')}}" alt="Image 11"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh12.jpeg')}}" alt="Image 12"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh13.jpeg')}}" alt="Image 13"></div>
                <div class="m-3"><img data-lazy="{{asset('assets\images\sh14.jpeg')}}" alt="Image 14"></div>
            </div>
        </div>
          <!--Grid column-->

          <!--Grid column-->

          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row pt-5">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 fontt">
          <h5 class="text-light"><img style="width: 80%" src="{{asset('assets\images\mammar logo2.png')}}"></h5>
          <div>
          <h5 class="text-light">
انطلقت شركة دور ومعمار للتطوير 
العقاري بداية الألفية الثالثة 
بالكثير من مشاريع التطوير 
العقاري وحلول الوساطة العقارية 
والعديد من الشراكات مع القطاع 
البنكي في المملكة العربية السعودية
          </h5>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 fontt">
          <h5 class="text-light">تابعنا</h5>
<hr>
          <ul class="list-unstyled mb-0 ">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>


      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 fontt">
          <h5 class="text-light">خريطه الموقع</h5>
<hr>
          <ul class="list-unstyled mb-0 footerr">
            <li>
              <a href="{{url('home')}}" class="active">الرئيسيه</a>
            </li>
            <li>
              <a href="{{url('aboutUs')}}">عن دور معمار</a>
            </li>
            <li>
              <a href="{{url('services')}}">خدماتنا</a>
            </li>
            <li>
              <a href="{{url('contact')}}">تواصل معنا</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 fontt">
          <h5 class="text-light">اتصل بنا</h5>
<hr>
          <ul class="list-unstyled mb-0 footerr">
            <li>
              <a href="#!" class="text-white">مكه-السعوديه<i class="fa-solid fa-location-dot"></i></a>
            </li>
            <li>
              <a href="#!" class="text-white">0550249808<i class="fa-brands fa-whatsapp"></i></a>
            </li>
            <li>
              <a href="#!" class="text-white">Info@miemar.com.sa<i class="fa-solid fa-envelope"></i></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

</footer>
<!-- Footer -->
<script>
  $(document).ready(function(){
      $('.autoplay').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true, // تمكين التشغيل التلقائي
          autoplaySpeed: 3000 // سرعة التشغيل التلقائي بالميللي ثانية
      });
  });
</script>
