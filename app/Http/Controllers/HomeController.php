<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
}
