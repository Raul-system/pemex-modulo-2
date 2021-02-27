@extends('adminlte::page')

@section('title', 'Resultados de Busqueda')

@section('content_header')
    <h1 class="text-center font-weight-bold">Resultados de la Busqueda</h1>
@stop

@section('content')
        <section class="container-fluid" title="Resultados de la Busqueda Actual">
            <x-list-results :listmodel="$listDB" :routeWatchMore="$routeConsult" :paginacion="$paginacion" textBtnMore="Ver Mas..."></x-list-results>
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