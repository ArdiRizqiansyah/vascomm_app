@extends('public.layouts.app')

@section('content')
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

            <div class="row gap-5">
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end latest product --}}

        {{-- list product --}}
        <div class="my-3">
            <h5 class="text-xl fw-bold mb-3">Produk Tersedia</h5>

            <div class="row gap-5">
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card border-0 card-product">
                        <img src="{{ asset('assets/images/product.png') }}" class="card-img-top" alt="Prouct Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Eudia</h6>
                            <p class="card-text text-primary-app">IDR x.xx.980</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3">
                <button type="button" class="btn btn-outline-primary-app">
                    Lihat lebih banyak
                </button>
            </div>
        </div>
        {{-- end list product --}}
    </div>
@endsection
