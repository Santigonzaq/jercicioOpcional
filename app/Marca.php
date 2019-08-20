<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table="marcas";
    public $timestamps = false;

    public function Vehiculos(){
        return $this->hasMany(Vehiculo::class,"marca_id","id");
    }
}
