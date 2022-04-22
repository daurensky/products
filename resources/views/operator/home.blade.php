@extends('layout.operator')

@section('content')
    <h1>{{ __('literal.welcome') }} {{ auth()->user()->name }}!</h1>
@endsection