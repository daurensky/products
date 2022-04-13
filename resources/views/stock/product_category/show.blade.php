@extends('layout.stock')

@section('content')
    <h2 class="mb-3">{{ $category->title }}</h2>

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
{{--                    <a href="{{ route('product.show', [$category->id]) }}" class="btn btn-primary">--}}
{{--                        {{ __('action.open') }}--}}
{{--                    </a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
@endsection