<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <textarea
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            @if($required) required @endif
            class="form-control"
            rows="5"
    >{{ old($name, $value) }}</textarea>
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>