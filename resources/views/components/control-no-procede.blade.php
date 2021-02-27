@props(['nombre_departamento' , 'controles_opciones', 'modelo_tabla'])

{{-- El Nombre del departamento me sirve para saber quien lo rechazo
    Los Controles de Opciones tipo checkbox, son para generarlos de forma dinamica
    Recibo 3 cosas para el checkbox:
    - Texto
    -NameCheck
    -value

    El modelo de la tabla, me sirve para poder obtener el id del postulado en cierto departamento
    y asi poder enviarlo como referencia importante a la hora de hacer el proceso
    --}}
<section class="container-fluid my-5">
    <form action="{{ route('rechazados.store') }}" method="POST">
        @csrf

        @foreach ($controles_opciones as $item)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="{{ $item['NameCheck'] }}" value="" id="{{ $item['NameCheck'] }}">
                <label class="form-check-label" for="{{ $item['NameCheck'] }}">
                    {{ $item['Texto'] }}
                </label>
                </div>
        @endforeach

        <section class="container bg-light py-5 d-flex justify-content-center">
            <input type="submit" name="btnEnviar" value="No Procedio" class="btn btn-danger text-white font-weight-bold btn-md">
        </section>

    </form>
</section>