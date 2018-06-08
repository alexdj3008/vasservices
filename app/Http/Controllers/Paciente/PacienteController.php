<?php

namespace App\Http\Controllers\Paciente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Paciente;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class PacienteController extends Controller
{
    public function edit(User $user)
    {
        return view('usuario.perfil.ipaciente',compact('user'));
    }
    public function update(User $user,Request $request)
    {
        $paciente=new Paciente;
        $this->validate($request,[
            'name'=>'required',
            'email' => Rule::unique('users')->ignore($user->id)
            ]);
        $user->name=$request->get('name');
        if($request->filled('password'))
        {
            $user->password=$request->get('password');
        }            
        $user->paciente->direccion = $request->get('direccion');
        $user->paciente->telefono = $request->get('telefono');
        $user->paciente->edad = $request->get('edad');
        $paciente=$user->paciente;
        $paciente->save();
        $user->save();
        return back()->with('flash','Paciente modificado');
    }
    public function storefoto(User $user)
    {
        $paciente=new Paciente;
        $this->validate(request(),[
            'foto'=>'image'
        ]);
        $foto=request()->file('foto')->store('public');
        $user->paciente->imagen=Storage::url($foto);
        $paciente=$user->paciente;
        $paciente->save();
    }
}
