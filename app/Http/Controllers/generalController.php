<?php

namespace App\Http\Controllers;
use App\Persona;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\Marca;
class generalController extends Controller
{
    //
    public function listar(){
        $vehiculos=Vehiculo::all();
        return view("listado",["vehiculos"=>$vehiculos]);

    }

    public function estadisticas(){
        $toyota=Marca::where("id",1)->first();
        $mazda=Marca::where("id",2)->first();
        $chevrolet=Marca::where("id",3)->first();

        $toyota=count($toyota->Vehiculos);
        $mazda=count($mazda->Vehiculos);
        $chevrolet=count($chevrolet->Vehiculos);
        return view("estadisticas",["toyota"=>$toyota,"mazda"=>$mazda,"chevrolet"=>$chevrolet]);


    }
    public function vistaRegistro(){
        $marcas=Marca::all();
        return view("registrar",["marcas"=>$marcas]);
    }

    public function registrar(){

        $datos=request()->validate(["marca"=>"exists:marcas,id","placa"=>"required",
            "name"=>"required","cedula"=>"required"],["marca.unique"=>"La marca no existe en el sistema"]);
        $newVehiculo=Vehiculo::create(["placa"=>$datos["placa"],"marca_id"=>$datos["marca"]]);
        //dd($newVehiculo);
        if($newVehiculo->wasRecentlyCreated){
            $persona=Persona::create(["nombre"=>$datos["name"],"cedula"=>$datos["cedula"],"vehiculo_id"=>$newVehiculo->id]);
          //  dd($persona);

            return view("inicio");
}


    }
}
