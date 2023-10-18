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
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary-app">
                        Masuk
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-primary-app">
                        Daftar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
