<!DOCTYPE html>
<html lang="en">

@extends('layout.headLinks')
@section('title')
    دور معمار للعقارات-تواصل معنا
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
        <div class="col-lg-12">
          <h3>تواصل معنا</h3>
        </div>
      </div>
    </div>
  </div>
  <div>
    @if (session()->has('message'))
    <div class="alert alert-success text-center fs-3">
        {{ session()->get('message') }}
    </div>
    @endif
</div>
  <div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="map">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                </div>
            </div>
            <style>

label{
  color: #f35525 !important;
  font-size: large !important;
  font-family: system-ui !important;
  font-weight: bold !important;
}
          </style>
            <div class="col-lg-6">
                <form id="contact-form" action="{{url('/send-email')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                                <label for="name">الاسم الكامل</label>
                                <input type="name" name="name" id="name" placeholder="الاسم الكامل" autocomplete="on" required>
                        </div>
                        <div class="col-lg-12">

                                <label for="email">البريد الالكتروني</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="البريد الالكتروني" required="">

                        </div>
                        <div class="col-lg-12">

                                <label for="message">الرساله</label>
                                <textarea name="message" id="message" placeholder="رسالتك"></textarea>

                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">ارسل رساله</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('fixedButton')
  @extends('layout.footer')
  @extends('layout.scriptLinks')

  </body>
</html>