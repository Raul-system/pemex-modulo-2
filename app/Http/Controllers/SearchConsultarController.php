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

    public function getSearchToConsulte($modelosearch, Request $request)
    {
        switch ($modelosearch) {
            case 'Postulate':
                $this->resultados_response = Postulate::where($request->get('validationNameSearch'), 'like', '%' . $request->get('text') . '%')->paginate(10);
                break;

                /* default:

                break; */
        }
        return view('search.resultados-busqueda', [
            'paginacion' => true,
            'listDB' => $this->resultados_response,
            'routeConsult' => $request->get('route_consulta'),
        ]);
    }
}
