@props(['listmodeluser'])

<section class="container-fluid">
                <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col">Motivo:</th>
                                <th scope="col">Descripcion:</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">remitente:</th>
                                    <td>{{ $listmodeluser->remitente }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">destinatario:</th>
                                    <td>{{ $listmodeluser->destinatario }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">asunto:</th>
                                    <td>{{ $listmodeluser->asunto }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">oficio:</th>
                                    <td>{{ $listmodeluser->oficio }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">fecha:</th>
                                    <td>{{ $listmodeluser->fecha }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">numero:</th>
                                    <td>{{ $listmodeluser->numero }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">numero_expediente:</th>
                                    <td>{{ $listmodeluser->numero_expediente }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">antecedentes:</th>
                                    <td>{{ $listmodeluser->antecedentes }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">numeros:</th>
                                    <td>{{ $listmodeluser->numeros }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">numero_unico_expediente:</th>
                                    <td>{{ $listmodeluser->numero_unico_expediente }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">fechas:</th>
                                    <td>{{ $listmodeluser->fechas }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">anexo:</th>
                                    <td>{{ $listmodeluser->anexo }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">esp:</th>
                                    <td>{{ $listmodeluser->esp }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">subdireccion:</th>
                                    <td>{{ $listmodeluser->subdireccion }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">gerencia:</th>
                                    <td>{{ $listmodeluser->gerencia }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">plaza:</th>
                                    <td>{{ $listmodeluser->plaza }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">categoria:</th>
                                    <td>{{ $listmodeluser->categoria }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">clasificacion:</th>
                                    <td>{{ $listmodeluser->clasificacion }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">grupo_plaza:</th>
                                    <td>{{ $listmodeluser->grupo_plaza }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">resq_profesional:</th>
                                    <td>{{ $listmodeluser->resq_profesional }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">jornada:</th>
                                    <td>{{ $listmodeluser->jornada }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">rol_grupo:</th>
                                    <td>{{ $listmodeluser->rol_grupo }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">t_e_o:</th>
                                    <td>{{ $listmodeluser->t_e_o }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">t_e_a:</th>
                                    <td>{{ $listmodeluser->t_e_a }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">posicion:</th>
                                    <td>{{ $listmodeluser->posicion }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">centro_gestor:</th>
                                    <td>{{ $listmodeluser->centro_gestor }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">centro_costo:</th>
                                    <td>{{ $listmodeluser->centro_costo }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">motivo_vacante:</th>
                                    <td>{{ $listmodeluser->motivo_vacante }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">motivo_contratacion:</th>
                                    <td>{{ $listmodeluser->motivo_contratacion }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">ficha_candidato:</th>
                                    <td>{{ $listmodeluser->ficha_candidato }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">vigencia:</th>
                                    <td>{{ $listmodeluser->vigencia }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">ficha:</th>
                                    <td>{{ $listmodeluser->ficha }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}


                                {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">nombre:</th>
                                    <td>{{ $listmodeluser->nombre }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">formacion_profesional:</th>
                                    <td>{{ $listmodeluser->formacion_profesional }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}

                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">situacion_contractual:</th>
                                    <td>{{ $listmodeluser->situacion_contractual }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}
                               
                                 {{-- ----------------------------------------------- --}}
                                <tr>
                                    <th scope="row">resultados_tecnicos:</th>
                                    <td>{{ $listmodeluser->resultados_tecnicos }}</td>
                                </tr>
                                {{-- ----------------------------------------------- --}}



                            </tbody>
                </table>
</section>

{{-- Campos de la tabla Postulates:
    
remitente
destinatario
asunto
oficio
fecha
numero
numero_expediente
antecedentes
numeros
numero_unico_expediente
fechas
anexo
esp
subdireccion
gerencia
plaza
categoria
clasificacion
grupo_plaza
resq_profesional
jornada
rol_grupo
t_e_o
t_e_a
posicion
centro_gestor
centro_costo
motivo_vacante
motivo_contratacion
ficha_candidato
vigencia
ficha
nombre
formacion_profesional
situacion_contractual
resultados_tecnicos

    --}}