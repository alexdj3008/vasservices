<?php

namespace App;
use App\Especialidads;
use App\Clinica;
use DB;
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
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function cirujanos($id)
    {
        return DB::table('cirujanos')
        ->select('cirujanos.id','users.name')
        ->join('especialidads','especialidads.id','=','cirujanos.especialidad_id')
        ->join('users','users.id','=','cirujanos.user_id')
        ->where('especialidads.id','=',$id)->get();
    }
}
