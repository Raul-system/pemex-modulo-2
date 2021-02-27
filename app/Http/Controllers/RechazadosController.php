<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rejectedCandidates;
use App\Models\Postulate;
use App\Models\Integracion;
use App\Models\humanDevelopment;
use App\Models\personalDepartment;


class RechazadosController extends Controller
{
    /* Aqui se hace la logica para que desde cualquier departamento/vista, se pueda mandar una peticion de tipo POST
para registrar a un nuevo postulado tomando en cuenta cada uno de los datos que se necesitan para poder registralo en 
la tabla de Rechazados, de igual manera desde aqui se hara uso de cada uno de los Modelos de cada Departamento
para poder dar de baja en cualquier tabla relacionado a cualquier departamento, sobre todo eliminarlo de la tabla postulados,
asi como de cada uno de los departamentos y eliminando sus archivos */
    public function __construct()
    {
        /* Require haber una autenticacion para poder acceder */
        $this->middleware('auth');
    }

    public function index()
    {
        $postulados = Postulate::all();
        return view('admin.area-usuaria.lista-rechazados', compact('postulados'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        /* Este se encargara precisamente de registrar al candidato rechazado por papeleo, de igual manera  */
        /* Datos que recibo de la request:
        -id del postulado a buscar
        -departamento el cual lo rechazo
        -opciones de las cuales se deriva las razones por las cuales no procedio
        */
        /* Con esto ya tengo acceso a la informacion del postulado correspondiente a registrar comor rechazado y darllo de baja */
        $postulado_encontrado = Postulate::findOrFail($request->get('id_postulado'));

        /* Proceder a darlo de Baja en Integracion Regional */
        $postulado_integracion = Integracion::where('id_postulado', $postulado_encontrado->id)->get();
        /* Buscamos sus archivos y los borramos */
        if ($postulado_integracion != null) {
            deleteStorageFile('public/files_integracion_regional/' . $postulado_integracion->url_memorandum);
            deleteStorageFile('public/files_integracion_regional/' . $postulado_integracion->url_obra_determinada);
            /* Eliminamos al Postulado de Integracion Regional */
            $postulado_integracion->delete();
        }

        /* Proceder a dar de baja en Desarrollo Humano */
        $postulado_desarrollo_humano = humanDevelopment::where('id_postulado', $postulado_encontrado->id)->get();
        if ($postulado_desarrollo_humano != null) {
            deleteStorageFile('public/files_desarrollo_humano/' . $postulado_desarrollo_humano->url_memorandum);
            deleteStorageFile('public/files_desarrollo_humano/' . $postulado_desarrollo_humano->url_obra_determinada);
            $postulado_desarrollo_humano->delete();
        }

        /* Proceder a dar de baja en Departamento Personal */
        $postulado_departamento_personal = personalDepartment::where('id_postulado', $postulado_encontrado->id)->get();
        if ($postulado_departamento_personal != null) {
            deleteStorageFile('public/files_desarrollo_humano/' . $postulado_departamento_personal->url_memorandum);
            deleteStorageFile('public/files_desarrollo_humano/' . $postulado_departamento_personal->url_obra_determinada);
            $postulado_departamento_personal->delete();
        }

        /* Registrarlo en la tabla de Rechazados */
        rejectedCandidates::create([
            'ficha' => $postulado_encontrado->ficha,
            'nombre' => $postulado_encontrado->nombre,
            'formacion_profesional' => $postulado_encontrado->formacion_profesional,
            'situacion_contractual' => $postulado_encontrado->situacion_contractual,
            'resultados_tecnicos' => $postulado_encontrado->resultados_tecnicos,
        ]);

        /* Procedemos a eliminarlo de la tabla de Postulados */
        $postulado_encontrado->delete();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
