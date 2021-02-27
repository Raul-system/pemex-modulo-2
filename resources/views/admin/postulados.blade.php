@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Lista de Postulados/Candidatos de la Empresa</h1>
@stop

@section('content')
        <p class="text-center font-weight-bold h6">Consultar informacion acerca de un postulado</p>
        <section class=" my-2">
            {{-- Recibo el Modelo y la ruta correspondiente del metodo show del controlador asociado al modelo --}}
            <x-search-control-web modelosearch="Postulate" routeshow="postulados.show" :campos="array(
                [
                    'text'=>'Nombre',
                    'value'=>'nombre'
                ],
                [
                    'text'=>'Ficha',
                    'value'=>'ficha'
                ],
                [
                    'text'=>'Plaza',
                    'value'=>'plaza'
                ],
                [
                    'text'=>'Numero de Expediente',
                    'value'=>'numero_expediente'
                ]
            )"></x-search-control-web>
        </section>
        <div class="container-fluid">
            <x-list-results :listmodel="$postulates" routeWatchMore="postulados.show" :paginacion="$paginacion" textBtnMore="Ver mas..."></x-list-results>
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