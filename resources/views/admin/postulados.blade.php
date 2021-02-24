@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Lista de Postulados/Candidatos de la Empresa</h1>
@stop

@section('content')
        <p class="text-center font-weight-bold">Panel Principal</p>
        <div class="container-fluid">
            <x-list-postulates :listmodel="$postulates"></x-list-postulates>
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