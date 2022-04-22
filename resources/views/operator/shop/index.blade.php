@extends('layout.operator')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>{{ __('menu.shops') }}</h1>
        <a href="{{ route('operator.shop.create') }}" class="btn btn-primary">{{ __('action.add') }}</a>
    </div>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>{{ __('operator.shop.name') }}</th>
            <th>{{ __('operator.shop.place') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($shops as $key => $shop)
            <tr>
                <td>{{ $shops->firstItem() + $key }}</td>
                <td>{{ $shop->name }}</td>
                <td>{{ $shop->place->name }}</td>
                <td>
                    <a href="{{ route('operator.shop.show', $shop) }}" class="btn btn-outline-primary">
                        {{ __('action.open') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $shops->links() }}
@endsection