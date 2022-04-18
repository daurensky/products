@extends('layout.stock')

@section('content')
    <h1>{{ __('stock.product.create') }}</h1>

    <hr>

    <form action="{{ route('stock.product.store') }}" method="post" class="p-3">
        @csrf

        <x-text-field name="title_ru" required></x-text-field>
        <x-text-field name="title_kz" required></x-text-field>
        <x-text-field name="details" required long></x-text-field>
        <x-text-field name="price" required type="number" step="any"></x-text-field>
        <div class="mb-3">
            <label for="product_category_id" class="form-label">{{ __('stock.product.category') }}</label>
            <select name="product_category_id" id="product_category_id" class="form-select" required>
                <option value="">{{ __('form.nothing_selected') }}</option>
                @foreach($productCategories as $productCategory)
                    <option value="{{ $productCategory->id }}">{{ $productCategory->title }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">{{ __('action.add') }}</button>
    </form>
@endsection