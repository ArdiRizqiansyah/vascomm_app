@props([
    'class' => null,
    'title' => 'Simpan',
])

<button type="submit" class="{{ $class ?: 'btn btn-primary-app' }} btn-save">
    {{ $title }}
</button>

@push('after-scripts')
    <script>
        $(document).ready(function () {
            $('.btn-save').on('click', function (e) {
                // cek dulu apakah ada input required field yang kosong
                let requiredField = $('input[required], select[required], textarea[required]');
                let emptyField = true;
                requiredField.each(function(index, element) {
                    if ($(element).val() === '') {
                        emptyField = false;
                        return true;
                    }
                });

                // jika field sudah terisi semua, maka submit form dan berikan animasi loading
                if (emptyField) {
                    e.preventDefault();
                    // $(this).attr('disabled', true);
                    $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
                    $(this).closest('form').submit();
                }

            });
        });
    </script>
@endpush