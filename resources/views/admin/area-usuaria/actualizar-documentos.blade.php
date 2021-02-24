@extends('adminlte::page')

@section('title', 'Area Usuaria')

@section('content_header')
    <h1 class="text-center font-weight-bold">Subir Documentos Del Candidato</h1>
@stop


@section('content')
<div title="instrucciones" class="container my-4 ">
    <p class="text-center font-weight-bold h2">Por favor siga las instrucciones</p>
    <p class="text-center font-weight-bold">1 .- Click en el boton Generar Reporte Pdf del Candidato, para descargar en Formato PDF</p>
    <p class="text-center font-weight-bold">2.- Lea bien y adjunte el memorandum y la obra determinada en Formato PDF, en cada uno de los botones presentes abajo</p>
    <p class="text-center font-weight-bold">Por ultimo de click en "guardar" para que los archivos del candidato pasen al departamento de Validacion de Integracion Regional </p>
</div>
      

<div class="container bg-primary my-4">
    <p class="text-center font-weight-bold h3">Datos centrales del Candidato:</p>
    <p class="text-center">Nombre: <strong>{{ $candidatoDocumentsUpdate->nombre }}</strong></p>
     <p class="text-center">Ficha del Candidato: <strong>{{ $candidatoDocumentsUpdate->ficha_candidato }}</strong></p>
    <p class="text-center">Formacion Profesional: <strong>{{ $candidatoDocumentsUpdate->formacion_profesional }}</strong></p>
    <p class="text-center">Motivo de la Contratacion: <strong>{{ $candidatoDocumentsUpdate->motivo_contratacion }}</strong></p>
    <p class="text-center">Motivo de la Vacante: <strong>{{ $candidatoDocumentsUpdate->motivo_vacante }}</strong></p>
    

    <div class="my-5 d-flex justify-content-center">
        <a href="{{ route('pdf' ,  $candidatoDocumentsUpdate->id ) }}" class="btn btn-success bg-lg my-4"> Descargar Reporte PDF del Candidato </a>
    </div>
    <p class="text-center font-weight-bold"><small class="text-danger mx-1"></small>La descarga del reporte de todos los datos del candidato, tarda aproximadamente entre 15 a 40 segundos
    en realizar la descarga, por lo que puede optar por consultarlo en postulados o esperar.</p>

</div>


<div title="procedimiento" class="my-5 bg-light">

    {{-- Desde aqui directamente se esta guardando en la tabla de Integracion Regional para que pueda cargarlo --}}
    <form action="{{ route('integracion-regional.store' ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-5">
            <p class="text-center font-weight-bold h3">Adjuntar Archivos del Candidato</p>
            <p class="text-center font-weight-bold h3 mt-4">Datos del Candidato</p>
        </div>
        <section class="row container-fluid my-5 py-3">
            <div class="col-6">
                <label for="id_postulado">Identificador del Candidato</label>
            <input type="text" name="id_postulado" id="id_postulado" disabled="disabled" class="form-control" value="{{ $candidatoDocumentsUpdate->id }}">
            </div>
            <div class="col-6">
                <label for="nombre">Nombre del Candidato</label>
            <input type="text" name="nombre" id="nombre" disabled="disabled" class="form-control" value="{{ $candidatoDocumentsUpdate->nombre }}">
            </div>
            <div class="col-6">
                <label for="ficha">Ficha del Candidato</label>
            <input type="text" name="ficha" id="ficha" disabled="disabled" class="form-control" value="{{ $candidatoDocumentsUpdate->ficha }}">
            </div>
            <div class="col-6">
                <label for="plaza">Plaza del Candidato</label>
            <input type="text" name="plaza" id="plaza" disabled="disabled" class="form-control" value="{{ $candidatoDocumentsUpdate->plaza }}">
            </div>
        </section>
        <section class="row">
            <div class="col-12">
                <p class="text-center font-weight-bold h4">Adjunte cada uno de los archivos del Candidato</p>
            </div>
            <div class="col-12 p-3">
                <div class="custom-file">
                        <input type="file" class="custom-file-input" id="memorandum" name="memorandum"  accept=".pdf">
                        <label class="custom-file-label" for="memorandum">Adjuntar memorandum</label>
                </div>
            </div>
             <div class="col-12 p-3">
                <div class="custom-file">
                        <input type="file" class="custom-file-input" id="obra_determinada" name="obra_determinada"  accept=".pdf">
                        <label class="custom-file-label" for="obra_determinada">Adjuntar Obra Determinada</label>
                </div>
            </div>
        </section>
        <section class="container my-5">
            <input type="submit" class="btn btn-primary btn-block" value="Guardar">
        </section>
    </form>

</div>
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
{{-- Para el uso dinamico de componentes de Bootstrap 4 con input de tipo File, debes usar estas librerias JS ademas --}}
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        console.log(`Favor de no tocar esta herramienta para desarrolladores informaticos`);
        /* Ademas tambien debes inicializar la funcion */
        $(document).ready(function () {
              bsCustomFileInput.init()
            })
    </script>
@stop