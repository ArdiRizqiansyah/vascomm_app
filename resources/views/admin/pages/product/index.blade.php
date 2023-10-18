@extends('admin.layouts.app')

@section('content')
    @include('partials.active')

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
                        <th colspan="2" class="text-start">Aktif</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $key => $product)
                        <tr>
                            <td>{{ $products->firstItem() + $key }}</td>
                            <td>
                                <div class="avatar">
                                    <img src="{{ $product->image }}" class="avatar" alt="product image">
                                    <span>{{ $product->name }}</span>
                                </div>
                            </td>
                            <td>{{ $product->formatCreatedDate }}</td>
                            <td class="text-black fw-medium">{{ $product->formatPrice }}</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="active" role="button"
                                        id="active-{{ $product->id }}" {{ $product->is_active ? 'checked' : '' }} 
                                        onclick="active({{ $product->id }}, 'products')">
                                </div>
                            </div>
                            </td>
                            <td>
                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-warning rounded-circle">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-danger rounded-circle btn-delete-product"
                                    data-url="{{ route('admin.product.destroy', $product->id) }}"
                                    data-item-name="{{ $product->name }}">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="6">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="my-3">
                <x-paginate :paginate="$products" />
            </div>
        </div>
    </div>

    @push('modal')
        <x-partials.delete
            item="Produk"
            modalId="deleteModalProduct"
            formId="formDeleteModalProduct"
            buttonDelete="btn-delete-product"
        />
    @endpush
@endsection