<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $dates=['fecha'];
    public function reservacion()
    {
        return $this->belongsTo(Reservacion::class);
    }
}
