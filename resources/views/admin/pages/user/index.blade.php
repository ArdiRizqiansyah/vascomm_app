@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 gap-3">
            <h5 class="text-lg mb-0">Manajemen user</h5>
            <button class="btn btn-primary-app" onclick="showModalCreate()">
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
                    @forelse ($users as $key => $user)
                        <tr>
                            <td class="fw-medium">{{ $users->firstItem() + $key}}</td>
                            <td class="fw-medium">{{ $user->name }}</td>
                            <td class="fw-medium">{{ $user->email }}</td>
                            <td class="fw-medium">{{ $user->phone ?? '-' }}</td>
                            <td>
                                <span class="badge {{ $user->is_active ? 'text-bg-success' : 'text-bg-danger' }} rounded-pill px-3">
                                    {{ $user->statusLabel }}
                                </span>
                            </td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-success rounded-circle"
                                    onclick="showModalDetail(`{{ route('admin.user.edit', $user->id) }}`)">
                                    <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-warning rounded-circle"
                                    onclick="showModalEdit(`{{ route('admin.user.edit', $user->id) }}`, `{{ route('admin.user.update', $user->id) }}`)">
                                    <i class="far fa-edit"></i>
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
        </div>

        <div class="my-3">
            <x-paginate :paginate="$users" />
        </div>

        @push('after-scripts')
            <script>
                // menampilkan modal create
                function showModalCreate(){
                    // ubah judul modal
                    $('#userModalLabel').text('Tambah User');

                    // ubah action form
                    $('#formUserModal').attr('action', '{{ route('admin.user.store') }}');

                    // ubah method form
                    $('#methodFormUserModal').val('post');

                    // reset form
                    $('#formUserModal').trigger('reset');

                    // tampilkan button submit modal
                    $('#button-submit-modal').removeClass('d-none');

                    // tampilkan modal
                    $('#userModal').modal('show');
                }

                // show modal detail
                function showModalDetail(route){
                    // ubah judul modal
                    $('#userModalLabel').text('Detail User');

                    // ubah action form
                    $('#formUserModal').attr('action', route);

                    // ubah method form
                    $('#methodFormUserModal').val('get');

                    // request data
                    $.ajax({
                        url: route,
                        method: 'get',
                        dataType: 'json',
                        success: function(response){
                            // ubah value form
                            $('#formUserModal').find('input[name="name"]').val(response.name);
                            $('#formUserModal').find('input[name="phone"]').val(response.phone);
                            $('#formUserModal').find('input[name="email"]').val(response.email);
                            $('#formUserModal').find('select[name="is_active"]').val(response.is_active);

                            // tambahakan kelas d-none pada button submit modal
                            $('#button-submit-modal').addClass('d-none');

                            // tampilkan modal
                            $('#userModal').modal('show');
                        }
                    });
                }

                // menampilkan modal edit
                function showModalEdit(routeEdit, routeUpdate){
                    // ubah judul modal
                    $('#userModalLabel').text('Edit Jurusan/Bidang');

                    // ubah action form
                    $('#formUserModal').attr('action', routeUpdate);

                    // ubah method form
                    $('#methodFormUserModal').val('put');

                    // request data
                    $.ajax({
                        url: routeEdit,
                        method: 'get',
                        dataType: 'json',
                        success: function(response){
                            // ubah value form
                            $('#formUserModal').find('input[name="name"]').val(response.name);
                            $('#formUserModal').find('input[name="phone"]').val(response.phone);
                            $('#formUserModal').find('input[name="email"]').val(response.email);
                            $('#formUserModal').find('select[name="is_active"]').val(response.is_active);

                            // tampilkan button submit modal
                            $('#button-submit-modal').removeClass('d-none');

                            // tampilkan modal
                            $('#userModal').modal('show');
                        }
                    });
                }
            </script>
        @endpush

        @push('modal')
            <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="d-flex align-items-center border-0 p-3">
                            <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formUserModal" action="" method="POST">
                                <input type="hidden" name="_method" id="methodFormUserModal" value="post">
                                @csrf
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
                                <div class="mb-3">
                                    <label for="is_active" class="form-label">Status</label>
                                    <x-inputs.select name="is_active">
                                        <option value="">Pilih Status</option>
                                        <option value="0">Tidak Aktif</option>
                                        <option value="1">Aktif</option>
                                    </x-inputs.select>
                                </div>

                                <div class="d-grid" id="button-submit-modal">
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
