@extends('admin.layouts.app')

@section('content')
    @include('partials.dropify')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
            <h5 class="text-lg mb-0">{{ $title }}</h5>
            <a href="{{ route('admin.product.index') }}" class="btn btn-warning">
                Kembali
            </a>
        </div>
        
        <div class="card">
            <div class="card-body">
                <form action="{{ $urlAction }}" method="POST" enctype="multipart/form-data">
                    @if (@$product)
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <x-inputs.text name="name" :value="@$product->name" placeholder="Masukkan nama produk" />
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Produk</label>
                        <x-inputs.text name="price" :value="@$product->price" placeholder="Masukkan harga produk" />
                    </div>
                    <div class="mb-3">
                        <label for="image">Gambar Produk</label>
                        <x-inputs.dropify name="image" :defaultFile="@$product->image" attribute="required" />
                    </div>
                    <div class="d-grid">
                        <x-buttons.save />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection