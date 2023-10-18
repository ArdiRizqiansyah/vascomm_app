@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
            <h5 class="text-lg mb-0">Manajemen user</h5>
            <button class="btn btn-primary-app" data-bs-toggle="modal" data-bs-target="#userModal">
                Tambah User
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th colspan="2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-medium">1</td>
                        <td class="fw-medium">Aden</td>
                        <td class="fw-medium">Aden@gmail.com</td>
                        <td class="fw-medium">0812345678</td>
                        <td>
                            <span class="badge text-bg-success rounded-pill px-3">
                                Aktif
                            </span>
                        </td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-success rounded-circle">
                                <i class="far fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-warning rounded-circle">
                                <i class="far fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @push('modal')
            <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="d-flex align-items-center border-0 p-3">
                            <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <x-inputs.text name="name" placeholder="Masukkan nama" />
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <x-inputs.text name="phone" placeholder="Masukkan nomor telepon" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <x-inputs.text type="email" name="email" placeholder="Masukkan email" />
                                </div>

                                <div class="d-grid">
                                    <x-buttons.save />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endpush
    </div>
@endsection
