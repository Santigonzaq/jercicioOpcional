<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table="personas";
    public $timestamps = false;
    public $fillable=["nombre","cedula","vehiculo_id"];
}
