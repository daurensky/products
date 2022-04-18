@extends('layout.stock')

@section('content')
    <h1>{{ $productCategory->title }}</h1>

    <hr>

    <form action="{{ route('stock.product-category.update', $productCategory) }}" method="post" class="p-3">
        @csrf
        @method('put')

        <x-text-field name="title_ru" required value="{{ $productCategory->title_ru }}"></x-text-field>
        <x-text-field name="title_kz" required value="{{ $productCategory->title_kz }}"></x-text-field>

        <button class="btn btn-success">{{ __('action.save') }}</button>
    </form>
@endsection