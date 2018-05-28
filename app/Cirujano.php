<?php

namespace App;
use App\Especialidads;
use Illuminate\Database\Eloquent\Model;

class Cirujano extends Model
{
    protected $guarded=[];
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
}
