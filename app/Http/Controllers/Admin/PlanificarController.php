<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PlanificacionCirugia;
use App\Reservacion;
use Carbon\Carbon;
use App\Agenda;
use App\Insumo;
use App\PersonalQuirurgico;
use DB;
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
        
        //verifica si existe previamente una planificacion con los mismos datos de fecha, quirofano y clinica
        $validacion=DB::table('reservacions')
        ->select('reservacions.id','reservacions.fecha')
        ->join('quirofanos','reservacions.quirofano_id','=','quirofanos.id')
        ->where("reservacions.fecha","=",Carbon::parse($request->fecha))
        ->where("reservacions.quirofano_id","=",$request->quirofano)
        ->get();
        
        if($validacion->isEmpty())
        {
            $reservacion=new Reservacion;
            $reservacion->planificacion_cirugia_id=$planificacion->id;
            $reservacion->quirofano_id=$request->quirofano;
            $reservacion->fecha=Carbon::parse($request->fecha);
            $reservacion->estatus="A";
            $reservacion->save();
            $planificacion->reservacion_id=$reservacion->id;
            $planificacion->estatus="A";
            $planificacion->save();
            $insumos=[];
            foreach($request->get('insumos') as $insumo)
            {
                $insumos[]=Insumo::create(['descripcion'=>$insumo,'planificacion_cirugia_id'=>$planificacion->id,'estatus'=>'A']);
            }
            PersonalQuirurgico::create(['nombre'=>$request->get('nombre'),'cargo'=>$request->get('cargo'),'planificacion_cirugia_id'=>$planificacion->id,'estatus'=>'A']);
            PersonalQuirurgico::create(['nombre'=>$request->get('nombre_1'),'cargo'=>$request->get('cargo_1'),'planificacion_cirugia_id'=>$planificacion->id,'estatus'=>'A']);
            $agenda=new Agenda;

            $agenda->reservacion_id=$reservacion->id;
            $agenda->cirujano_id=$planificacion->cirujano_id;
            $agenda->estatus="A";
            $agenda->save();
            // return $request;
            return back()->with('flash','Registro actualizado con éxito');
        }
        return back()->with('flashd','Fecha ya ocupada, elija otra fecha u otro quírofano');
        
    }
    
}
