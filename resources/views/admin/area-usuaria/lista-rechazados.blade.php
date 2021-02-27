@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Lista de Candidatos Rechazados</h1>
@stop

@section('content')
        <p class="text-center font-weight-bold">Panel Principal</p>
        @php
            $arreglo = [];
            if( is_null($arreglo)  ){
                echo "El valor es Nulo";
            }else{
                echo "El valor no es nulo";
            }
        @endphp
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log(`Favor de no tocar esta herramienta para desarrolladores informaticos`);
    </script>
@stop