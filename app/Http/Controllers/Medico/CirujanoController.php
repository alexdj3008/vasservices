<?php

namespace App\Http\Controllers\Medico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Cirujano;
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
        
        return view('medico.perfil.ieditcirujano', compact('user', 'especialidades'));
    }
    public function update(User $user, Request $request)
    {
        $cirujano=$user->cirujano;
        $this->validate($request,[
            'name'=>'required',
            'email' => Rule::unique('users')->ignore($user->email)
           ]);
        $user->name=$request->get('name');
        if($request->filled('password'))
        {
            $user->password=$request->get('password');
        }            
        $cirujano->especialidad_id = $request->get('especialidad');
        // $cirujano->telefono = $request->get('telefono');
        $cirujano->descripcion = $request->get('descripcion');
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
