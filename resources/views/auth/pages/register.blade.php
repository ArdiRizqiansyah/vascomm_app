@extends('auth.layouts.app')

@section('content')
    <div class="container-fluid py-3 py-md-0 px-md-0">
        <div class="row align-items-center" style="height: 100vh">
            <div class="col-md-6 d-none d-md-block position-relative h-100">
                <div class="h-100" style="background-image: url('assets/images/bg_login.svg'); background-repeat: no-repeat; background-size: cover;"></div>
                <div class="text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <p class="text-4xl fw-bold">Vascom APP</p>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-block"></div>
            <div class="col-md-4">
                <div class="mb-3">
                    <p class="text-2xl fw-bold mb-1">Daftar Akun</p>
                    <p class="text-muted">
                        Silahkan masukkan nama, email, dan nomor telepon Anda untuk mulai menggunakan aplikasi
                    </p>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-muted">Nama</label>
                        <x-inputs.text name="name" placeholder="Masukkan nama anda" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-muted">Email</label>
                        <x-inputs.text name="email" type="email" placeholder="Masukkan email anda" />
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-muted">No Telepon</label>
                        <x-inputs.text name="phone" placeholder="Masukkan no telepon anda" />
                    </div>
                    <div class="d-grid mb-2">
                        <button type="submit" class="btn btn-primary-app py-2">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection