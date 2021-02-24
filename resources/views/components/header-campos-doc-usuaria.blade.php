<section title="Encabezado del Formulario de Registro de Postulados" class="my-4">
    <div class="row">
        <div class="col-6 form-group">
            <input class="form-control" type="text" name="remitente" id="campo-remitente" placeholder="Remitente" value="{{old('remitente')}}">
            <label for="campo-remitente">Remitente</label>
            {!!  $errors->first('remitente' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-6 form-group">
            <input class="form-control" type="text" name="destinatario" id="campo-destinatario" placeholder="Destinatario" value="{{old('destinatario')}}">
            <label for="campo-destinatario">Destinatario</label>
            {!!  $errors->first('destinatario' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

     <div class="row">
        <div class="col-6 form-group">
            <input class="form-control" type="text" name="asunto" id=" campo-asunto" placeholder="Asunto" value="{{old('asunto')}}">
            <label for="campo-asunto">Asunto</label>
            {!!  $errors->first('asunto' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-6 form-group">
            <input class="form-control" type="text" name="oficio" id=" campo-oficio" placeholder="Oficio" value="{{old('oficio')}}">
            <label for="campo-oficio">Oficio</label>
            {!!  $errors->first('oficio' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

     <div class="row">
        <div class="col-6 form-group">
            <input class="form-control" type="text" name="fecha" id=" campo-fecha" placeholder="Fecha" value="{{old('fecha')}}">
            <label for="campo-fecha">Fecha</label>
            {!!  $errors->first('fecha' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-6 form-group">
            <div class="row">
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="numero" id=" campo-numero" placeholder="Número" value="{{old('numero')}}">
            <label for="campo-numero">Número</label>
            {!!  $errors->first('numero' , '<small class="text-danger font-weight-bold">:message</small>') !!}
                </div>
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="numero_expediente" id=" campo-numero-expediente" placeholder="Número de Expediente" value="{{ old('numero_expediente') }}">
            <label for="campo-numero-expediente">Número de Expediente</label>
            {!!  $errors->first('numero_expediente' , '<small class="text-danger font-weight-bold">:message</small>') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 form-group">
            <input class="form-control" type="text" name="antecedentes" id="campo-antecedentes" placeholder="Antecedentes" value="{{ old('antecedentes') }}">
            <label for="campo-antecedentes">Antecedentes</label>
            {!!  $errors->first('antecedentes' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-4 form-group">
            <input class="form-control" type="text" name="numeros" id=" campo-numeros" placeholder="Asunto" value="{{ old('numeros') }}">
            <label for="campo-numeros">Numero(S)</label>
            {!!  $errors->first('numeros' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <input class="form-control" type="text" name="numero_unico_expediente" id=" campo-num_unico_expediente" placeholder="Numero Unico de Expediente" value="{{ old('numero_unico_expediente') }}">
            <label for="campo-num_unico_expediente">Numero unico de expediente</label>
            {!!  $errors->first('numero_unico_expediente' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <input class="form-control" type="text" name="fechas" id=" campo-fechas" placeholder="Oficio" value="{{ old('fechas') }}">
            <label for="campo-fechas">Fecha(S)</label>
            {!!  $errors->first('fechas' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-12 form-group">
            <input class="form-control" type="text" name="anexo" id="campo-anexo" value="{{ old('anexo') }}">
            <label for="campo-anexo">Anexo</label>
            {!!  $errors->first('anexo' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

</section>