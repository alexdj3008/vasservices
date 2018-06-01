<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $guarded = [];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
    public function quirofanos()
    {
        return $this->hasMany(Quirofano::class);
    }
    public function tratamientos()
    {
        return $this->belongsToMany(TipoCirugia::class);
    }
    public function cirujanos()
    {
        return $this->belongsToMany(Cirujano::class);
    }
}
