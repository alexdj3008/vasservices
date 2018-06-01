<?php

namespace App;
use App\Especialidads;
use App\Clinica;
use Illuminate\Database\Eloquent\Model;

class Cirujano extends Model
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
}
