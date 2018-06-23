<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $dates=['fecha'];
    public function planificacion()
    {
        return $this->hasOne(PlanificacionCirugia::class);
    }
    public function quirofano()
    {
        return $this->belongsTo(Quirofano::class);
    }
}
