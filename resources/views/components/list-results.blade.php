@props(['listmodel', 'routeWatchMore', 'paginacion', 'textBtnMore'])

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
                                            <a href="{{ route( $routeWatchMore , $item->id) }}" class="btn btn-success btn-md">{{ $textBtnMore }}</a>
                                        </td>
                                        </tr>
                                    @endforeach

                            </tbody>
                </table>


    

    @isset($paginacion)
        @if ($paginacion)
            <div title="Control de la Paginacion" class="d-flex justify-content-end">
                    {{ $listmodel->links('vendor.pagination.default') }}
                </div>
        @endif
    @endisset

                

</section>