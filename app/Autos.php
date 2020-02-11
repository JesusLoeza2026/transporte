<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
   protected $table='autos';
   protected $primaryKey='id_auto';
   protected $with=['choferes'];
    
    
    public $timestamps=false;
    // para autoincrementar numeros en caso de ser una clave primaria entera.
    // public $incrementing=false;

    public $fillable=[
    	'id_auto',
    	'nombre',
    	'cantidad',
        'activo',
        'updated_at',
        'sku',
        'id_chofer'

    ];
    public function choferes(){
        return $this->belongsTo(Chofer::class,'id_chofer','id_chofer');
       
   }
}
