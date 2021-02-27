@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Formulario de Registro</h1>
@stop

@section('content')
        <x-ver-candidato-departamento :modelouser="$candidato_informacion" departamento-storage="files_integracion_regional"></x-ver-candidato-departamento>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log(`Favor de no tocar esta herramienta para desarrolladores informaticos`);
    </script>
@stop