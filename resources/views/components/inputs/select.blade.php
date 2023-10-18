@props([
        'name',
        'id' => $name,
        'attribute' => '',
        'class',
    ])

<select name="{{ $name }}" id="{{ $id }}" class="{{ @$class ?: 'form-select' }} @error($name) is-invalid @enderror" {{ $attribute }}>
   {{ $slot }}
</select>
@error($name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror
