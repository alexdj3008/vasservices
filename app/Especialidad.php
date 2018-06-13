<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    public function tipocirugias()
    {
        return $this->hasMany(TipoCirugia::class);
    }
    public function cirujanos()
    {
        return $this->hasMany(Cirujano::class);
    }
}
