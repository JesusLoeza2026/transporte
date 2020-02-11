<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $primaryKey='id';
    protected $with=['choferes'];

    public $timestamps=false;
    // para autoincrementar numeros en caso de ser una clave primaria entera.
    // public $incrementing=false;

    public $fillable=[
    	'id',
    	'nombres',
    	'apellidos',
    	'fecha',
    	'lugar',
    	'dirrecion',
    	'activo',
    	'cupos',
    	'id_turno',
        'id_chofer'
    ];

     public function choferes(){
         return $this->belongsTo(Chofer::class,'id_chofer','id_chofer');
        
    }
   



}
