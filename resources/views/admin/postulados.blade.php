@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Lista de Postulados/Candidatos de la Empresa</h1>
@stop

@section('content')
        <p class="text-center font-weight-bold h6">Consultar informacion acerca de un postulado</p>
        <section class=" my-2">
            <x-search-control-web modelosearch="Postulate" routeshow="postulados.show"></x-search-control-web>
        </section>
        <div class="container-fluid">
            <x-list-results :listmodel="$postulates" routeWatchMore="postulados.show" :paginacion="$paginacion"></x-list-results>
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