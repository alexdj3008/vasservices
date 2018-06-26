<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Agenda;
use App\PlanificacionCirugia;
class AgendaController extends Controller
{
    public function agenda(User $user)
    {
        $agendas=Agenda::where("cirujano_id","=",$user->cirujano->id)->get();
        return view('medico.agenda.index',compact('agendas'));
    }  
    public function listadoplanificacion(User $user)
    {
        $planificacions=PlanificacionCirugia::where("estatus","=","A")->where("cirujano_id","=",$user->cirujano->id)->get();
        return view('medico.planificacion.index',compact('planificacions'));
    }      
    public function view(PlanificacionCirugia $planificacion)
    {
        return view('medico.planificacion.view',compact('planificacion'));
    }  
}
