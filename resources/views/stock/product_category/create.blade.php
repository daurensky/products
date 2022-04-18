@extends('layout.stock')

@section('content')
    <h1>{{ __('stock.product_category.create') }}</h1>

    <hr>

    <form action="{{ route('stock.product-category.store') }}" method="post" class="p-3">
        @csrf

        <x-text-field name="title_ru" required></x-text-field>
        <x-text-field name="title_kz" required></x-text-field>

        <button class="btn btn-primary">{{ __('action.add') }}</button>
    </form>
@endsection