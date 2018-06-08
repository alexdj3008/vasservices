<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Cirujano;
use App\Clinica;
use App\User;
use App\Especialidad;
use Illuminate\Support\Facades\Storage;
class CirujanoController extends Controller
{

    public function index()
    {
        return view('medico.dashboard');
    }

    public function edit(User $user)
    {
        $especialidades = Especialidad::all();
        $clinicas=Clinica::where("estatus","=","A")->get();
        return view('medico.perfil.ieditcirujano', compact('user', 'especialidades','clinicas'));
    }
    public function update(User $user, Request $request)
    {
        $cirujano=new Cirujano;
        
        $this->validate($request,[
            'name'=>'required',
            'email' => Rule::unique('users')->ignore($user->id)
            ]);
        $user->name=$request->get('name');
        if($request->filled('password'))
        {
            $user->password=$request->get('password');
        }            
        $user->cirujano->especialidad_id = $request->get('especialidad');
        // $cirujano->telefono = $request->get('telefono');
        $user->cirujano->descripcion = $request->get('descripcion');
        $user->cirujano->clinicas()->sync($request->get('clinicas'));
        $cirujano=$user->cirujano;
        $cirujano->save();
        return back()->with('flash', 'Cirujano modificado');
    }

    public function storefoto(User $user)
    { 
        $cirujano=new Cirujano;
        $this->validate(request(),[
            'foto'=>'image'
        ]);
        $foto=request()->file('foto')->store('public');
        $user->cirujano->imagen=Storage::url($foto);
        $cirujano=$user->cirujano;
        $cirujano->save();
    }
}
