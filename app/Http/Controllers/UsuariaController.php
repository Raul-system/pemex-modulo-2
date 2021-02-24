<?php

namespace App\Http\Controllers;

use App\Models\Postulate;
use App\Models\Integracion;
use Illuminate\Http\Request;


class UsuariaController extends Controller
{
    public function __construct()
    {
        /* Require haber una autenticacion para poder acceder */
        $this->middleware('auth');
    }
    public function index()
    {
        /* Esta muestra la vista de Linea de Negocios- Area Usuaria */
        return view('admin.panel');
    }

    public function create()
    {
        /* Retorna la vista para registrar a un nuevo candidato */
        return view('admin.area-usuaria.registrar-postulado');
    }

    public function store(Request $request)
    {
        $validacion = $request->validate([
            "remitente" => 'required',
            "destinatario" => 'required',
            "asunto" => 'required',
            "oficio" => 'required',
            "fecha" => 'required',
            "numero" => 'required',
            "numero_expediente" => 'required',
            "antecedentes" => 'required',
            "numeros" => 'required',
            "numero_unico_expediente" => 'required',
            "fechas" => 'required',
            "anexo" => 'required',
            "esp" => "required",
            "subdireccion" => "required",
            "gerencia" => "required",
            "plaza" => "required",
            "categoria" => "required",
            "clasificacion" => "required",
            "grupo_plaza" => "required",
            "resq_profesional" => "required",
            "jornada" => "required",
            "rol_grupo" => "required",
            "t_e_o" => "required",
            "t_e_a" => "required",
            "posicion" => "required",
            "centro_gestor" => "required",
            "centro_costo" => "required",
            "motivo_vacante" => "required",
            "motivo_contratacion" => "required",
            "ficha_candidato" => "required",
            "vigencia" => "required",
            "ficha" => "required",
            "nombre" => "required",
            "formacion_profesional" => "required",
            "situacion_contractual" => "required",
            "resultados_tecnicos" => "required",
        ]);

        $postulateRegister =  Postulate::create($request->all());
        /* return redirect(route('home.edit', $postulateRegister)); */
        return redirect(route('home.edit', $postulateRegister->id));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $candidatoDocumentsUpdate = Postulate::findOrFail($id);
        return view('admin.area-usuaria.actualizar-documentos', compact('candidatoDocumentsUpdate'));
    }

    public function update(Request $request, $id)
    {
        return Postulate::findOrFail($id);
    }

    public function destroy($id)
    {
        //
    }
}
