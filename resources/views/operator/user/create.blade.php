@extends('layout.operator')

@section('content')
    <h1>{{ __('operator.user.create') }}</h1>

    <hr>

    <form action="{{ route('operator.user.store') }}" method="post" class="p-3">
        @csrf

        <x-text-field name="name" required></x-text-field>
        <x-text-field name="email" required type="email"></x-text-field>
        <x-text-field name="password" required type="password"></x-text-field>
        <div class="mb-3">
            <label for="type" class="form-label">{{ __('operator.user.type') }}</label>
            <select name="type" id="type" class="form-select" required>
                <option value="">{{ __('form.nothing_selected') }}</option>
                @foreach($types as $type)
                    <option value="{{ $type }}">{{ __("literal.user_type.{$type}") }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">{{ __('action.add') }}</button>
    </form>
@endsection