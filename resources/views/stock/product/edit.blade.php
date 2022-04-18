@extends('layout.stock')

@section('content')
    <h1>{{ $product->title }}</h1>

    <hr>

    <form action="{{ route('stock.product.update', $product) }}" method="post" class="p-3">
        @csrf
        @method('put')

        <x-text-field name="title_ru" required value="{{ $product->title_ru }}"></x-text-field>
        <x-text-field name="title_kz" required value="{{ $product->title_kz }}"></x-text-field>
        <x-text-field name="details" required long value="{{ $product->details }}"></x-text-field>
        <x-text-field name="price" required type="number" step="any" value="{{ $product->price }}"></x-text-field>
        <div class="mb-3">
            <label for="product_category_id" class="form-label">{{ __('stock.product.category') }}</label>
            <select name="product_category_id" id="product_category_id" class="form-select" required>
                <option value="">{{ __('form.nothing_selected') }}</option>
                @foreach($productCategories as $productCategory)
                    <option value="{{ $productCategory->id }}"
                            @if($productCategory->id === $product->product_category_id) selected @endif>
                        {{ $productCategory->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">{{ __('action.save') }}</button>
    </form>
@endsection