@props(['name', 'id' => $name, 'class', 'placeholder' => '&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;', 'attribute' => '', 'value'])

<div class="input-group">
  <input type="password" id="{{ $id }}" name="{{ $name }}" value="{{ old($name, @$value) }}" 
        class="{{ @$class ?: 'form-control' }}  @error($name) is-invalid @enderror" placeholder="{!! $placeholder !!}"
        {{ $attribute }}>
    <span class="input-group-text bg-white @error($name) is-invalid @enderror" type="button" id="icon-{{ $id }}">
        <i class="far fa-eye-slash"></i>
    </span>
</div>
@error($name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

@push('after-scripts')
    <script>
        // buat event untuk mengubah type input password menggunakan jquery
        $(document).on('click', '#icon-{{ $id }}', function() {
            let input = $('#{{ $id }}');
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
                this.innerHTML = `<i class="far fa-eye"></i>`;
            } else {
                input.attr('type', 'password');
                this.innerHTML = `<i class="far fa-eye-slash"></i>`;
            }
        });
    </script>
@endpush
