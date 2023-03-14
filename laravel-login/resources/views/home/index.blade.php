@extends('layouts.app-master')
@section('content')
    <h1>Home</h1>
    @auth
        <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }}, estas autenticado ala pagina</p>
        <p>
            <a href="/logout">Salir</a>
        </p>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">inicia sesión</a></p>
    @endguest
@endsection
