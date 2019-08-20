<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Persona::create(["cedula"=>32334053,"nombre"=>"Monica Maria Quiroz","vehiculo_id"=>1]);
        Persona::create(["cedula"=>1040752831,"nombre"=>"Santiago Gonzalez","vehiculo_id"=>2]);
        Persona::create(["cedula"=>98631127,"nombre"=>"Juan Carlos Gonzalez","vehiculo_id"=>3]);
        Persona::create(["cedula"=>7834524,"nombre"=>"Pancracio Gomez","vehiculo_id"=>4]);
    }
}
