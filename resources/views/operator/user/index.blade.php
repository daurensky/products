@extends('layout.operator')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>{{ __('menu.users') }}</h1>
        <a href="{{ route('operator.user.create') }}" class="btn btn-primary">{{ __('action.add') }}</a>
    </div>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>{{ __('operator.user.name') }}</th>
            <th>{{ __('operator.user.type') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <td>{{ $users->firstItem() + $key }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ __("literal.user_type.{$user->type}") }}</td>
                <td>
                    <a href="{{ route('operator.user.show', $user) }}" class="btn btn-outline-primary">
                        {{ __('action.open') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
@endsection