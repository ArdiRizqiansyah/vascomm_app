<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading d-flex flex-nowrap align-items-center gap-2 p-4">
        <img src="{{ asset('assets/images/logo.svg') }}" height="30px" alt="">
        {{-- <div>
            <h5 class="text-md fw-bold text-nowrap mb-1">Badan Latihan Kerja</h5>
            <p class="text-xs text-nowrap mb-0">Prov. Kalimantan Selatan</p>
        </div> --}}
    </div>
    <div class="sidebar">

        <a class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <x-icons.heroicons icon="home-outline" />
            Dashboard
        </a>
        <a class="sidebar-item {{ request()->routeIs('admin.user.*') ? 'active' : '' }}" href="{{ route('admin.user.index') }}">
            <x-icons.heroicons icon="user-outline" />
            Manajemen User
        </a>
        <a class="sidebar-item {{ request()->routeIs('admin.product.*') ? 'active' : '' }}" href="{{ route('admin.product.index') }}">
            <x-icons.heroicons icon="bookmark-square-outline" />
            Manajamen Produk
        </a>
    </div>
</div>