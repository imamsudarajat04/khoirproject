<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1><a href="/">{{ $header_settings->header_name }}</a></h1> --}}
        <h1><a href="{{ route('index') }}">{{ $global_settings->navbar_title }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="/"><img src="asset/img/logo.png" alt="" class="img-fluid"></a> --}}
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          @if (Request::url() === 'blog')
            <li><a class="nav-link scrollto @yield('index')" href="#hero">Home</a></li>
          @else
            <li><a href="/">Home</a></li>
          @endif
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link @yield('blog')" href="{{ route('blog.index') }}">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Devisi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach ($devisions as $devision)
                  <li><a href="{{ route('devisi.show', $devision->slug) }}">{{ $devision->name }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @auth
          <li><a class="nav-link scrollto" href="{{ route('beranda.index') }}">Dashboard</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header>