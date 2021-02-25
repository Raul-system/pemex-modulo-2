@props(['modelosearch', 'routeshow' ])

<section title="Buscador en Tiempo Real" class="container mt-4 mb-3">
    <form action="{{ route('search.consultar', $modelosearch) }}" type="GET" class="d-flex justify-content-end">
        <div class="form-group" style="width: 45%;">
           <section class="row">
               <div class="col-12">
                   <input type="hidden" class="form-control" name="route_consulta" value="{{ $routeshow }}">
               </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                 <label for="search" class="mx-2">Buscar: </label>
                <input class="form-control" type="search" name="text" id="search">
                <input type="submit" value="Enviar" class="btn btn-success"> 
            </div>
            <div class="col-12">
                <p class="my-3 h5 font-weight-bold text-center">Buscar por: </p>
                <article class="row">
                    <section class="col-4 form-check">
                        <input class="form-check-input" type="radio" name="validationNameSearch" id="nombre" value="nombre" checked>
                        <label class="form-check-label" for="nombre">
                            Nombre
                        </label>
                    </section>
                    <section class="col-4 form-check">
                        <input class="form-check-input" type="radio" name="validationNameSearch" id="ficha" value="ficha">
                        <label class="form-check-label" for="ficha">
                            Ficha
                        </label>
                    </section>
                    <section class="col-4 form-check">
                        <input class="form-check-input" type="radio" name="validationNameSearch" id="plaza" value="plaza">
                        <label class="form-check-label" for="plaza">
                            Plaza
                        </label>
                    </section>
                </article>
            </div>
           </section>
        </div>
    
    </form>
</section>