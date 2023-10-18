{{-- ! perhatian saat menggunakan component ini harap untuk meng include "partials.dropify" --}}

@props(['name', 'id' => $name, 'class', 'attribute' => '', 'multiple', 'height' => 200, 'defaultFile'])

<input type="file" id="{{ @$id }}" name="{{ @$name }}" class="dropify"
    data-height="{{ @$height }}" data-default-file="{{ @$defaultFile }}"="" />
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror