<?php

use Illuminate\Database\Seeder;
use App\Vehiculo;
class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Vehiculo::create(["placa"=>"JKN214","marca_id"=>1]);
        Vehiculo::create(["placa"=>"MJP202","marca_id"=>2]);
        Vehiculo::create(["placa"=>"HXQ959","marca_id"=>3]);
        Vehiculo::create(["placa"=>"MNP909","marca_id"=>1]);
    }
}
