<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    protected $table='choferes';
    protected $primaryKey='id_chofer';
    protected $with=['turno'];
    


    // para fechas 
    public $timestamps=false;
    // para autoincrementar numeros en caso de ser una clave primaria entera.
    // public $incrementing=false;

    public $fillable=[
    	'id_chofer',
    	'nombre',
    	'apellido',
    	'activo',
        'id_turno'
        

    ];

     public function turno(){
         return $this->belongsTo(Turno::class,'id_turno','id_turno');
        
    }

    


}
