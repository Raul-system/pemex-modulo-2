<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integracion;

class integracionController extends Controller
{
    public function __construct()
    {
        /* Require haber una autenticacion para poder acceder */
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.integracion-regional.index', [
            'paginacion' => true,
            'candidatos_integracion_regional' => Integracion::paginate(10)
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'memorandum' => 'required',
            'obra_determinada' => 'required'
        ]);
        $request['memorandum'] = guardarArchivo($request, 'memorandum', 'public/files_integracion_regional/memorandum');
        $request['obra_determinada'] = guardarArchivo($request, 'obra_determinada', 'public/files_integracion_regional/obra_determinada');
        Integracion::create([
            'id_postulado' => $request->get('id_postulado'),
            'nombre' => $request->get('nombre'),
            'ficha' => $request->get('ficha'),
            'plaza' => $request->get('plaza'),
            'url_memorandum' => $request->get('memorandum'),
            'url_obra_determinada' => $request->get('obra_determinada'),
        ]);
        return redirect(route('postulados.index'));
    }

    public function show($id)
    {
        $candidato_informacion =
            Integracion::findOrFail($id);
        return view('admin.integracion-regional.integracion', compact('candidato_informacion'));
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
