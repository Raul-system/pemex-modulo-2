@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Formulario de Registro</h1>
@stop

@section('content')
        <p class="text-center font-weight-bold">Panel Principal</p>
        <x-list-results :listmodel='$candidatos_integracion_regional' routeWatchMore="integracion-regional.show" :paginacion="$paginacion" textBtnMore="Ver Documentos..."></x-list-results>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log(`Favor de no tocar esta herramienta para desarrolladores informaticos`);
    </script>
@stop