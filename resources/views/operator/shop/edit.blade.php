@extends('layout.operator')

@section('content')
    <h1>{{ $shop->name }}</h1>

    <hr>

    <form action="{{ route('operator.shop.update', $shop) }}" method="post" class="p-3">
        @csrf
        @method('put')

        <x-text-field name="name" required value="{{ $shop->name }}"></x-text-field>
        <x-text-field name="street" required value="{{ $shop->street }}"></x-text-field>
        <x-text-field name="house" required type="number" value="{{ $shop->house }}"></x-text-field>
        <div class="mb-3">
            <label for="place_id" class="form-label">{{ __('operator.shop.place') }}</label>
            <select name="place_id" id="place_id" class="form-select" required>
                <option value="">{{ __('form.nothing_selected') }}</option>
                @foreach($places as $place)
                    <option value="{{ $place->id }}"
                            @if($place->id === $shop->place_id) selected @endif>{{ $place->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">{{ __('action.save') }}</button>
    </form>
@endsection