@props([
        'name',
        'id' => $name,
        'type' => 'text',
        'class',
        'placeholder' => 'Type here',
        'attribute' => '',
        'value',
    ])

<input type="{{ $type }}" class="{{ @$class ?: 'form-control' }}  @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $id }}" value="{{ old($name, @$value) }}" placeholder="{{ $placeholder }}" {{ @$attribute }}>
@error($name)
    <span class="invalid-feedback">
      {{ $message }}
    </span>
@enderror