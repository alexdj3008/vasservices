<?php

namespace App\Http\Controllers\Paciente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PlanificacionCirugia;
use App\TipoCirugia;
use App\Estado;
use App\Especialidad;
use App\Cirujano;
use App\Clinica;
use Illuminate\Support\Facades\DB;
class CitasController extends Controller
{

    //Método que redirige a la página correspondiente para registrar una solicitud de cirugía
    public function create()
    {
        $estados=DB::table('estados')
        ->select('estados.id','estados.nombre')->distinct()
        ->join('clinicas','clinicas.estado_id','=','estados.id')
        ->where('clinicas.estatus','=','A')
        ->get();
        $especialidades=DB::table('especialidads')
        ->select('especialidads.id','especialidads.descripcion')->distinct()
        ->join('tipo_cirugias','tipo_cirugias.especialidad_id','=','especialidads.id')
        ->where('tipo_cirugias.estatus','=','A')
        ->get(); 
        $tratamientos=TipoCirugia::where("estatus","=","A")->orderBy('especialidad_id')->get();
        $cirujanos=Cirujano::where("estatus","=","A")->orderBy('especialidad_id')->get();
        $clinicas=Clinica::where("estatus","=","A")->orderBy('estado_id')->get();
        return view('usuario.cita.icita',compact('estados','especialidades','tratamientos','cirujanos','clinicas'));
    } 
    
    //Método para registrar en la base de datos la solicitud de cirugía por parte del paciente
    public function store(Request $request)
    {
        // return PlanificacionCirugia::create($request->all());
        $cita=new PlanificacionCirugia;
        $cita->tipo_cirugia_id=$request->get('tratamiento');
        $cita->cirujano_id=$request->get('tratamiento');
        $cita->responsable='Ana mercedes';
        $cita->parentesco='profesora';
        $cita->estatus="P";
        // return $cita;   
        $cita->save();
        
        return redirect()->route('login');
    }
}
