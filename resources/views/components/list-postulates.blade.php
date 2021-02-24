@props(['listmodel'])

{{-- Campos a mostrar al enlistar cada postulado :
    id , nombre, ficha, plaza, boton ver mas
    --}}
<section class="container-fluid">


    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Identificador</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ficha</th>
                <th scope="col">Plaza</th>
                <th scope="col">Mas..</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listmodel as $item)
                <tr>
                
                <th scope="row">{{  $item->id }}</th>    
                <td>{{  $item->nombre }}</td>
                <td>{{  $item->ficha }}</td>
                <td>{{  $item->plaza }}</td>
                <td> 
                    <a href="{{ route('postulados.show' , $item->id) }}" class="btn btn-success btn-lg">Ver mas...</a>
                </td>
                </tr>
                    @endforeach
            </tbody>
</table>

                <div title="Control de la Paginacion">
                    {{ $listmodel->links() }}
                </div>

</section>