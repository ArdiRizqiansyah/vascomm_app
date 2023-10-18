@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
            <h5 class="text-lg mb-0">Manajemen Produk</h5>
            <a href="{{ route('admin.product.create') }}" class="btn btn-primary-app">
                Tambah Produk
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Tanggal Dibuat</th>
                        <th>Harga (Rp)</th>
                        <th colspan="2" class="text-start">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="avatar">
                                <img src="{{ asset('assets/images/product.png') }}" class="avatar" alt="product image">
                                <span>Microsoft</span>
                            </div>
                        </td>
                        <td>12 mei 2023</td>
                        <td class="text-black fw-medium">Rp. 1000</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="active" role="button"
                                    id="active-1" {{ 0 ? 'checked' : '' }} 
                                    onclick="active(1, 'news')">
                            </div>
                        </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning rounded-circle">
                                <i class="far fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection