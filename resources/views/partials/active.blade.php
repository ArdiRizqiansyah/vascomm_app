@push('after-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function active(id, table) {
            // toach alert 
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                width: 400,
                timerProgressBar: true,
            })
            $.ajax({
                    type: "post",
                    url: "{{ route('admin.active') }}",
                    data: {
                        '_token': `{{ csrf_token() }}`,
                        'id': id,
                        'table': table,
                        'status': $(`#active-${id}`).is(':checked') ? 1 : 0,
                    },
                    success: function(data) {
                        if (data == 1) {
                            return Toast.fire({
                                icon: 'success',
                                title: 'Data Berhasil di aktifkan'
                            })
                        }else if(data == 0) {
                            return Toast.fire({
                                icon: 'success',
                                title: 'Data Berhasil di nonaktifkan'
                            })
                        } else {
                            return Toast.fire({
                                icon: 'error',
                                title: 'Data Gagal di aktifkan'
                            })
                        }
                    }
                }
            )
        }
    </script>
@endpush
