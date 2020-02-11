<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table='administrador';
    protected $primaryKey='sku';


    // para fechas 
    // public $timestamps=false;
    // para autoincrementar numeros en caso de ser una clave primaria entera.
    // public $incrementing=false;

    public $fillable=[
        'sku',
        'nombres',
        'apellidos',
        'usuario',
        'password',
        'rol',
    

    ];
}
