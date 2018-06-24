<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Quirofano;
use App\Clinica;
class QuirofanosController extends Controller
{
    public function listadoquirofanos()
    {
        $quirofanos=Quirofano::select('quirofanos.id','quirofanos.numero','quirofanos.descripcion','quirofanos.clinica_id')->distinct()
        ->join('cirujano_clinica', 'quirofanos.clinica_id', '=', 'cirujano_clinica.clinica_id')
        ->where('quirofanos.estatus', '=', 'A')
        ->where("cirujano_clinica.cirujano_id","=",Auth::user()->cirujano->id)
        ->get();
        
        return view('medico.quirofanos.index',compact('quirofanos'));
    }   
    public function view(Quirofano $quirofano)
    {
        $clinicas=Clinica::where("estatus","=","A")->get();
        return view('medico.quirofanos.view',compact('quirofano','clinicas'));
    }
}
