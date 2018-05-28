<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function clinicas()
    {
        return $this->hasMany(Clinica::class);
    }
}
