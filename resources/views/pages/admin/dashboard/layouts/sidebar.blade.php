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
    
    <!-- Nav Item - Data Devisi -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-user-friends"></i>
            <span>Data Devisi</span>
        </a>
    </li>
    
    <!-- Nav Item - Data Team -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-user-friends"></i>
            <span>Data Team</span>
        </a>
    </li>

    <!-- Nav Item - Data Akun -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-users"></i>
            <span>Data Akun</span>
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
                <a class="collapse-item" href="#">Header Setting</a>
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