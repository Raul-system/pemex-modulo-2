@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Error 404</h1>
@stop

@section('content')
        <p class="text-center font-weight-bold h2">La Página que esta intentando buscar no se encuentra disponible o no hemos
            encontrado resultados a su búsqueda
        </p>
        <section class="container d-flex justify-content-center">
            <a href="{{ route('home.index') }}" class="btn btn-success btn-lg">Ir a Inicio</a>
        </section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log(`Favor de no tocar esta herramienta para desarrolladores informaticos`);
    </script>
@stop