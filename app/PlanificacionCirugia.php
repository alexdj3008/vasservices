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
}
