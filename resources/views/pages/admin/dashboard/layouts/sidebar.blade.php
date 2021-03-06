<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href="{{ route('beranda.index') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    
    {{-- <!-- Nav Item - Data Devisi -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-user-friends"></i>
            <span>Devisi</span>
        </a>
    </li>
    
    <!-- Nav Item - Data Team -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-user-friends"></i>
            <span>Team</span>
        </a>
    </li>

    <!-- Nav Item - Data Akun -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-users"></i>
            <span>User</span>
        </a>
    </li> --}}

    <!-- Nav Item - Data Kategori -->
    <li class="nav-item @yield('kategori')">
        <a class="nav-link" href="{{ route('data-kategori.index') }}">
            <i class="fas fa-list"></i>
            <span>Kategori</span>
        </a>
    </li>

    <!-- Nav Item - Data Akun -->
    <li class="nav-item @yield('blog')">
        <a class="nav-link" href="{{ route('data-blog.index') }}">
            <i class="far fa-newspaper"></i>
            <span>Dokumentasi Kegiatan</span>
        </a>
    </li>

    
    <!-- Nav Item - Data -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Data</span>
        </a>
        <div id="collapseOne" class="collapse active" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @yield('dataDevisi')" href="{{ route('data-devisi.index') }}">Data Devisi</a>
                <a class="collapse-item @yield('dataTeam')" href="{{ route('data-team.index') }}">Data Team</a>
                <a class="collapse-item @yield('dataUser')" href="{{ route('data-user.index') }}">Data Akun</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - About Us -->
    <li class="nav-item @yield('about')">
        <a class="nav-link" href="{{ route('about-us.index') }}">
            <i class="fas fa-address-card"></i>
            <span>About Us</span>
        </a>
    </li>
    
    <!-- Nav Item - Testimoni -->
    <li class="nav-item @yield('testimoni')">
        <a class="nav-link" href="{{ route('testimoni.index') }}">
            <i class="fas fa-smile-beam"></i>
            <span>Testimoni</span>
        </a>
    </li>

    <!-- Nav Item - Faq -->
    <li class="nav-item @yield('faq')">
        <a class="nav-link" href="{{ route('faq.index') }}">
            <i class="fas fa-question"></i>
            <span>Faq</span>
        </a>
    </li>

    <!-- Nav Item - Faq -->
    <li class="nav-item @yield('client')">
        <a class="nav-link" href="{{ route('client-image.index') }}">
            <i class="fas fa-user-tie"></i>
            <span>Gambar Klien / Sponsor</span>
        </a>
    </li>
    
    <!-- Nav Item - Pengaturan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseTwo" class="collapse active" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @yield('header')" href="{{ route('header-setting.index') }}">Header Setting</a>
                <a class="collapse-item @yield('global')" href="{{ route('global-setting.index') }}">Global Setting</a>
                <a class="collapse-item @yield('footer')" href="{{ route('footer-setting.index') }}">Footer Setting</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>