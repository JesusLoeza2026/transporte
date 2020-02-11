<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
   protected $table='turnos';
   protected $primaryKey='id_turno';
    
    

    // para fechas 
    // public $timestamps=false;
    // para autoincrementar numeros en caso de ser una clave primaria entera.
    // public $incrementing=false;

    public $fillable=[
    	'id_turno',
    	'turno'
    ];
}
