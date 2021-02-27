@props(['modelosearch', 'routeshow','campos' ])

<section title="Buscador en Tiempo Real" class="container mt-4 mb-3">
    <form action="{{ route('search.consultar') }}" method="GET" class="d-flex justify-content-end">
        {{-- No necesita de @csrf --}}
        <div class="form-group" style="width: 45%;">
           <section class="row">
              
            <div class="col-12 d-flex justify-content-center align-items-center">
                 <label for="search" class="mx-2">Buscar: </label>
                <input class="form-control" type="text" name="text" id="search">
                <input type="submit" value="Enviar" class="btn btn-success"> 
            </div>
            <div class="col-12">
                    <div class="form-group">
                        <label for="validationNameSearch">Buscar por: </label>
                        <select name="validationNameSearch" id="validationNameSearch" class="form-control">
                            @foreach ($campos as $item)
                                <option value="{{$item['value']}}">{{$item['text']}}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="col-12">
                         {{-- El Request no acepta valores de <input> deshabiltiado --}}
                   <input type="hidden" class="form-control" name="route_consulta" value="{{ $routeshow }}"  id="route_consulta">
                   <input type="hidden" class="form-control" name="modeloSearch" value="{{ $modelosearch }}"  id="modeloSearch">
               </div>
            </div>
           </section>
        </div>
    </form>
</section>