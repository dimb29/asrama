  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="/home" class="navbar-brand">
          <img src="{{asset('images/logo-poltekkes.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">ASRAMA POLKESMAR</span>
        </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <!-- <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
        </ul> -->

        <!-- SEARCH FORM -->
       <!--  <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form> -->
      </div>
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li> -->
          @endif
          @else
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="btn" href="{{url('/daft-pesan')}}">
            <i class="fas fa-shopping-cart"></i> Bukti Pemesanan
            <!-- <span class="badge badge-danger navbar-badge">3</span> -->
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" data-toggle="dropdown">
            <img src="{{asset('lte/dist/img/user2-160x160.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">Profil</span>
            <div class="dropdown-divider"></div>
              <!-- Sidebar user panel (optional) -->
              <div class="user-header text-center">
                <div class="image">
                  <img src="{{asset('lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-3 w-25" alt="User Image">
                </div>
                <p>
                  <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </p>
              </div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-footer">
              <a href="#" class="btn btn-primary btn-sm">Profil</a>
              <a class="btn btn-danger btn-sm"href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        @endguest
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->