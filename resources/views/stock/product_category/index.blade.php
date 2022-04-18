@extends('layout.stock')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>{{ __('menu.product_categories') }}</h1>

        <a href="{{ route('stock.product-category.create') }}" class="btn btn-primary">
            {{ __('action.add') }}
        </a>
    </div>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>{{ __('stock.product_category.title') }}</th>
            <th>{{ __('stock.product.count') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($productCategories as $key => $productCategory)
            <tr>
                <td>{{ $productCategories->firstItem() + $key }}</td>
                <td>{{ $productCategory->title }}</td>
                <td>{{ $productCategory->products->count() }}</td>
                <td>
                    <a href="{{ route('stock.product-category.show', [$productCategory->id]) }}"
                       class="btn btn-outline-primary">
                        {{ __('action.open') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $productCategories->links() }}
@endsection