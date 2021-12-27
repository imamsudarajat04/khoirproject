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
  {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

  <style>
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    body {
      font-family: "Open Sans", sans-serif;
      color: #313030;
    }

    a {
      color: {{ $global_settings->primary_color }};
      text-decoration: none;
    }

    a:hover {
      color: {{ $global_settings->primary_color }};
      text-decoration: none;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: "Raleway", sans-serif;
    }

    /*--------------------------------------------------------------
    # Back to top button
    --------------------------------------------------------------*/
    .back-to-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 996;
      background: {{ $global_settings->primary_color }};
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }
    .back-to-top i {
      font-size: 28px;
      color: #fff;
      line-height: 0;
    }
    .back-to-top:hover {
      background: {{ $global_settings->secondary_color }};
      color: #fff;
    }
    .back-to-top.active {
      visibility: visible;
      opacity: 1;
    }

    /*--------------------------------------------------------------
    # Disable aos animation delay on mobile devices
    --------------------------------------------------------------*/
    @media screen and (max-width: 768px) {
      [data-aos-delay] {
        transition-delay: 0 !important;
      }
    }
    /*--------------------------------------------------------------
    # Top Bar
    --------------------------------------------------------------*/
    #topbar {
      background: #39312f;
      font-size: 14px;
      padding: 0;
      color: rgba(255, 255, 255, 0.8);
      height: 40px;
    }
    #topbar .contact-info i {
      font-style: normal;
      color: {{ $global_settings->primary_color }};
    }
    #topbar .contact-info i a, #topbar .contact-info i span {
      padding-left: 5px;
      color: #fff;
    }
    #topbar .contact-info i a {
      line-height: 0;
      transition: 0.3s;
    }
    #topbar .contact-info i a:hover {
      color: {{ $global_settings->primary_color }};
    }
    #topbar .cta a {
      color: #fff;
      background: {{ $global_settings->primary_color }};
      padding: 10px 20px;
      display: inline-block;
      transition: 0.3s;
    }
    #topbar .cta a:hover {
      background: {{ $global_settings->secondary_color }};
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
      height: 70px;
      transition: all 0.5s;
      z-index: 997;
      background: {{ $global_settings->navbar_color }};
    }
    #header.header-fixed {
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    }
    #header .logo h1 {
      font-size: 28px;
      margin: 0;
      line-height: 0;
      font-weight: 700;
      font-family: "Open Sans", sans-serif;
    }
    #header .logo h1 a, #header .logo h1 a:hover {
      color: #635551;
      text-decoration: none;
    }
    #header .logo img {
      padding: 0;
      margin: 0;
      max-height: 40px;
    }

    .scrolled-offset {
      margin-top: 70px;
    }

    #main {
      z-index: 3;
    }

    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /**
    * Desktop Navigation 
    */
    .navbar {
      padding: 0;
    }
    .navbar ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }
    .navbar li {
      position: relative;
    }
    .navbar a, .navbar a:focus {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0 10px 30px;
      font-size: 14px;
      font-family: "Poppins", sans-serif;
      color: #635551;
      white-space: nowrap;
      transition: 0.3s;
    }
    .navbar a i, .navbar a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
    }
    .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
      color: {{ $global_settings->primary_color }};
    }
    .navbar .getstarted, .navbar .getstarted:focus {
      background: {{ $global_settings->primary_color }};
      padding: 8px 20px;
      margin-left: 30px;
      border-radius: 4px;
      color: #fff;
    }
    .navbar .getstarted:hover, .navbar .getstarted:focus:hover {
      color: #fff;
      background: #ff6b3b;
    }
    .navbar .dropdown ul {
      display: block;
      position: absolute;
      left: 14px;
      top: calc(100% + 30px);
      margin: 0;
      padding: 10px 0;
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      transition: 0.3s;
      border-radius: 4px;
    }
    .navbar .dropdown ul li {
      min-width: 200px;
    }
    .navbar .dropdown ul a {
      padding: 10px 20px;
    }
    .navbar .dropdown ul a i {
      font-size: 12px;
    }
    .navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
      color: {{ $global_settings->primary_color }};
    }
    .navbar .dropdown:hover > ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }
    .navbar .dropdown .dropdown ul {
      top: 0;
      left: calc(100% - 30px);
      visibility: hidden;
    }
    .navbar .dropdown .dropdown:hover > ul {
      opacity: 1;
      top: 0;
      left: 100%;
      visibility: visible;
    }
    @media (max-width: 1366px) {
      .navbar .dropdown .dropdown ul {
        left: -90%;
      }
      .navbar .dropdown .dropdown:hover > ul {
        left: -100%;
      }
    }

    /**
    * Mobile Navigation 
    */
    .mobile-nav-toggle {
      color: #473d3a;
      font-size: 28px;
      cursor: pointer;
      display: none;
      line-height: 0;
      transition: 0.5s;
    }
    .mobile-nav-toggle.bi-x {
      color: #fff;
    }

    @media (max-width: 991px) {
      .mobile-nav-toggle {
        display: block;
      }

      .navbar ul {
        display: none;
      }
    }
    .navbar-mobile {
      position: fixed;
      overflow: hidden;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      background: rgba(43, 37, 35, 0.9);
      transition: 0.3s;
      z-index: 999;
    }
    .navbar-mobile .mobile-nav-toggle {
      position: absolute;
      top: 15px;
      right: 15px;
    }
    .navbar-mobile ul {
      display: block;
      position: absolute;
      top: 55px;
      right: 15px;
      bottom: 15px;
      left: 15px;
      padding: 10px 0;
      border-radius: 10px;
      background-color: #fff;
      overflow-y: auto;
      transition: 0.3s;
    }
    .navbar-mobile a, .navbar-mobile a:focus {
      padding: 10px 20px;
      font-size: 15px;
      color: #473d3a;
    }
    .navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
      color: {{ $global_settings->primary_color }};
    }
    .navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
      margin: 15px;
    }
    .navbar-mobile .dropdown ul {
      position: static;
      display: none;
      margin: 10px 20px;
      padding: 10px 0;
      z-index: 99;
      opacity: 1;
      visibility: visible;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    }
    .navbar-mobile .dropdown ul li {
      min-width: 200px;
    }
    .navbar-mobile .dropdown ul a {
      padding: 10px 20px;
    }
    .navbar-mobile .dropdown ul a i {
      font-size: 12px;
    }
    .navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
      color: {{ $global_settings->primary_color }};
    }
    .navbar-mobile .dropdown > .dropdown-active {
      display: block;
    }



    /*--------------------------------------------------------------
    # Sections General
    --------------------------------------------------------------*/
    section {
      padding: 60px 0;
      overflow: hidden;
    }

    .section-bg {
      background-color: #fff9f7;
    }

    .section-title {
      text-align: center;
      padding-bottom: 30px;
    }
    .section-title h2 {
      font-size: 32px;
      font-weight: 500;
      margin-bottom: 20px;
      padding-bottom: 0;
      font-family: "Poppins", sans-serif;
      color: #635551;
    }
    .section-title p {
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
    # Breadcrumbs
    --------------------------------------------------------------*/
    .breadcrumbs {
      padding: 15px 0;
      background: #f4f2f2;
      margin-bottom: 40px;
    }
    .breadcrumbs h2 {
      font-size: 28px;
      font-weight: 500;
    }
    .breadcrumbs ol {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0 0 10px 0;
      margin: 0;
      font-size: 14px;
    }
    .breadcrumbs ol li + li {
      padding-left: 10px;
    }
    .breadcrumbs ol li + li::before {
      display: inline-block;
      padding-right: 10px;
      color: #635551;
      content: "/";
    }

    /*--------------------------------------------------------------
    # Why Us
    --------------------------------------------------------------*/
    .why-us {
      padding: 0 0 30px 0;
      position: relative;
      z-index: 3;
    }
    .why-us .content {
      padding: 30px;
      background: {{ $global_settings->primary_color }};
      border-radius: 4px;
      color: #fff;
    }
    .why-us .content h3 {
      font-weight: 700;
      font-size: 34px;
      margin-bottom: 30px;
    }
    .why-us .content p {
      margin-bottom: 30px;
    }
    .why-us .content .more-btn {
      display: inline-block;
      background: rgba(255, 255, 255, 0.2);
      padding: 6px 30px 8px 30px;
      color: #fff;
      border-radius: 50px;
      transition: all ease-in-out 0.4s;
    }
    .why-us .content .more-btn i {
      font-size: 14px;
    }
    .why-us .content .more-btn:hover {
      color: {{ $global_settings->primary_color }};
      background: #fff;
    }
    .why-us .icon-boxes .icon-box {
      text-align: center;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      padding: 40px 30px;
      width: 100%;
    }
    .why-us .icon-boxes .icon-box i {
      font-size: 40px;
      color: {{ $global_settings->secondary_color }};
      margin-bottom: 30px;
    }
    .why-us .icon-boxes .icon-box h4 {
      font-size: 20px;
      font-weight: 700;
      margin: 0 0 30px 0;
    }
    .why-us .icon-boxes .icon-box p {
      font-size: 15px;
      color: #716f6f;
    }


    /*--------------------------------------------------------------
    # Clients
    --------------------------------------------------------------*/
    .clients .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }
    .clients .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #fff;
      opacity: 1;
      border: 1px solid {{ $global_settings->primary_color }};
    }
    .clients .swiper-pagination .swiper-pagination-bullet-active {
      background-color: {{ $global_settings->primary_color }};
    }
    .clients .swiper-slide img {
      opacity: 0.5;
      filter: grayscale(100%);
    }
    .clients .swiper-slide img:hover {
      filter: none;
      opacity: 1;
    }

    /*--------------------------------------------------------------
    # Services
    --------------------------------------------------------------*/
    .services .icon-box {
      padding: 50px 20px;
      margin-top: 35px;
      margin-bottom: 25px;
      text-align: center;
      height: 200px;
      position: relative;
      background: #fff;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }
    .services .icon {
      position: absolute;
      top: -36px;
      left: calc(50% - 36px);
      transition: 0.2s;
      border-radius: 50%;
      border: 6px solid #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      width: 72px;
      height: 72px;
      background: {{ $global_settings->primary_color }};
    }
    .services .icon i {
      color: #fff;
      font-size: 24px;
      line-height: 0;
    }
    .services .title {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 18px;
      text-transform: uppercase;
    }
    .services .title a {
      color: #343a40;
    }
    .services .icon-box:hover .icon {
      background: #fff;
      border: 2px solid {{ $global_settings->secondary_color }};
    }
    .services .icon-box:hover .icon i {
      color: {{ $global_settings->secondary_color }};
    }
    .services .icon-box:hover .title a {
      color: {{ $global_settings->secondary_color }};
    }
    .services .description {
      line-height: 24px;
      font-size: 14px;
    }

    /*--------------------------------------------------------------
    # Values
    --------------------------------------------------------------*/
    .values .card {
      border: 0;
      padding: 160px 20px 20px 20px;
      position: relative;
      width: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
    .values .card-body {
      z-index: 10;
      background: rgba(255, 255, 255, 0.9);
      padding: 15px 30px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
      transition: ease-in-out 0.4s;
      border-radius: 5px;
    }
    .values .card-title {
      font-weight: 700;
      text-align: center;
      margin-bottom: 15px;
    }
    .values .card-title a {
      color: #473d3a;
    }
    .values .card-text {
      color: #4b4949;
    }
    .values .read-more a {
      color: #656262;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 12px;
      transition: 0.4s;
    }
    .values .read-more a:hover {
      text-decoration: underline;
    }
    .values .card:hover .card-body {
      background: {{ $global_settings->primary_color }};
    }
    .values .card:hover .read-more a, .values .card:hover .card-title, .values .card:hover .card-title a, .values .card:hover .card-text {
      color: #fff;
    }

    /*--------------------------------------------------------------
    # Team
    --------------------------------------------------------------*/
    .team .member {
      margin-bottom: 20px;
      overflow: hidden;
      text-align: center;
      border-radius: 5px;
      background: #fff;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }
    .team .member .member-img {
      position: relative;
      overflow: hidden;
    }
    .team .member .social {
      position: absolute;
      left: 0;
      bottom: 0;
      right: 0;
      height: 40px;
      opacity: 0;
      transition: ease-in-out 0.3s;
      background: rgba(255, 255, 255, 0.85);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .team .member .social a {
      transition: color 0.3s;
      color: #473d3a;
      margin: 0 10px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .team .member .social a:hover {
      color: {{ $global_settings->primary_color }};
    }
    .team .member .social i {
      font-size: 18px;
      line-height: 0;
    }
    .team .member .member-info {
      padding: 25px 15px;
    }
    .team .member .member-info h4 {
      font-weight: 700;
      margin-bottom: 5px;
      font-size: 18px;
      color: #473d3a;
    }
    .team .member .member-info span {
      display: block;
      font-size: 13px;
      font-weight: 400;
      color: #989595;
    }
    .team .member .member-info p {
      font-style: italic;
      font-size: 14px;
      line-height: 26px;
      color: #656262;
    }
    .team .member:hover .social {
      opacity: 1;
    }

    /*--------------------------------------------------------------
    # F.A.Q
    --------------------------------------------------------------*/
    .faq .faq-list {
      padding: 0 100px;
    }
    .faq .faq-list ul {
      padding: 0;
      list-style: none;
    }
    .faq .faq-list li + li {
      margin-top: 15px;
    }
    .faq .faq-list li {
      padding: 20px;
      background: #fff;
      border-radius: 4px;
      position: relative;
    }
    .faq .faq-list a {
      display: block;
      position: relative;
      font-family: "Poppins", sans-serif;
      font-size: 16px;
      line-height: 24px;
      font-weight: 500;
      padding: 0 30px;
      outline: none;
      cursor: pointer;
    }
    .faq .faq-list .icon-help {
      font-size: 24px;
      position: absolute;
      right: 0;
      left: 20px;
      color: #ffb8a1;
    }
    .faq .faq-list .icon-show, .faq .faq-list .icon-close {
      font-size: 24px;
      position: absolute;
      right: 0;
      top: 0;
    }
    .faq .faq-list p {
      margin-bottom: 0;
      padding: 10px 0 0 0;
    }
    .faq .faq-list .icon-show {
      display: none;
    }
    .faq .faq-list a.collapsed {
      color: #343a40;
    }
    .faq .faq-list a.collapsed:hover {
      color: {{ $global_settings->secondary_color }};
    }
    .faq .faq-list a.collapsed .icon-show {
      display: inline-block;
    }
    .faq .faq-list a.collapsed .icon-close {
      display: none;
    }
    @media (max-width: 1200px) {
      .faq .faq-list {
        padding: 0;
      }
    }

    /*--------------------------------------------------------------
    # Contact
    --------------------------------------------------------------*/
    .contact .info-box {
      color: #313030;
      box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
      padding: 20px;
    }
    .contact .info-box i {
      font-size: 32px;
      color: {{ $global_settings->primary_color }};
      border-radius: 50%;
      padding: 8px;
      border: 2px dotted #ffded4;
      float: left;
    }
    .contact .info-box h3 {
      font-size: 20px;
      color: #656262;
      font-weight: 700;
      margin: 10px 0 10px 68px;
    }
    .contact .info-box p {
      padding: 0;
      line-height: 24px;
      font-size: 14px;
      margin: 0 0 0 68px;
    }
    .contact .php-email-form {
      box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
      padding: 30px;
    }
    .contact .php-email-form .error-message {
      display: none;
      color: #fff;
      background: {{ $global_settings->primary_color }};
      text-align: left;
      padding: 15px;
      font-weight: 600;
    }
    .contact .php-email-form .error-message br + br {
      margin-top: 25px;
    }
    .contact .php-email-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }
    .contact .php-email-form .loading {
      display: none;
      background: #fff;
      text-align: center;
      padding: 15px;
    }
    .contact .php-email-form .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #18d26e;
      border-top-color: #eee;
      -webkit-animation: animate-loading 1s linear infinite;
      animation: animate-loading 1s linear infinite;
    }
    .contact .php-email-form input, .contact .php-email-form textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
    }
    .contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
      border-color: {{ $global_settings->primary_color }};
    }
    .contact .php-email-form input {
      padding: 10px 15px;
    }
    .contact .php-email-form textarea {
      padding: 12px 15px;
    }
    .contact .php-email-form button[type=submit] {
      background: {{ $global_settings->secondary_color }};
      border: 0;
      padding: 10px 24px;
      color: #fff;
      transition: 0.4s;
    }
    .contact .php-email-form button[type=submit]:hover {
      background: {{ $global_settings->primary_color }};
    }
    @-webkit-keyframes animate-loading {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
    @keyframes animate-loading {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    /*--------------------------------------------------------------
    # Blog
    --------------------------------------------------------------*/
    .blog {
      padding: 20px 0;
    }
    .blog .entry {
      padding: 30px;
      margin-bottom: 60px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }
    .blog .entry .entry-img {
      max-height: 440px;
      margin: -30px -30px 20px -30px;
      overflow: hidden;
    }
    .blog .entry .entry-title {
      font-size: 28px;
      font-weight: bold;
      padding: 0;
      margin: 0 0 20px 0;
    }
    .blog .entry .entry-title a {
      color: #473d3a;
      transition: 0.3s;
    }
    .blog .entry .entry-title a:hover {
      color: {{ $global_settings->primary_color }};
    }
    .blog .entry .entry-meta {
      margin-bottom: 15px;
      color: #afa29e;
    }
    .blog .entry .entry-meta ul {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      align-items: center;
      padding: 0;
      margin: 0;
    }
    .blog .entry .entry-meta ul li + li {
      padding-left: 20px;
    }
    .blog .entry .entry-meta i {
      font-size: 16px;
      margin-right: 8px;
      line-height: 0;
    }
    .blog .entry .entry-meta a {
      color: #656262;
      font-size: 14px;
      display: inline-block;
      line-height: 1;
    }
    .blog .entry .entry-content p{
      line-height: 24px;
    }
    .blog .entry .entry-content .read-more {
      -moz-text-align-last: right;
      text-align-last: right;
    }
    .blog .entry .entry-content .read-more a {
      display: inline-block;
      background: {{ $global_settings->secondary_color }};
      color: #fff;
      padding: 6px 20px;
      transition: 0.3s;
      font-size: 14px;
      border-radius: 4px;
    }
    .blog .entry .entry-content .read-more a:hover {
      background: {{ $global_settings->primary_color }};
    }
    .blog .entry .entry-content h3 {
      font-size: 22px;
      margin-top: 30px;
      font-weight: bold;
    }

    .blog .entry .entry-content img {
      width: 100%;
      padding-top: 100%;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .blog .entry .entry-content blockquote {
      overflow: hidden;
      background-color: #fafafa;
      padding: 60px;
      position: relative;
      text-align: center;
      margin: 20px 0;
    }
    .blog .entry .entry-content blockquote p {
      color: #313030;
      line-height: 1.6;
      margin-bottom: 0;
      font-style: italic;
      font-weight: 500;
      font-size: 22px;
    }
    .blog .entry .entry-content blockquote::after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background-color: #473d3a;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .blog .entry .entry-footer {
      padding-top: 10px;
      border-top: 1px solid #e6e6e6;
    }
    .blog .entry .entry-footer i {
      color: #988782;
      display: inline;
    }
    .blog .entry .entry-footer a {
      color: #554945;
      transition: 0.3s;
    }
    .blog .entry .entry-footer a:hover {
      color: #ff5821;
    }
    .blog .entry .entry-footer .cats {
      list-style: none;
      display: inline;
      padding: 0 20px 0 0;
      font-size: 14px;
    }
    .blog .entry .entry-footer .cats li {
      display: inline-block;
    }
    .blog .entry .entry-footer .tags {
      list-style: none;
      display: inline;
      padding: 0;
      font-size: 14px;
    }
    .blog .entry .entry-footer .tags li {
      display: inline-block;
    }
    .blog .entry .entry-footer .tags li + li::before {
      padding-right: 6px;
      color: #6c757d;
      content: ",";
    }
    .blog .entry .entry-footer .share {
      font-size: 16px;
    }
    .blog .entry .entry-footer .share i {
      padding-left: 5px;
    }
    .blog .entry-single {
      margin-bottom: 30px;
    }
    .blog .blog-author {
      padding: 20px;
      margin-bottom: 30px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }
    .blog .blog-author img {
      width: 120px;
      margin-right: 20px;
    }
    .blog .blog-author h4 {
      font-weight: 600;
      font-size: 22px;
      margin-bottom: 0px;
      padding: 0;
      color: #473d3a;
    }
    .blog .blog-author .social-links {
      margin: 0 10px 10px 0;
    }
    .blog .blog-author .social-links a {
      color: rgba(71, 61, 58, 0.5);
      margin-right: 5px;
    }
    .blog .blog-author p {
      font-style: italic;
      color: #a4a2a2;
    }
    .blog .blog-comments {
      margin-bottom: 30px;
    }
    .blog .blog-comments .comments-count {
      font-weight: bold;
    }
    .blog .blog-comments .comment {
      margin-top: 30px;
      position: relative;
    }
    .blog .blog-comments .comment .comment-img {
      margin-right: 14px;
    }
    .blog .blog-comments .comment .comment-img img {
      width: 60px;
    }
    .blog .blog-comments .comment h5 {
      font-size: 16px;
      margin-bottom: 2px;
    }
    .blog .blog-comments .comment h5 a {
      font-weight: bold;
      color: #313030;
      transition: 0.3s;
    }
    .blog .blog-comments .comment h5 a:hover {
      color: #ff5821;
    }
    .blog .blog-comments .comment h5 .reply {
      padding-left: 10px;
      color: #473d3a;
    }
    .blog .blog-comments .comment h5 .reply i {
      font-size: 20px;
    }
    .blog .blog-comments .comment time {
      display: block;
      font-size: 14px;
      color: #635551;
      margin-bottom: 5px;
    }
    .blog .blog-comments .comment.comment-reply {
      padding-left: 40px;
    }
    .blog .blog-comments .reply-form {
      margin-top: 30px;
      padding: 30px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }
    .blog .blog-comments .reply-form h4 {
      font-weight: bold;
      font-size: 22px;
    }
    .blog .blog-comments .reply-form p {
      font-size: 14px;
    }
    .blog .blog-comments .reply-form input {
      border-radius: 4px;
      padding: 10px 10px;
      font-size: 14px;
    }
    .blog .blog-comments .reply-form input:focus {
      box-shadow: none;
      border-color: #ffa587;
    }
    .blog .blog-comments .reply-form textarea {
      border-radius: 4px;
      padding: 10px 10px;
      font-size: 14px;
    }
    .blog .blog-comments .reply-form textarea:focus {
      box-shadow: none;
      border-color: #ffa587;
    }
    .blog .blog-comments .reply-form .form-group {
      margin-bottom: 25px;
    }
    .blog .blog-comments .reply-form .btn-primary {
      border-radius: 4px;
      padding: 10px 20px;
      border: 0;
      background-color: #473d3a;
    }
    .blog .blog-comments .reply-form .btn-primary:hover {
      background-color: #554945;
    }
    .blog .blog-pagination {
      color: #7f6d68;
    }
    .blog .blog-pagination ul {
      display: flex;
      padding: 0;
      margin: 0;
      list-style: none;
    }
    .blog .blog-pagination li {
      margin: 0 5px;
      transition: 0.3s;
    }
    .blog .blog-pagination li a {
      color: #473d3a;
      padding: 7px 16px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .blog .blog-pagination li.active, .blog .blog-pagination li:hover {
      /* background: {{ $global_settings->primary_color }}; */
    }
    .blog .blog-pagination li.active a, .blog .blog-pagination li:hover a {
      color: #fff;
    }
    .blog .sidebar {
      padding: 30px;
      margin: 0 0 60px 20px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }
    .blog .sidebar .sidebar-title {
      font-size: 20px;
      font-weight: 700;
      padding: 0 0 0 0;
      margin: 0 0 15px 0;
      color: #473d3a;
      position: relative;
    }
    .blog .sidebar .sidebar-item {
      margin-bottom: 30px;
    }
    .blog .sidebar .search-form form {
      background: #fff;
      border: 1px solid #ddd;
      padding: 3px 10px;
      position: relative;
    }
    .blog .sidebar .search-form form input[type=text] {
      border: 0;
      padding: 4px;
      border-radius: 4px;
      width: calc(100% - 40px);
    }
    .blog .sidebar .search-form form button {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      border: 0;
      background: none;
      font-size: 16px;
      padding: 0 15px;
      margin: -1px;
      background: {{ $global_settings->secondary_color }};
      color: #fff;
      transition: 0.3s;
      border-radius: 0 4px 4px 0;
      line-height: 0;
    }
    .blog .sidebar .search-form form button i {
      line-height: 0;
    }
    .blog .sidebar .search-form form button:hover {
      background: {{ $global_settings->primary_color }};
    }
    .blog .sidebar .categories ul {
      list-style: none;
      padding: 0;
    }
    .blog .sidebar .categories ul li + li {
      padding-top: 10px;
    }
    .blog .sidebar .categories ul a {
      color: #473d3a;
      transition: 0.3s;
    }
    .blog .sidebar .categories ul a:hover {
      color: {{ $global_settings->primary_color }};
    }
    .blog .sidebar .categories ul a span {
      padding-left: 5px;
      color: #989595;
      font-size: 14px;
    }
    .blog .sidebar .recent-posts .post-item + .post-item {
      margin-top: 15px;
    }
    .blog .sidebar .recent-posts img {
      width: 80px;
      float: left;
    }
    .blog .sidebar .recent-posts h4 {
      font-size: 15px;
      margin-left: 95px;
      font-weight: bold;
    }
    .blog .sidebar .recent-posts h4 a {
      color: #473d3a;
      transition: 0.3s;
    }
    .blog .sidebar .recent-posts h4 a:hover {
      color: #ff5821;
    }
    .blog .sidebar .recent-posts time {
      display: block;
      margin-left: 95px;
      font-style: italic;
      font-size: 14px;
      color: #989595;
    }
    .blog .sidebar .tags {
      margin-bottom: -10px;
    }
    .blog .sidebar .tags ul {
      list-style: none;
      padding: 0;
    }
    .blog .sidebar .tags ul li {
      display: inline-block;
    }
    .blog .sidebar .tags ul a {
      color: #8d7973;
      font-size: 14px;
      padding: 6px 14px;
      margin: 0 6px 8px 0;
      border: 1px solid #f4f2f2;
      display: inline-block;
      transition: 0.3s;
    }
    .blog .sidebar .tags ul a:hover {
      color: #fff;
      border: 1px solid #ff5821;
      background: #ff5821;
    }
    .blog .sidebar .tags ul a span {
      padding-left: 5px;
      color: #ddd7d6;
      font-size: 14px;
    }

    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    #footer {
      color: #313030;
      font-size: 14px;
      background: #fff;
    }
    #footer .footer-top {
      padding: 60px 0 30px 0;
      background: #fff9f7;
    }
    #footer .footer-top .footer-contact {
      margin-bottom: 30px;
    }
    #footer .footer-top .footer-contact h4 {
      font-size: 22px;
      margin: 0 0 30px 0;
      padding: 2px 0 2px 0;
      line-height: 1;
      font-weight: 700;
    }
    #footer .footer-top .footer-contact p {
      font-size: 14px;
      line-height: 24px;
      margin-bottom: 0;
      font-family: "Raleway", sans-serif;
      color: #656262;
    }
    #footer .footer-top h4 {
      font-size: 16px;
      font-weight: bold;
      color: #313030;
      position: relative;
      padding-bottom: 12px;
    }
    #footer .footer-top .footer-links {
      margin-bottom: 30px;
    }
    #footer .footer-top .footer-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    #footer .footer-top .footer-links ul i {
      padding-right: 2px;
      color: #ffa587;
      font-size: 18px;
      line-height: 1;
    }
    #footer .footer-top .footer-links ul li {
      padding: 10px 0;
      display: flex;
      align-items: center;
    }
    #footer .footer-top .footer-links ul li:first-child {
      padding-top: 0;
    }
    #footer .footer-top .footer-links ul a {
      color: #656262;
      transition: 0.3s;
      display: inline-block;
      line-height: 1;
    }
    #footer .footer-top .footer-links ul a:hover {
      text-decoration: none;
      color: {{ $global_settings->primary_color }};
    }
    #footer .footer-newsletter {
      font-size: 15px;
    }
    #footer .footer-newsletter h4 {
      font-size: 16px;
      font-weight: bold;
      color: #313030;
      position: relative;
      padding-bottom: 12px;
    }
    #footer .footer-newsletter form {
      margin-top: 30px;
      background: #fff;
      padding: 6px 10px;
      position: relative;
      border-radius: 50px;
      text-align: left;
      border: 1px solid #ffe2d9;
    }
    #footer .footer-newsletter form input[type=email] {
      border: 0;
      padding: 4px 8px;
      width: calc(100% - 100px);
    }
    #footer .footer-newsletter form input[type=submit] {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      border: 0;
      background: none;
      font-size: 16px;
      padding: 0 20px;
      background: {{ $global_settings->secondary_color }};
      color: #fff;
      transition: 0.3s;
      border-radius: 50px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }
    #footer .footer-newsletter form input[type=submit]:hover {
      background: {{ $global_settings->primary_color }};
    }
    #footer .credits {
      padding-top: 5px;
      font-size: 13px;
      color: #313030;
    }
    #footer .social-links a {
      font-size: 18px;
      display: inline-block;
      background: {{ $global_settings->primary_color }};
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }
    #footer .social-links a:hover {
      background: {{ $global_settings->secondary_color }};
      color: #fff;
      text-decoration: none;
    }
    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
      width: 100%;
      height: 60vh;
      /* background: url("../asset/img/hero-bg.jpg") center center; */
      background: url({{ Storage::exists('public/' . $global_settings->page_banner) && $global_settings->page_banner ? Storage::url($global_settings->page_banner) : asset('asset/img/hero-bg.jpg') }}) center center;
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
      font-size: {{ $global_settings->font_size_title }}px;
      font-weight: 700;
      line-height: 56px;
      color: #fff;
    }
    #hero h2 {
      color: #eee;
      margin-bottom: 50px;
      font-size: {{ $global_settings->font_size_subtitle }}px;
    }
    #hero .get-started-icon {
      font-size: 24px;
      background: {{ $global_settings->primary_color }};
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
      background: {{ $global_settings->secondary_color }};
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
      color: {{ $global_settings->primary_color }};
      font-size: 32px;
    }
    .about .icon-box:hover .icon {
      background: {{ $global_settings->primary_color }};
      border-color: {{ $global_settings->primary_color }};
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
      color: {{ $global_settings->primary_color }};
    }
    .about .icon-box .description {
      margin-left: 85px;
      line-height: 24px;
      font-size: 14px;
    }
    .about .video-box {
      /* background: url("../asset/img/about-img.jpg") center center no-repeat; */
      background: url({{ Storage::exists('public/' . $global_settings->page_banner_about) && $global_settings->page_banner_about ? Storage::url($global_settings->page_banner_about) : asset('asset/img/about-img.jpg') }}) no-repeat;
      background-size: cover;
      min-height: 500px;
    }
    .about .play-btn {
      width: 94px;
      height: 94px;
      background: radial-gradient({{ $global_settings->primary_color }} 50%, rgba(128, 128, 128, 0.4) 52%);
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
      /* border: 5px solid rgba(255, 88, 33, 0.7); */
      border: 5px solid {{ $global_settings->primary_color }};
      top: -15%;
      left: -15%;
      background: rgba(198, 16, 0, 0);
    }
    .about .play-btn:hover::after {
      border-left: 15px solid {{ $global_settings->primary_color }};
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
      /* background: url("../asset/img/testimonials-bg.jpg") no-repeat; */
      background: url({{ Storage::exists('public/' . $global_settings->page_banner_testimonials) && $global_settings->page_banner_testimonials ? Storage::url($global_settings->page_banner_testimonials) : asset('asset/img/testimonials-bg.jpg') }}) no-repeat;
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
      background-color: {{ $global_settings->primary_color }};
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
    </div>
  </section>

  <!-- ======= Header ======= -->
  @include('pages.users.layouts.navbar')
  <!-- End Header -->

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
      <div class="primary-color social-links text-center text-lg-right pt-3 pt-lg-0">
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
  <script src="{{ asset('vendor/bootstrap/jss/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>