<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integracion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_postulado',
        'nombre',
        'ficha',
        'plaza',
        'url_memorandum',
        'url_obra_determinada',
    ];
}
