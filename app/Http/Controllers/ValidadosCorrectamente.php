<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidadosCorrectamente extends Controller
{
    public function __construct()
    {
        /* Require haber una autenticacion para poder acceder */
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.area-usuaria.validados-correctamente');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
