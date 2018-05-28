<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quirofano extends Model
{
    protected $guarded=[];
    
        public function clinica(){
            return $this->belongsTo(Clinica::class);
        }
}
