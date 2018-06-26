<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanificacionCirugia extends Model
{
    protected $guarded = [];
    public function servicios()
    {
        return $this->belongsToMany(Servicios::class);
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
    public function cirujano()
    {
        return $this->belongsTo(Cirujano::class);
        
    }
    public function tipo_cirugia()
    {
        return $this->belongsTo(TipoCirugia::class);
    }
    public function reservacion()
    {
        return $this->belongsTo(Reservacion::class);
    }
    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }
    public function personals()
    {
        return $this->hasMany(PersonalQuirurgico::class);
    }

}
