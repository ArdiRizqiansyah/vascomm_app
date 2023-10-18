@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h5 class="text-lg">Dashboard</h5>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah User</p>
                        <h4 class="text-md">{{ @$totalUsers ?? 0 }} User</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah User Aktif</p>
                        <h4 class="text-md">{{ @$totalUsersActive ?? 0 }} User</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah Produk</p>
                        <h4 class="text-md">{{ @$totalProducts ?? 0 }} Produk</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah Produk Aktif</p>
                        <h4 class="text-md">{{ @$totalProductsActive ?? 0 }} Produk</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-blue">
                <thead class="table-light">
                    <tr>
                        <th>Produk</th>
                        <th>Tanggal Dibuat</th>
                        <th>Harga(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>
                                <div class="avatar">
                                    <img src="{{ $product->image }}" class="avatar" alt="product image">
                                    <span>{{ $product->name }}</span>
                                </div>
                            </td>
                            <td>{{ $product->formatCreatedDate }}</td>
                            <td class="text-black fw-medium">{{ $product->formatPrice }}</td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="3">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection