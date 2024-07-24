<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ route('/') }}"><img src="{{ asset('assets/admin/images/logo_star_black.png')}}" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('/') }}"><img src="{{ asset('assets/admin/images/logo_star_mini.jpg')}}"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block" action="{{ route('global_search') }}" method="GET">
          <input class="form-control mr-sm-2 search" type="text" name="query" placeholder="Search">
          <button type="submit" class="btn btn-warning">
            <i class="fas fa-search"></i>
          </button>
          <a href="{{ route('admin.index') }}">
            <i class="fas fa-xmark fa-2xl"></i>
        </a>
        
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="/"><img class="rounded-circle" src="{{ asset('assets/admin/images/1.png')}}" /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{ asset('assets/admin/images/1.png')}}" alt="">
            <p class="name">{{ Auth::user()->name }}</p>
            <p class="designation">{{ Auth::user()->role }}</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/admin">
                <img src="{{ asset('assets/admin/images/icons/1.png')}}" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{ asset('assets/admin/images/icons/003-file.png')}}" alt="">
                <span class="menu-title">Surat-Surat<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('sktm.index') }}">
                      SKTM
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('suratusaha.index') }}">
                     Surat Usaha
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('struktur.index') }}">
                <img src="{{ asset('assets/admin/images/icons/005-forms.png')}}" alt="">
                <span class="menu-title">Struktur Organisasi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{{ route('lembaga.index') }}}">
                <img src="{{ asset('assets/admin/images/icons/4.png')}}" alt="">
                <span class="menu-title">Lembaga Desa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('berita.index')}}">
                <img src="{{ asset('assets/admin/images/icons/5.png')}}" alt="">
                <span class="menu-title">Berita Desa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('agenda.index') }}">
                <img src="{{ asset('assets/admin/images/icons/005-calendar.png')}}" alt="">
                <span class="menu-title">Agenda</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('galeri.index') }}">
                <img src="{{ asset('assets/admin/images/icons/011-gallery.png')}}" alt="">
                <span class="menu-title">Galeri Desa</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.index') }}">
                <img src="{{ asset('assets/admin/images/icons/10.png')}}" alt="">
                <span class="menu-title">Daftar User</span>
              </a>
            </li>
           
            <li class="nav-item">
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <img src="{{ asset('assets/admin/images/icons/exclamation-mark.png')}}" alt="">
                      <span class="menu-title">Logout</span>
                  </a>
              </form>
          </li>
          </ul>
        </nav>
        