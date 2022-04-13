@extends('layout.base')

@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <form action="/login" method="post" class="w-50">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('form.email') }}</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', '') }}"
                       required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('form.password') }}</label>
                <input type="password" class="form-control" name="password" id="password" required>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{ __('action.enter') }}</button>
        </form>
    </div>
@endsection