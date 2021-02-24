<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulate extends Model
{
    use HasFactory;
    protected $table = 'postulates';
    protected $fillable = [
        "remitente",
        "destinatario",
        "asunto",
        "oficio",
        "fecha",
        "numero",
        "numero_expediente",
        "antecedentes",
        "numeros",
        "numero_unico_expediente",
        "fechas",
        "anexo",
        "esp",
        "subdireccion",
        "gerencia",
        "plaza",
        "categoria",
        "clasificacion",
        "grupo_plaza",
        "resq_profesional",
        "jornada",
        "rol_grupo",
        "t_e_o",
        "t_e_a",
        "posicion",
        "centro_gestor",
        "centro_costo",
        "motivo_vacante",
        "motivo_contratacion",
        "ficha_candidato",
        "vigencia",
        "ficha",
        "nombre",
        "formacion_profesional",
        "situacion_contractual",
        "resultados_tecnicos",
    ];
}
