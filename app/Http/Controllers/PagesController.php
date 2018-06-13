<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clinica;
use App\Estado;
use App\TipoCirugia;
use App\Especialidad;
use App\Servicios;
use App\Cirujano;
class PagesController extends Controller
{
    public function home(){
        return view('usuario/welcome');
    }
    public function clinicas(){
       $estados=DB::table('estados')
        ->select('estados.id','estados.nombre')->distinct()
        ->join('clinicas','clinicas.estado_id','=','estados.id')
        ->where('clinicas.estatus','=','A')
        ->get();
        $clinicas=Clinica::where("estatus","=","A")->orderBy('estado_id')->get();
        return view('usuario/iclinicas',compact('clinicas','estados'));
    }

    public function clinica(Clinica $clinica)
    {
        
        return view('usuario.clinicas.view',compact('clinica'));
    }
    public function tipocirugia(TipoCirugia $tratamiento)
    {
        
        return view('usuario.tratamientos.view',compact('tratamiento'));
    }
    
    public function servicios(){
        $servicios=Servicios::where("estatus","=","A")->get();
        return view('usuario/iservicios',compact('servicios'));
    }
    public function servicio(Servicios $servicio)
    {
        return view('usuario.servicios.view',compact('servicio'));
    }
    public function cirujanos(){
        
        $especialidades=DB::table('especialidads')
        ->select('especialidads.id','especialidads.descripcion')->distinct()
        ->join('cirujanos','cirujanos.especialidad_id','=','especialidads.id')
        ->where('cirujanos.estatus','=','A')
        ->get();
        $cirujanos=Cirujano::where("estatus","=","A")->orderBy('especialidad_id')->get();
        return view('usuario/icirujanos',compact('cirujanos','especialidades'));
    }
    public function cirujano(Cirujano $cirujano)
    {
        
        return view('usuario.cirujanos.view',compact('cirujano'));
    }
    public function tratamientos(){
        $especialidades=DB::table('especialidads')
        ->select('especialidads.id','especialidads.descripcion')->distinct()
        ->join('tipo_cirugias','tipo_cirugias.especialidad_id','=','especialidads.id')
        ->where('tipo_cirugias.estatus','=','A')
        ->get();
        $tratamientos=TipoCirugia::where("estatus","=","A")->orderBy('especialidad_id')->get();
        return view('usuario/itratamientos',compact('tratamientos','especialidades'));
    }
}
