<?php

use Illuminate\Database\Seeder;
use App\Marca;
class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marca::create(["nombre"=>"Toyota"]);
        Marca::create(["nombre"=>"Mazda"]);
        Marca::create(["nombre"=>"Chevrolet"]);
    }
}
