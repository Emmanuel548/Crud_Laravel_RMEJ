<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category1 = new Category();
        $category1->name="Subcompactos";
        $category1->descripcion="Pequeños, económicos, eficientes en consumo de combustible, ideales para la ciudad.";
        $category1->active=true;
        $category1->save();

        $category1 = new Category();
        $category1->name="Compactos";
        $category1->descripcion="Un poco más grandes que los subcompactos, buena eficiencia de combustible, más espacio interior.";
        $category1->active=true;
        $category1->save();

        $category1 = new Category();
        $category1->name="Medianos";
        $category1->descripcion="Más espacio interior y maletero, mayor confort, buenos para familias.";
        $category1->active=true;
        $category1->save();

        $category1 = new Category();
        $category1->name="Hatchbacks";
        $category1->descripcion="Diseño con portón trasero, versatilidad en el espacio de carga.";
        $category1->active=true;
        $category1->save();

        $category1 = new Category();
        $category1->name="Deportivos";
        $category1->descripcion="Alto rendimiento, diseño aerodinámico, potencia y velocidad.";
        $category1->active=true;
        $category1->save();

    }
}
