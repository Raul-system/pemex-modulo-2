@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Error 404</h1>
@stop

@section('content')
        <div class="bg-dark" style="height: 80vh;">
            <div class="py-5">
                <p class="text-center font-weight-bold h2 text-white">La Página que esta intentando buscar no se encuentra disponible o no hemos
                    encontrado resultados a su búsqueda
                </p>
                <section class="container d-flex justify-content-center my-3">
                    <a href="{{ route('home.index') }}" class="btn btn-success btn-lg text-white">Ir a Inicio</a>
                </section>
            </div>
        </div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log(`Favor de no tocar esta herramienta para desarrolladores informaticos`);
    </script>
@stop