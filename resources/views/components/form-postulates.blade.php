<div>
    <x-header-document></x-header-document>
    <form class="container-fluid" action="{{ route('home.store') }}" method="POST">
        @csrf
        <x-header-campos-doc-usuaria></x-header-campos-doc-usuaria>
        <x-form-register-employee></x-form-register-employee>
        
        <section class="container-fluid d-flex justify-content-end my-4" title="Envio del Formulario para su registro">
           <input type="submit" value="Registrar" class="btn btn-success btn-lg">
        </section>

    </form>
    {{-- Primero se concreta el registro del Trabajador Postulado para que directamente le retorne la variable con el id
        la cual la recoje edit para que correspondiente tenga acceso a los datos, pueda generar un reporte, y luego pueda 
        recibir los 3 documentos y simplemente actualizar los campos de cada documento. --}}
</div>