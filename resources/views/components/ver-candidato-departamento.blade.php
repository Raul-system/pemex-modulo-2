<section class="container-fluid bg-light">
    <section class="row my-4">
        <div class="col-3">
            <p class="text-center"> Identificar único del Candidato: <strong>{{$modelo_usuario->id_postulado }}</strong> </p>
        </div>
        <div class="col-3">
            <p class="text-center"> Nombre: <strong>{{$modelo_usuario->nombre}}</strong> </p>
        </div>
        <div class="col-3">
            <p class="text-center"> Ficha: <strong>{{$modelo_usuario->ficha}}</strong> </p>
        </div>
        <div class="col-3">
            <p class="text-center"> Plaza: <strong>{{$modelo_usuario->plaza}}</strong> </p>
        </div>
    </section>
    <section class="container my-4">
        <p class="text-center font-weight-bold h3 my-5 py-2">Bandeja de Entrada</p>
        <div class="row">
            <div class="col-6 px-4">
                <a href="{{ route('descargar.reportes.pdf' , [$departamento_files,  'memorandum' , $modelo_usuario->url_memorandum]  ) }}" class="btn btn-success btn-block d-block mx-auto">Descargar Memorandum</a>
            </div>
            <div class="col-6 px-4">
                <a href="{{ route('descargar.reportes.pdf' ,  [$departamento_files,  'obra_determinada', $modelo_usuario->url_obra_determinada]   ) }}" class="btn btn-success btn-block d-block mx-auto">Descargar Obra Determinada</a>
            </div>
        </div>
    </section>
</section>