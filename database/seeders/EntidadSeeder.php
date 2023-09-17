<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Entidad;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Entidad::create([
            "nombre" => "expediente",
            "padre_id" => 0,
            "ficha" => true
        ]);

        Entidad::create([
            "nombre" => "tajo",
            "padre_id" => 0,
            "ficha" => true
        ]);

        Entidad::create([
            "nombre" => "fauna",
            "padre_id" => 0,
            "ficha" => true
        ]);

        Entidad::create([
            "nombre" => "flora",
            "padre_id" => 0,
            "ficha" => true
        ]);

        Entidad::create([
            "nombre" => "jornada",
            "padre_id" => 0,
            "ficha" => true
        ]); */

        Entidad::factory()->count(150)->create();

    }
}
