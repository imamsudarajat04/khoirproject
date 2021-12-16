@extends('pages.users.layouts.master')

@section('index','active')
@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
  
          <div class="row">
            <div class="col-xl-4 col-lg-5" data-aos="fade-up">
              <div class="content">
                <h3>Why Choose Flexor for your company website?</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                  <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-7 d-flex">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Corporis voluptates sit</h4>
                      <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Ullamco laboris ladore pan</h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Labore consequatur</h4>
                      <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- End Why Us Section -->
  
      <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">
  
          <div class="row">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
              <a href="{{ $abouts->link_youtube }}" class="glightbox play-btn mb-4"></a>
            </div>
  
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <h4 data-aos="fade-up">About us</h4>
              <h3 data-aos="fade-up">{{ $abouts->title }}</h3>
              <p data-aos="fade-up">{{ $abouts->subtitle }}</p>
  
              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="{{ $abouts->icon_point_one }}"></i></div>
                <h4 class="title"><a href="">{{ $abouts->title_point_one }}</a></h4>
                <p class="description">{{ $abouts->subtitle_point_one }}</p>
              </div>
  
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="{{ $abouts->icon_point_two }}"></i></div>
                <h4 class="title"><a href="">{{ $abouts->title_point_two }}</a></h4>
                <p class="description">{{ $abouts->subtitle_point_two }}</p>
              </div>
  
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="{{ $abouts->icon_point_three }}"></i></div>
                <h4 class="title"><a href="">{{ $abouts->title_point_three }}</a></h4>
                <p class="description">{{ $abouts->subtitle_point_three }}</p>
              </div>
  
            </div>
          </div>
  
        </div>
    </section><!-- End About Section -->
  
      <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
  
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="asset/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="asset/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
    </section><!-- End Clients Section -->
  
      <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
            @if ($global_settings->subtitle_services == "")
              <p>Tidak Ada Subtitle</p>
            @else
              <p>{{ $global_settings->subtitle_services }}</p>
            @endif
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- End Services Section -->
  
      <!-- ======= Values Section ======= -->
    <section id="values" class="values">
        <div class="container">
  
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card" style="background-image: url(asset/img/values-1.jpg);">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Mission</a></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
              <div class="card" style="background-image: url(asset/img/values-2.jpg);">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Plan</a></h5>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card" style="background-image: url(asset/img/values-3.jpg);">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Vision</a></h5>
                  <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card" style="background-image: url(asset/img/values-4.jpg);">
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Care</a></h5>
                  <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- End Values Section -->
  
      <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container position-relative" data-aos="fade-up">
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              @foreach ($testimonis as $testimoni)
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ Storage::exists('public/' . $testimoni->avatar) && $testimoni->avatar ? Storage::url($testimoni->avatar) : asset('asset/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="{{ $testimoni->name }}">
                    <h3>{{ $testimoni->name }}</h3>
                    <h4>{{ $testimoni->position }}</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      {{ $testimoni->description }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
              @endforeach 
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
    </section><!-- End Testimonials Section -->
  
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Team</h2>
            @if ($global_settings->subtitle_team == "")
              <p data-aos="fade-up">Tidak Ada Subtitle</p>
            @else
              <p data-aos="fade-up">{{ $global_settings->subtitle_team }}</p>
            @endif
          </div>
  
          <div class="row">
            @foreach ($teams as $team)    
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="member">
                  <div class="member-img">
                    <img src="{{ Storage::exists('public/' . $team->avatar) && $team->avatar ? Storage::url($team->avatar) : asset('asset/img/team/team-1.jpg') }}" class="img-fluid" alt="{{ $team->name }}">
                    <div class="social">
                      <a href="{{ $team->twitter_link }}"><i class="bi bi-twitter"></i></a>
                      <a href="{{ $team->facebook_link }}"><i class="bi bi-facebook"></i></a>
                      <a href="{{ $team->instagram_link }}"><i class="bi bi-instagram"></i></a>
                      <a href="{{ $team->linkedin_link }}"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $team->name }}</h4>
                    <span>{{ $team->devision_name }}</span>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
  
        </div>
    </section><!-- End Team Section -->
  
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">F.A.Q</h2>
            @if ($global_settings->subtitle_faq == "")
              <p data-aos="fade-up">Tidak Ada Subtitle</p>  
            @else
              <p data-aos="fade-up">{{ $global_settings->subtitle_faq }}</p>
            @endif
          </div>
  
          <div class="faq-list">
            <ul>
              @foreach ($faqs as $faq)    
                <li data-aos="fade-up">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{ $faq->id }}" class="collapsed">{{ $faq->question }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      {{ $faq->answer }}
                    </p>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
  
        </div>
    </section><!-- End F.A.Q Section -->
  
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Contact</h2>
            @if ($global_settings->subtitle_contact == "")
              <p data-aos="fade-up">Tidak Ada Subtitle</p>
            @else
              <p data-aos="fade-up">{{ $global_settings->subtitle_contact }}</p>
            @endif
          </div>
  
          <div class="row justify-content-center">
  
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Alamat</h3>
                <p>{!! $footer_settings->footer_address !!}</p>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>{!! $footer_settings->footer_email !!}</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Hubungi</h3>
                <p>{!! $footer_settings->footer_phone !!}</p>
              </div>
            </div>
          </div>
  
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-xl-9 col-lg-12 mt-4">
              <form action="" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
    </section><!-- End Contact Section -->
@endsection