<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="mx-md-auto mb-3 mb-md-0 w-50">
                <form action="" method="GET">
                    <div class="input-group flex-nowrap">
                        <input type="text" name="search" class="form-control border-end-0 bg-light"
                            placeholder="Cari parfum kesukaanmu" value="{{ @$_GET['search'] }}">
                        <span class="input-group-text bg-light border-start-0" id="addon-wrapping">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                    </div>
                </form>
            </div>
            <ul class="navbar-nav fw-semibold gap-2">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ auth()->user()->photo }}" class="rounded-circle" height="41px" width="41px"
                                alt="User Photo">
                            <i class="fas fa-chevron-down me-2"></i>
                            Halo, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="text-center">
                                    <img src="{{ auth()->user()->photo }}" class="rounded-circle" height="41px"
                                        width="41px" alt="User Photo">
                                    <p class="text-lg mb-0">{{ auth()->user()->name }}</p>
                                    <p class="text-xs mb-0">{{ auth()->user()->email }}</p>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a type="button" class="dropdown-item text-center text-danger"
                                    onclick="event.preventDefault(); 
                                this.closest('form').submit();">
                                    <i class="fas fa-power-off"></i>
                                    Keluar
                                </a>
                            </form>
                        </div>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary-app">
                            Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-primary-app">
                            Daftar
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
