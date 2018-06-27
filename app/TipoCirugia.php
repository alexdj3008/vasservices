<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCirugia extends Model
{
    protected $guarded=[];
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
    public function clinicas()
    {
        return $this->belongsToMany(Clinica::class);
    }
    public static function tratamientos($id)
    {
        return TipoCirugia::where('tipo_cirugias.especialidad_id','=',$id)
        ->where('tipo_cirugias.estatus','=','A')->get();
    }
    
}
