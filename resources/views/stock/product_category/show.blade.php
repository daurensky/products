@extends('layout.stock')

@section('content')
    <h1>{{ $productCategory->title }}</h1>

    <hr>

    <div class="d-flex gap-1">
        <a href="{{ route('stock.product-category.edit', $productCategory) }}" class="btn btn-success">
            {{ __('action.edit') }}
        </a>

        <form action="{{ route('stock.product-category.destroy', $productCategory) }}" method="post">
            @csrf
            @method('delete')

            <button class="btn btn-danger">
                {{ __('action.destroy') }}
            </button>
        </form>
    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('form.title_ru') }}</b></div>
        <div class="col-sm-9">{{ $productCategory->title_ru }}</div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('form.title_kz') }}</b></div>
        <div class="col-sm-9">{{ $productCategory->title_kz }}</div>
    </div>

    @if($products->isNotEmpty())
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
                        <a href="{{ route('stock.product.show', [$product->id]) }}" class="btn btn-primary">
                            {{ __('action.open') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex align-items-center gap-3">
            <span>{{ __('stock.product.not_found') }}</span>
            <a href="" class="btn btn-primary">{{ __('action.add') }}</a>
        </div>
    @endif

    {{ $products->links() }}
@endsection