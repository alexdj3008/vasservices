<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaMedica extends Model
{
    protected $guarded=[];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
