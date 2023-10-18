@extends('public.layouts.app')

@section('content')
    @include('partials.slick')

    <div class="container py-3">
        {{-- carousel --}}
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/banner.svg') }}" class="d-block w-100" alt="Banner Photo">
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/banner.svg') }}" class="d-block w-100" alt="Banner Photo">
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/banner.svg') }}" class="d-block w-100" alt="Banner Photo">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- end carousel --}}

        {{-- latest product --}}
        <div class="my-3">
            <h5 class="text-xl fw-bold mb-3">Terbaru</h5>
            {{-- jika tidak ada $newProduct --}}
            @if (!@$newProducts)
                <div class="alert alert-info">
                    Belum ada produk terbaru
                </div>
            @else
                <div class="slider-multiple-items">
                    @foreach ($newProducts as $newProduct)
                        <div >
                            <div class="card border-0 card-product">
                                <img src="{{ $newProduct->image }}" class="card-img-top" alt="Prouct Image">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">{{ $newProduct->name }}</h6>
                                    <p class="card-text text-primary-app">{{ $newProduct->formatIdrPrice }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        {{-- end latest product --}}

        {{-- list product --}}
        <div class="my-3">
            <h5 class="text-xl fw-bold mb-3">Produk Tersedia</h5>

            <div class="row gap-5" id="content-product">
                @forelse ($products as $product)
                    <div class="col-lg-2">
                        <div class="card border-0 card-product">
                            <img src="{{ $product->image }}" class="card-img-top" alt="Prouct Image">
                            <div class="card-body">
                                <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                                <p class="card-text text-primary-app">{{ $product->formatIdrPrice }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="alert alert-info">
                            Belum ada produk tersedia
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="my-3">
                <x-paginate :paginate="$products" />
            </div>
        </div>
        {{-- end list product --}}
    </div>

    @push('after-scripts')
        <script>
            $(document).ready(function() {
                $('.slider-multiple-items').slick({
                    infinite: true,
                    // speed: 300,
                    autoplay: true,
                    slidesToShow: 5,
                    slidesToScroll: 5,
                });
            });
        </script>
    @endpush
@endsection
