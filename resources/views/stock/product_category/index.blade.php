@extends('layout.stock')

@section('content')
    <h2 class="mb-3">{{ __('menu.product_categories') }}</h2>

    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>{{ __('stock.title') }}</th>
            <th>{{ __('stock.product.count') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key => $category)
            <tr>
                <td>{{ $categories->firstItem() + $key }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->products->count() }}</td>
                <td>
                    <a href="{{ route('product_category.show', [$category->id]) }}" class="btn btn-primary">
                        {{ __('action.open') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection