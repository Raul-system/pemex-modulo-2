<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRejectedCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rejected_candidates', function (Blueprint $table) {
            $table->id();
            $table->string('ficha')->nullable();
            $table->string('nombre')->nullable();
            $table->string('formacion_profesional')->nullable();
            $table->string('situacion_contractual')->nullable();
            $table->string('resultados_tecnicos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rejected_candidates');
    }
}
