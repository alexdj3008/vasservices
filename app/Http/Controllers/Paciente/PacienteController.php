<?php

namespace App\Http\Controllers\Paciente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Paciente;
use Illuminate\Support\Facades\DB;
class PacienteController extends Controller
{
    public function edit(User $user)
    {
        
        return view('usuario.perfil.ipaciente',compact('user'));
    }
    public function update(User $user,Request $request)
    {
        
        $user->name=$request->get('nombre');
        
        $user->save();
        return back()->with('flash','Paciente modificado');
    }
}
