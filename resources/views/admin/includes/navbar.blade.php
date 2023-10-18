<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 mb-md-5 border-bottom">
    <div class="container px-md-5">
        <span id="sidebarToggle" type=button class="navbar-toggler-icon"></span>
        <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                {{-- <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{-- <img src="{{ auth()->user()->photo }}" class="rounded-circle" height="41px" width="41px" --}}
                        <img src="{{ asset('assets/images/default-image.png') }}" class="rounded-circle" height="41px" width="41px"
                            alt="User Photo">
                        <i class="fas fa-chevron-down me-2"></i>
                        {{-- Halo, {{ auth()->user()->name }} --}}
                        Halo,
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
            </ul>
        </div>
    </div>
</nav>
