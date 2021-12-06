<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','Khoir Project')</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="{!! $header_settings->header_name !!}" name="description">
  <meta content="{!! $header_settings->header_name !!}" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <style>
    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
      width: 100%;
      height: 60vh;
      background: url("../asset/img/hero-bg.jpg") center center;
      background-size: cover;
      position: relative;
      z-index: 1;
      padding: 0;
      margin-bottom: -120px;
    }
    #hero:before {
      content: "";
      background: rgba(0, 0, 0, 0.4);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }
    #hero .container {
      z-index: 2;
    }
    #hero h1 {
      margin: 0 0 10px 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      color: #fff;
    }
    #hero h2 {
      color: #eee;
      margin-bottom: 50px;
      font-size: 24px;
    }
    #hero .get-started-icon {
      font-size: 24px;
      background: #ff5821;
      padding: 14px;
      color: #fff;
      border-radius: 50px;
      position: relative;
      z-index: 5;
      box-shadow: 10px 2px 15px rgba(0, 0, 0, 0.1);
    }
    #hero .btn-get-started {
      font-family: "Raleway", sans-serif;
      font-weight: 400;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      transition: 0.5s;
      margin-left: -10px;
      padding: 8px 26px 8px 26px;
      color: #fff;
      background: #584b48;
      border-radius: 0 50px 50px 0;
      position: relative;
      z-index: 4;
    }
    #hero .btn-get-started:hover {
      background: #ff5821;
    }
    @media (min-width: 1024px) {
      #hero {
        background-attachment: fixed;
      }
    }
    @media (max-width: 1024px), (max-height: 768px) {
      #hero {
        margin-bottom: -150px;
        height: 80vh;
      }
    }
    @media (max-width: 768px) {
      #hero {
        height: 80vh;
      }
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }
      #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
      }
    }
    @media (max-height: 640px) {
      #hero {
        height: 120vh;
      }
    }

    /*--------------------------------------------------------------
    # About
    --------------------------------------------------------------*/
    .about .icon-boxes h4 {
      font-size: 18px;
      color: #7f6d68;
      margin-bottom: 15px;
    }
    .about .icon-boxes h3 {
      font-size: 28px;
      font-weight: 700;
      color: #554945;
      margin-bottom: 15px;
    }
    .about .icon-box {
      margin-top: 40px;
    }
    .about .icon-box .icon {
      float: left;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 64px;
      height: 64px;
      border: 2px solid #ffcbba;
      border-radius: 50px;
      transition: 0.5s;
      background: #fff;
    }
    .about .icon-box .icon i {
      color: #ff5821;
      font-size: 32px;
    }
    .about .icon-box:hover .icon {
      background: #ff5821;
      border-color: #ff5821;
    }
    .about .icon-box:hover .icon i {
      color: #fff;
    }
    .about .icon-box .title {
      margin-left: 85px;
      font-weight: 700;
      margin-bottom: 10px;
      font-size: 18px;
    }
    .about .icon-box .title a {
      color: #343a40;
      transition: 0.3s;
    }
    .about .icon-box .title a:hover {
      color: #ff5821;
    }
    .about .icon-box .description {
      margin-left: 85px;
      line-height: 24px;
      font-size: 14px;
    }
    .about .video-box {
      background: url("../asset/img/about-img.jpg") center center no-repeat;
      background-size: cover;
      min-height: 500px;
    }
    .about .play-btn {
      width: 94px;
      height: 94px;
      background: radial-gradient(#ff5821 50%, rgba(255, 88, 33, 0.4) 52%);
      border-radius: 50%;
      display: block;
      position: absolute;
      left: calc(50% - 47px);
      top: calc(50% - 47px);
      overflow: hidden;
    }
    .about .play-btn::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 100;
      transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    .about .play-btn::before {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      -webkit-animation-delay: 0s;
      animation-delay: 0s;
      -webkit-animation: pulsate-btn 2s;
      animation: pulsate-btn 2s;
      -webkit-animation-direction: forwards;
      animation-direction: forwards;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-timing-function: steps;
      animation-timing-function: steps;
      opacity: 1;
      border-radius: 50%;
      border: 5px solid rgba(255, 88, 33, 0.7);
      top: -15%;
      left: -15%;
      background: rgba(198, 16, 0, 0);
    }
    .about .play-btn:hover::after {
      border-left: 15px solid #ff5821;
      transform: scale(20);
    }
    .about .play-btn:hover::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border: none;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 200;
      -webkit-animation: none;
      animation: none;
      border-radius: 0;
    }

    @-webkit-keyframes pulsate-btn {
      0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
      }
      100% {
        transform: scale(1, 1);
        opacity: 0;
      }
    }

    @keyframes pulsate-btn {
      0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
      }
      100% {
        transform: scale(1, 1);
        opacity: 0;
      }
    }

    /*--------------------------------------------------------------
    # Testimonials
    --------------------------------------------------------------*/
    .testimonials {
      padding: 80px 0;
      background: url("../asset/img/testimonials-bg.jpg") no-repeat;
      background-position: center center;
      background-size: cover;
      position: relative;
    }
    .testimonials::before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
    }
    .testimonials .section-header {
      margin-bottom: 40px;
    }
    .testimonials .testimonials-carousel, .testimonials .testimonials-slider {
      overflow: hidden;
    }
    .testimonials .testimonial-item {
      text-align: center;
      color: #fff;
    }
    .testimonials .testimonial-item .testimonial-img {
      width: 100px;
      border-radius: 50%;
      border: 6px solid rgba(255, 255, 255, 0.15);
      margin: 0 auto;
    }
    .testimonials .testimonial-item h3 {
      font-size: 20px;
      font-weight: bold;
      margin: 10px 0 5px 0;
      color: #fff;
    }
    .testimonials .testimonial-item h4 {
      font-size: 14px;
      color: #ddd;
      margin: 0 0 15px 0;
    }
    .testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
      color: rgba(255, 255, 255, 0.4);
      font-size: 26px;
    }
    .testimonials .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }
    .testimonials .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
    }
    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 auto 15px auto;
      color: #eee;
    }
    .testimonials .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }
    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: rgba(255, 255, 255, 0.5);
      opacity: 1;
    }
    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #ff5821;
    }
    @media (min-width: 992px) {
      .testimonials .testimonial-item p {
        width: 80%;
      }
    }
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{!! $header_settings->header_email !!}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{!! $header_settings->header_phone !!}</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">{!! $header_settings->header_button_text !!}</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  @include('pages.users.layouts.navbar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Selamat Datang di Khoir Project</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">{!! $header_settings->header_button_text !!}</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
      @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{!! $footer_settings->footer_title !!}</h3>
            <p>
              {!! $footer_settings->footer_address !!}
              
            </p>
            <p>
              <strong>Nomor Telphone:</strong> {!! $footer_settings->footer_phone !!}<br>
              <strong>Email:</strong> {!! $footer_settings->footer_email !!}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Halaman</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Devisi</h4>
            <ul>
              @foreach ($devisions as $devision)
                  <li><i class="bx bx-chevron-right"></i> <a href="{{ $devision->slug }}">{{ $devision->name }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="copyright">
          {!! $footer_settings->footer_copyright !!}
        </div>
        <div class="credits">
          Designed by <a href="/">{!! $footer_settings->footer_designed !!}</a>
        </div>
      </div>
      <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="{!! $footer_settings->footer_twitter !!}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{!! $footer_settings->footer_facebook !!}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{!! $footer_settings->footer_instagram !!}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{!! $footer_settings->footer_youtube !!}" class="google-plus"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>