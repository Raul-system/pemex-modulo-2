<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulate;

class PostuladosController extends Controller
{
    public function __construct()
    {
        /* Require haber una autenticacion para poder acceder */
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.postulados', [
            'postulates' => Postulate::paginate(10),
            'paginacion' => true
        ]);
        /* return Postulate::all(); */
    }
    public function create()
    {
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $postulateRegistro = Postulate::findOrFail($id);
        return view('admin.watch-postulate', compact('postulateRegistro'));
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
