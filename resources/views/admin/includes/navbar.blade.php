<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 mb-md-5 border-bottom">
    <div class="container px-md-5">
        <span id="sidebarToggle" type=button class="navbar-toggler-icon"></span>
        <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                {{-- <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li> --}}
                <li class="nav-item dropdown">
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
                                <img src="{{ auth()->user()->photo }}" class="rounded-circle" height="41px" width="41px"
                                alt="User Photo">
                                <p class="text-lg mb-0">{{ auth()->user()->name }}</p>
                                <p class="text-xs mb-0">{{ auth()->user()->email }}</p>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a type="button" class="dropdown-item text-center text-danger"
                                onclick="event.preventDefault(); 
                                this.closest('form').submit();"
                                >
                                <i class="fas fa-power-off"></i>
                                Keluar
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
