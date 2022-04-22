@extends('layout.operator')

@section('content')
    <h1>{{ $shop->name }}</h1>

    <hr>

    <div class="d-flex gap-1">
        <a href="{{ route('operator.shop.edit', $shop) }}" class="btn btn-success">
            {{ __('action.edit') }}
        </a>

        <form action="{{ route('operator.shop.destroy', $shop) }}" method="post">
            @csrf
            @method('delete')

            <button class="btn btn-danger">
                {{ __('action.destroy') }}
            </button>
        </form>
    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-sm-3"><b>{{ __('literal.address') }}</b></div>
        <div class="col-sm-9">
            {{ $shop->place->name }}, {{ $shop->street }} {{ $shop->house }}
        </div>
    </div>


@endsection