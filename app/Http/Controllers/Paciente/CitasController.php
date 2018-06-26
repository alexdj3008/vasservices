<?php

namespace App\Http\Controllers\Paciente;

use App\Cirujano;
use App\Clinica;
use App\Http\Controllers\Controller;
use App\PlanificacionCirugia;
use App\Servicios;
use App\TipoCirugia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
class CitasController extends Controller
{

    //Método que redirige a la página correspondiente para registrar una solicitud de cirugía
    public function create()
    {
        $servicios = Servicios::where("estatus", "=", "A")->get();
        $estados = DB::table('estados')
            ->select('estados.id', 'estados.nombre')->distinct()
            ->join('clinicas', 'clinicas.estado_id', '=', 'estados.id')
            ->where('clinicas.estatus', '=', 'A')
            ->get();
        $especialidades = DB::table('especialidads')
            ->select('especialidads.id', 'especialidads.descripcion')->distinct()
            ->join('tipo_cirugias', 'tipo_cirugias.especialidad_id', '=', 'especialidads.id')
            ->where('tipo_cirugias.estatus', '=', 'A')
            ->get();
        $tratamientos = TipoCirugia::where("estatus", "=", "A")->orderBy('especialidad_id')->get();
        $cirujanos = Cirujano::where("estatus", "=", "A")->get();
        $clinicas = Clinica::where("estatus", "=", "A")->orderBy('estado_id')->get();
        return view('usuario.cita.icita', compact('estados', 'especialidades', 'tratamientos', 'cirujanos', 'clinicas', 'servicios'));
    }

    //Método para registrar en la base de datos la solicitud de cirugía por parte del paciente
    public function store(Request $request)
    {
        // return PlanificacionCirugia::create($request->all());
        $cita = new PlanificacionCirugia;
        $cita->tipo_cirugia_id = $request->get('tratamiento');
        $cita->cirujano_id = $request->get('cirujano');
        $cita->responsable = $request->get('responsable');
        $cita->parentesco = $request->get('parentesco');
        $cita->estatus = "P"; //Se guarda como pendiente por planificar

        $cita->paciente_id = Auth::user()->paciente->id;
        $cita->save();
        $cita->servicios()->sync($request->get('servicios'));
        $cirujano=Cirujano::find($request->get('cirujano'));
        return redirect()->route('paciente.infocirujano',compact('cirujano'))->with('flash','Solicitud de cirugía registrada');
    }
    public function cirujano(Cirujano $cirujano)
    {
        return view('usuario.cita.infocirujano',compact('cirujano'));
    }
    public function listadoplanificacion(User $user)
    {
        $planificacions=PlanificacionCirugia::where("estatus","=","A")->where("paciente_id","=",$user->paciente->id)->get();
        return view('usuario.planificacion.index',compact('planificacions'));
    }      
    public function view(PlanificacionCirugia $planificacion)
    {
        return view('usuario.planificacion.view',compact('planificacion'));
    }  
}
