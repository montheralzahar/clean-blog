@props(['label'=>'', 'name', 'placeholder' => '', 'type' => 'text'])
<input class="form-control @error("$name") is-invalid @enderror" id="{{ $name }}" type="{{ $type }}"
    placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ old($name) }}" />
@if ($label)
    <label for="{{ $name }}">{{ $label }}</label>
@endif
@error("$name")
    <div><small class="text-danger">{{ $message }}</small></div>
@enderror
