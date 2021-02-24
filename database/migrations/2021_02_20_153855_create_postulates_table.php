<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulatesTable extends Migration
{
    public function up()
    {
        Schema::create('postulates', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('remitente')->nullable();
            $table->string('destinatario')->nullable();
            $table->string('asunto')->nullable();
            $table->string('oficio')->nullable();
            $table->string('fecha')->nullable();
            $table->string('numero')->nullable();
            $table->string('numero_expediente')->nullable();
            $table->text('antecedentes')->nullable();
            $table->string('numeros')->nullable();
            $table->string('numero_unico_expediente')->nullable();
            $table->string('fechas')->nullable();
            $table->string('anexo')->nullable();
            /* Los campos que mas se usaran */
            $table->string('esp')->nullable();
            $table->string('subdireccion')->nullable();
            $table->string('gerencia')->nullable();
            $table->string('plaza')->nullable();
            $table->string('categoria')->nullable();
            $table->string('clasificacion')->nullable();
            $table->string('grupo_plaza')->nullable();
            $table->string('resq_profesional')->nullable();
            $table->string('jornada')->nullable();
            $table->string('rol_grupo')->nullable();
            $table->string('t_e_o')->nullable();
            $table->string('t_e_a')->nullable();
            $table->string('posicion')->nullable();
            $table->string('centro_gestor')->nullable();
            $table->string('centro_costo')->nullable();
            $table->string('motivo_vacante')->nullable();
            $table->string('motivo_contratacion')->nullable();
            $table->string('ficha_candidato')->nullable();
            $table->string('vigencia')->nullable();
            $table->string('ficha')->nullable();
            $table->string('nombre')->nullable();
            $table->string('formacion_profesional')->nullable();
            $table->string('situacion_contractual')->nullable();
            $table->string('resultados_tecnicos')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postulates');
    }
}
