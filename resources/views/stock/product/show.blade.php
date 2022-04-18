@extends('layout.stock')

@section('content')
    <h1>{{ $product->title }}</h1>

    <hr>

    <div class="d-flex gap-1">
        <a href="{{ route('stock.product.edit', $product) }}" class="btn btn-success">
            {{ __('action.edit') }}
        </a>

        <form action="{{ route('stock.product.destroy', $product) }}" method="post">
            @csrf
            @method('delete')

            <button class="btn btn-danger">
                {{ __('action.destroy') }}
            </button>
        </form>
    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('literal.category') }}</b></div>
        <div class="col-sm-9">
            <a href="{{ route('stock.product-category.show', $product->category->id) }}">{{ $product->category->title }}</a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('literal.description') }}</b></div>
        <div class="col-sm-9">{{ $product->details }}</div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('literal.price') }}</b></div>
        <div class="col-sm-9">{{ $product->price }}</div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('literal.created_at') }}</b></div>
        <div class="col-sm-9">{{ $product->created_at }}</div>
    </div>
@endsection