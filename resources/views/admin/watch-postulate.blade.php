@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Consultar Informacion de un Candidato/Postulado </h1>
@stop

@section('content')
        <div class="container-fluid">
            <x-list-postulates-masive :listmodeluser="$postulateRegistro"></x-list-postulates-masive>
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