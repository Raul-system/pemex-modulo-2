<?php

namespace App\Http\Controllers;

use App\Models\Postulate; /* Tabla de Postulados */
use App\Models\rejectedCandidates; /* Tabla de Candidatos Rechazados */
use App\Models\validatedCorrectly; /* Tabla de Validados Correctamente */

/* tablas */
use App\Models\Integracion;
use App\Models\humanDevelopment;
use App\Models\personalDepartment;
use Illuminate\Http\Request;

class SearchConsultarController extends Controller
{


    public $resultados_response;

    public function getSearchToConsulte(Request $request)
    {
        switch ($request->get('modeloSearch')) {
            case 'Postulate':
                $this->resultados_response = Postulate::where($request->get('validationNameSearch'), 'like', '%' . $request->get('text') . '%')->get();
                break;

                /* default:

                break; */
        }
        return view('search.resultados-busqueda', [
            'paginacion' => false,
            'listDB' => $this->resultados_response,
            'routeConsult' => $request->get('route_consulta'),
        ]);
    }
}
