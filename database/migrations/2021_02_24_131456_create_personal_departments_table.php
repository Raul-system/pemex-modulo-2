<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_departments', function (Blueprint $table) {
            $table->id();
            $table->string('id_postulado')->nullable();
            $table->string('nombre')->nullable();
            $table->string('ficha')->nullable();
            $table->string('plaza')->nullable();
            $table->string('url_memorandum')->nullable();
            $table->string('url_obra_determinada')->nullable();
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
        Schema::dropIfExists('personal_departments');
    }
}
