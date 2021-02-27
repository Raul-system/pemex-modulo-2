<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/* Controladores de cada Departamento */
use App\Http\Controllers\UsuariaController;
use App\Http\Controllers\integracionController;
use App\Http\Controllers\DesarrolloHumanoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\FechasValidacionDocumentosAreas;
use App\Http\Controllers\GenerarReporteExcelTrabajador;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\exportexcel;

use App\Http\Controllers\PostuladosController;
use App\Http\Controllers\ContratadosController;
use App\Http\Controllers\RechazadosController;

use App\Http\Controllers\SearchConsultarController;


/* Es para cuando se quiera acceder a inicio, directamente vaya a Login */

Route::get('user-export', [exportexcel::class, 'export']);

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::resource('postulados', PostuladosController::class);
Route::resource('contratados', ContratadosController::class);
Route::resource('rechazados', RechazadosController::class);

Route::resource('home', UsuariaController::class)->only(['index', 'store', 'create', 'edit']);
/* Route::resource('home', 'UsuariaController'); */

Route::resource('integracion-regional', integracionController::class)->only(['index', 'show', 'store']);
/* Route::resource('integracion-regional', 'integracionController'); */


Route::resource('desarrollo-humano', DesarrolloHumanoController::class)->only(['index', 'show', 'create', 'store']);
/* Route::resource('deasrrollo-humano', 'DesarrolloHumanoController'); */

Route::resource('departamento-personal', PersonalController::class)->only(['index', 'show', 'create', 'store']);
/* Route::resource('departamento-personal', 'PersonalController'); */


Route::get('/exportar-pdf/{id}', [PDFController::class, 'PDF'])->name('pdf');
Route::get('pdf/{departamento}/{tipo}/{archivo}', [PDFController::class, 'descargar_reporte_departamento_dinamico'])->name('descargar.reportes.pdf');
/* Route::get('/exportar-pdf', 'PDFController@PDF')->name('export-pdf'); */

/* ETAPA 2 */
Route::resource('fechas-validacion-documentos', FechasValidacionDocumentosAreas::class)->only(['index', 'show']);

/* ETAPA 3 */

Route::resource('generar-reportes-empleados', GenerarReporteExcelTrabajador::class)->only(['index', 'show']);


/* Para Realizar Busquedas entre distintas vistas y modelos */
Route::get('search', [SearchConsultarController::class, 'getSearchToConsulte'])->name('search.consultar');

Route::view('resultados-busqueda', 'search.resultados-busqueda')->name('view.search');
