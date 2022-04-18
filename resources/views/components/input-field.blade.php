<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            value="{{ old($name, $value) }}"
            @if($required) required @endif
            class="form-control"
            @if($type === 'number') step="{{ $step }}" @endif
    >
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>