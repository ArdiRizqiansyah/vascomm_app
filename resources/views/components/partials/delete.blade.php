<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary-app justify-content-center p-0" style="border-bottom-left-radius: 45%; border-bottom-right-radius: 45%;">
                <div class="p-2 d-inline-block rounded-circle position-relative bg-danger" style="top: 30px;">
                    <div class="icon-wrapper rounded-circle text-white text-center">
                        {{-- <div class="icon-wrapper-bg" style="background-color: #FEE4E2;"></div> --}}
                        <i class="fas fa-toggle-off"></i>
                    </div>
                </div>
            </div>
            <div class="modal-body px-4 pt-5">
                <div class="text-center">
                    <h5 class="fw-bold mb-2">Konfirmasi Hapus</h5>
                    <p class="text-muted">
                        {{ @$message ?? 'Yakin ingin menghapus' }} <span id="item-name"></span> ?
                    </p>
                </div>

                <form action="" id="{{ $formId }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="d-flex justify-content-end gap-3">
                        <button type="button" class="btn btn-outline-secondary fw-medium" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary-app fw-medium">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('after-scripts')
<script>
    $(document).ready(function () {
        $('.{{ $buttonDelete }}').on('click', function (e) {
            e.preventDefault();
            let url = $(this).data('url');
            let itemName = $(this).data('item-name');

            $('#{{ $formId }}').attr('action', url);
            $('#item-name').text(itemName);
            $('#{{ $modalId }}').modal('show');
        });
    });
</script>
@endpush
