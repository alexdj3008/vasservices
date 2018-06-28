<?php

namespace App\Http\Controllers\Admin;
use DB;
use Charts;
use App\User;
use App\Clinica;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\PlanificacionCirugia;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))
            ->get();
        $chart = Charts::database($pacientes, 'bar', 'highcharts')
            ->title("Usuarios registrados por mes")
            ->elementLabel("Total de pacientes registrados")
            ->dimensions(800, 500)
            ->responsive(true)
            ->groupByMonth(date('Y'), true);
        $planificacion=User::select("name")
        ->join("cirujanos","cirujanos.user_id","=","users.id")
        ->join("planificacion_cirugias","planificacion_cirugias.cirujano_id","=","cirujanos.id")
        ->get();
        $nombres= User::select("name")->distinct()
        ->join("cirujanos","cirujanos.user_id","=","users.id")
        ->join("planificacion_cirugias","planificacion_cirugias.cirujano_id","=","cirujanos.id")
        ->get();
        $pc = PlanificacionCirugia::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))
        ->get();
        $chart3 = Charts::database($pc, 'bar', 'highcharts')
        ->title("Cirugias solicitadas por mes")
        ->elementLabel("Total de cirugias registradss")
        ->dimensions(800, 500)
        ->responsive(true)
        ->groupByMonth(date('Y'), true);
        // return $planificacion;
        $chart2 = Charts::database($planificacion, 'pie', 'highcharts')
        ->title("Médicos mas solicitados")
        ->elementLabel("")
        ->dimensions(800, 500)
        ->responsive(true)
        ->groupBy("name", true);
        
        return view('admin.dashboard', compact('chart','chart2','chart3'));
        $clinicas = Clinica::all();
        return view('admin.dashboard', compact('clinicas'));
    }
}
