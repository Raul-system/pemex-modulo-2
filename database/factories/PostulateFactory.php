<?php

namespace Database\Factories;

use App\Models\Postulate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostulateFactory extends Factory
{
    protected $model = Postulate::class;

    public function definition()
    {
        return [
            "remitente" => $this->faker->name,
            "destinatario" => $this->faker->name,
            "asunto" => $this->faker->sentence(),
            "oficio" => $this->faker->sentence(),
            "fecha" => time(),
            "numero" => rand(10, 10000),
            "numero_expediente" => rand(10, 10000),
            "antecedentes" => $this->faker->paragraph(),
            "numeros" => rand(10, 10000),
            "numero_unico_expediente" => Str::random(40),
            "fechas" => $this->faker->sentence(),
            "anexo" => $this->faker->sentence(),
            "esp" => $this->faker->randomElement([
                "PEP",
                "PEMEX",
                "PTRI",
                "PLOG",
                "PFRE",
            ]),
            "subdireccion" => $this->faker->randomElement([
                "PERFORACION",
                "SURESTE",
            ]),
            "gerencia" => $this->faker->randomElement([
                "POZOS",
                "C.P.G CACTUS",
            ]),
            "plaza" => '204222167AD 21071669',
            "categoria" => 'COORDINADOR ESPECIALISTA "F"',
            "clasificacion" => '35.04.09',
            "grupo_plaza" => '2',
            "resq_profesional" => $this->faker->sentence(),
            "jornada" => '0',
            "rol_grupo" => 'F007SDDC',
            "t_e_o" => '30',
            "t_e_a" => '15',
            "posicion" => $this->faker->sentence(),
            "centro_gestor" => '32110781',
            "centro_costo" => '2042221670',
            "motivo_vacante" => $this->faker->randomElement([
                "PRORROGA",
                "VACACIONES",
                "POOCION",
                "TEMPORAL",
                "ASCENSO TEMPORAL",
                "INCAPACIDAD MEDICA",
                "CI/43",
                "MATERNIDAD",
                "PERMISOS ECONOMICOS",
                "PERMISOS RENCIABLES",
                "OBRA DETERMINADA",
            ]),
            "motivo_contratacion" => $this->faker->randomElement([
                "PRORROGA",
                "CONTRATACION TEMPORAL",
                "ASCENSO TEMPORAL",
            ]),
            "ficha_candidato" => $this->faker->sentence(),
            "vigencia" => time(),
            "ficha" => Str::random(20),
            "nombre" => $this->faker->name,
            "formacion_profesional" => $this->faker->sentence(),
            "situacion_contractual" => $this->faker->sentence(),
            "resultados_tecnicos" => $this->faker->sentence(),
        ];
    }
}
