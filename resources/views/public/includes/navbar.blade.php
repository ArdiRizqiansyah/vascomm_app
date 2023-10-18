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
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control border-end-0 bg-light" placeholder="Cari parfum kesukaanmu">
                    <span class="input-group-text bg-light border-start-0" id="addon-wrapping">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                </div>
            </div>
            <ul class="navbar-nav fw-semibold gap-2">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ auth()->user()->photo }}" class="rounded-circle" height="41px" width="41px" alt="User Photo">
                            <i class="fas fa-chevron-down me-2"></i>
                            Halo, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a type="button" class="dropdown-item"
                                    onclick="event.preventDefault(); 
                                        this.closest('form').submit();">{{ __('Log Out') }}</a>
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
