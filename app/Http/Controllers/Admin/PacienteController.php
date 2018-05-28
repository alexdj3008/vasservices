<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;
class PacienteController extends Controller
{
    public function listadopacientes()
    {
        $pacientes=Paciente::where("estatus","=","A")->get();
        return view('admin.pacientes.index',compact('pacientes'));
    }
}
