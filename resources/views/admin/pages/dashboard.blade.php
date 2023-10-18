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
                        <h4 class="text-md">150 User</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah User</p>
                        <h4 class="text-md">150 User</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah User</p>
                        <h4 class="text-md">150 User</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-blue-gradient-app border-0">
                    <div class="card-body p-4">
                        <p class="text-muted mb-0">Jumlah User</p>
                        <h4 class="text-md">150 User</h4>
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
                    <tr>
                        <td>
                            <div class="avatar">
                                <img src="{{ asset('assets/images/product.png') }}" class="avatar" alt="product image">
                                <span>Microsoft</span>
                            </div>
                        </td>
                        <td>12 mei 2023</td>
                        <td class="text-black fw-medium">Rp. 1000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection