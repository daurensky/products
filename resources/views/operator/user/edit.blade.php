@extends('layout.operator')

@section('content')
    <h1>{{ $user->name }}</h1>

    <hr>

    <form action="{{ route('operator.user.update', $user) }}" method="post" class="p-3">
        @csrf
        @method('put')

        <x-text-field name="name" required value="{{ $user->name }}"></x-text-field>
        <x-text-field name="email" required type="email" value="{{ $user->email }}"></x-text-field>
        <div class="mb-3">
            <label for="type" class="form-label">{{ __('operator.shop.place') }}</label>
            <select name="type" id="type" class="form-select" required>
                <option value="">{{ __('form.nothing_selected') }}</option>
                @foreach($types as $type)
                    <option value="{{ $type }}">{{ __("literal.user_type.{$type}") }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">{{ __('action.save') }}</button>
    </form>
@endsection