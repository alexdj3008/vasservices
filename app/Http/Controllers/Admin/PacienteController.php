<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\Historia;
class PacienteController extends Controller
{
    public function listadopacientes()
    {
        $pacientes=Paciente::where("estatus","=","A")->get();
        return view('admin.pacientes.index',compact('pacientes'));
    }
    public function delete(Paciente $paciente)
    {
        $history=$paciente->historia;
        $paciente->estatus="E";
        $paciente->save();
        $history->estatus="E";
        $history->save();
        return back()->with('flash','Paciente eliminado con éxito');
    }
    
    public function view(Paciente $paciente)
    {
        
        return view('admin.pacientes.view',compact('paciente'));
    }
}
