@extends('layout.base')

@section('content')
    <section>
        <div class="container">
            <h1>Добро пожаловать {{ auth()->user()->name }}!</h1>
            <a href="/logout">Выйти</a>
        </div>
    </section>
@endsection