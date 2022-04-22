@extends('layout.operator')

@section('content')
    <h1>{{ __('operator.shop.create') }}</h1>

    <hr>

    <form action="{{ route('operator.shop.store') }}" method="post" class="p-3">
        @csrf

        <x-text-field name="name" required></x-text-field>
        <x-text-field name="street" required></x-text-field>
        <x-text-field name="house" required type="number"></x-text-field>
        <div class="mb-3">
            <label for="place_id" class="form-label">{{ __('operator.shop.place') }}</label>
            <select name="place_id" id="place_id" class="form-select" required>
                <option value="">{{ __('form.nothing_selected') }}</option>
                @foreach($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">{{ __('action.add') }}</button>
    </form>
@endsection