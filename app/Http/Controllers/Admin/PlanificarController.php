<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PlanificacionCirugia;
use App\Reservacion;
use Carbon\Carbon;
use App\Agenda;
class PlanificarController extends Controller
{
    public function listadocitas()
    {
        $citas=PlanificacionCirugia::all();
        // return $citas;
        return view('admin.planificar.index',compact('citas'));
        
    }    
    
    
    public function edit(PlanificacionCirugia $planificacion)
    {
        return view('admin.planificar.ieditplanificar',compact('planificacion'));
    }
    public function update(PlanificacionCirugia $planificacion,Request $request)
    {
        return $request;
        $reservacion=new Reservacion;
        $reservacion->planificacion_cirugia_id=$planificacion->id;
        $reservacion->quirofano_id=$request->quirofano;
        $reservacion->fecha=Carbon::parse($request->fecha);
        $reservacion->estatus="A";
        $reservacion->save();
        $planificacion->reservacion_id=$reservacion->id;
        $planificacion->estatus="A";
        $planificacion->save();
        $agenda=new Agenda;
        $agenda->fecha=Carbon::parse($request->fecha);
        $agenda->cirujano_id=$planificacion->cirujano_id;
        $agenda->estatus="A";
        $agenda->save();
        // return $request;
        return back()->with('flash','Historia medica modificada con éxito');
    }
    
}