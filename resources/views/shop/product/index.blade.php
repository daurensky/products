@extends('layout.shop')

@section('content')
    <section>
        <div class="container">
            <h1>Добро пожаловать {{ auth()->user()->name }}!</h1>
        </div>
    </section>
@endsection