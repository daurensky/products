@extends('layout.stock')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>{{ __('menu.products') }}</h1>
        <a href="{{ route('stock.product.create') }}" class="btn btn-primary">{{ __('action.add') }}</a>
    </div>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>{{ __('stock.product.title') }}</th>
            <th>{{ __('stock.product.price') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $product)
            <tr>
                <td>{{ $products->firstItem() + $key }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('stock.product.show', [$product->id]) }}" class="btn btn-outline-primary">
                        {{ __('action.open') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
@endsection