<section title="Formulario Central del Registro de Trabajadores Postulados" class="my-4">

    <div class="row">
        <div class="col-4 form-group">
            
            <label for="select-esp">ESP</label>
            <select class="form-control" name="esp" id="select-esp">
                <option value="PEP">PEP</option>
                <option value="PEMEX">PEMEX</option>
                <option value="PTRI">PTRI</option>
                <option value="PLOG">PLOG</option>
                <option value="PFRE">PFRE</option>
            </select>
            {!!  $errors->first('esp' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
             <label for="select-subdireccion">Subdireccion</label>
            <select class="form-control" name="subdireccion" id="select-subdireccion">
                <option value="PERFORACION">PERFORACION</option>
                <option value="SURESTE">SURESTE</option>
                
            </select>
            {!!  $errors->first('subdireccion' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>

         <div class="col-4 form-group">
             <label for="select-gerencia">Gerencia</label>
            <select class="form-control" name="gerencia" id="select-gerencia">
                <option value="POZOS">POZOS</option>
                <option value="C.P.G CACTUS">C.P.G CACTUS</option>
            </select>
            {!!  $errors->first('gerencia' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>

    </div>

    <div class="row">
        <div class="col-4 form-group">
           <label for="select-plaza">Plaza</label>
            <select class="form-control" name="plaza" id="select-plaza">
                <option value="204222167AD 21071669">204222167AD 21071669</option>
            </select>
            {!!  $errors->first('plaza' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <label for="select-categoria">Categoria</label>
            <select class="form-control" name="categoria" id="select-categoria">
                <option value="COORDINADOR ESPECIALISTA F">COORDINADOR ESPECIALISTA "F"</option>
            </select>
            {!!  $errors->first('categoria' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="select-clasificacion">Clasificacion</label>
            <select class="form-control" name="clasificacion" id="select-clasificacion">
                <option value="35.04.09">35.04.09</option>
            </select>
            {!!  $errors->first('clasificacion' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>

    </div>


    <div class="row">
        <div class="col-4 form-group">
           <label for="select-grupo_plaza">Grupo de Plaza</label>
            <select class="form-control" name="grupo_plaza" id="select-grupo_plaza">
                <option value="2">2</option>
            </select>
            {!!  $errors->first('grupo_plaza' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <label for="campo-categoria">Resq. Profesional</label>
            <input class="form-control" type="text" name="resq_profesional" id="campo-categoria" value="{{ old('resq_profesional') }}">
            {!!  $errors->first('resq_profesional' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="select-jornada">Jornada</label>
            <select class="form-control" name="jornada" id="select-jornada">
                <option value="0">0</option>
            </select>
            {!!  $errors->first('jornada' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>

    </div>
    

     <div class="row">
        <div class="col-4 form-group">
           <label for="select-rol-grupo">Rol / Grupo</label>
            <select class="form-control" name="rol_grupo" id="select-rol-grupo">
                <option value="F007SDDC">F007SDDC</option>
            </select>
            {!!  $errors->first('rol_grupo' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <label for="select-T.E.O.">T.E.O.</label>
            <select class="form-control" name="t_e_o" id="select-T.E.O.">
                <option value="30">30</option>
            </select>
            {!!  $errors->first('t_e_o' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="select-T.E.A.">T.E.A.</label>
            <select class="form-control" name="t_e_a" id="select-T.E.A.">
                <option value="15">15</option>
            </select>
            {!!  $errors->first('t_e_a' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
     </div>

    <div class="row">
        <div class="col-4 form-group">
           <label for="campo-posicion">Posicion</label>
            <input class="form-control" type="text" name="posicion" id="campo-posicion" placeholder="Posicion" value="{{ old('posicion') }}">
            {!!  $errors->first('posicion' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <label for="select-centro_gestor">Centro Gestor</label>
            <select class="form-control" name="centro_gestor" id="select-centro_gestor">
                <option value="32110781">32110781</option>
            </select>
            {!!  $errors->first('centro_gestor' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="select-centro_costo">Centro Costo</label>
            <select class="form-control" name="centro_costo" id="select-centro_costo">
                <option value="2042221670">2042221670</option>
            </select>
            {!!  $errors->first('centro_costo' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

    <div class="row">
        <div class="col-4 form-group">
           <label for="select-motivo_vacante">Motivo de la Vacante</label>
            <select class="form-control" name="motivo_vacante" id="select-motivo_vacante">
                <option value="PRORROGA">PRORROGA</option>
                <option value="VACACIONES">VACACIONES</option>
                <option value="POOCION">POOCION</option>
                <option value="TEMPORAL">TEMPORAL</option>
                <option value="ASCENSO TEMPORAL">ASCENSO TEMPORAL</option>
                <option value="INCAPACIDAD MEDICA">INCAPACIDAD MEDICA</option>
                <option value="CI/43">CI/43</option>
                <option value="MATERNIDAD">MATERNIDAD</option>
                <option value="PERMISOS ECONOMICOS">PERMISOS ECONOMICOS</option>
                <option value="PERMISOS RENCIABLES">PERMISOS RENCIABLES</option>
                <option value="OBRA DETERMINADA">OBRA DETERMINADA</option>
            </select>
            {!!  $errors->first('motivo_vacante' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
            <label for="select-motivo_contratacion">Motivo de la Contratacion</label>
            <select class="form-control" name="motivo_contratacion" id="select-motivo_contratacion">
                <option value="PRORROGA">PRORROGA</option>
                <option value="CONTRATACION TEMPORAL">CONTRATACION TEMPORAL</option>
                <option value="ASCENSO TEMPORAL">ASCENSO TEMPORAL</option>
            </select>
            {!!  $errors->first('motivo_contratacion' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="campo-ficha-candidato">Ficha del Candidato</label>
            <input class="form-control" type="text" name="ficha_candidato" id="campo-ficha-candidato" placeholder="Ficha del Candidato" value="{{ old('ficha_candidato') }}">
            {!!  $errors->first('ficha_candidato' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

     <div class="row">
        <div class="col-4 form-group">
           <label for="campo-vigencia">Vigencia</label>
            <input class="form-control" type="text" name="vigencia" id="campo-vigencia" placeholder="Vigencia" value="{{ old('vigencia') }}">
            {!!  $errors->first('vigencia' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
           <label for="campo-ficha">Ficha</label>
            <input class="form-control" type="text" name="ficha" id="campo-ficha" value="528929" placeholder="Ficha" value="{{ old('ficha_registro') }}">
            {!!  $errors->first('ficha' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="campo-nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="campo-nombre" placeholder="Nombre" value="{{ old('nombre') }}">
            {!!  $errors->first('nombre' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

     <div class="row">
        <div class="col-4 form-group">
           <label for="campo-formacion_profesional">Formacion Profesional</label>
            <input class="form-control" type="text" name="formacion_profesional" id="campo-formacion_profesional" placeholder="Formacion Profesional" value="{{ old('formacion_profesional') }}">
            {!!  $errors->first('formacion_profesional' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
        <div class="col-4 form-group">
           <label for="campo-situacion_contractual">Situacion Contractual</label>
            <input class="form-control" type="text" name="situacion_contractual" id="campo-situacion_contractual" placeholder="Situacion Contractual" value="{{ old('situacion_contractual') }}">
            {!!  $errors->first('situacion_contractual' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
         <div class="col-4 form-group">
            <label for="campo-resultados_tecnicos">Resultados Tecnicos</label>
            <input class="form-control" type="text" name="resultados_tecnicos" id="campo-resultados_tecnicos" placeholder="Resultados Tecnicos" value="{{ old('resultados_tecnicos') }}">
            {!!  $errors->first('resultados_tecnicos' , '<small class="text-danger font-weight-bold">:message</small>') !!}
        </div>
    </div>

</section>