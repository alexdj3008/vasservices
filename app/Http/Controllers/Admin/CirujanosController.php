<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cirujano;
use App\User;
use App\Especialidad;
use App\Events\UsuarioFueCreado;
use Spatie\Permission\Models\Role;
class CirujanosController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listadocirujanos()
    {
        $cirujanos=Cirujano::where("estatus","=","A")->get();
        return view('admin.cirujanos.index',compact('cirujanos'));
    }    
    public function create()
    {
        $especialidades=Especialidad::all();
        return view('admin.cirujanos.icreatecirujano',compact('especialidades'));
    }    
    public function store(Request $request)
    {
        // return Clinica::create($request->all());
        $data=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
        ]);
        //genera una contraseña aleatoria de 8 caracteres
        $data['password']=str_random(8);
        //Instancia de cirujano y user
        $cirujano=new Cirujano;
        $user=User::create($data);
        $user->assignRole(Role::find(2));
        //Aignación de datos a cirujano
        $cirujano->user_id=$user->id;
        $cirujano->especialidad_id=$request->get('especialidad_id');
        $cirujano->estatus="A";
        $cirujano->save();
        
        //Envio de credenciales
        UsuarioFueCreado::dispatch($user,$data['password']);
        return redirect()->route('admin.cirujanos.index')->with('flash','Cirujano creado');
    }
    public function edit(Cirujano $cirujano)
    {
        $especialidades=Especialidad::all();
        return view('admin.cirujanos.ieditcirujano',compact('cirujano','especialidades'));
    }
    public function update(Cirujano $cirujano,Request $request)
    {
        $cirujano->nombre=$request->get('nombre');
        $cirujano->especialidad_id=$request->get('especialidad');
        $cirujano->telefono=$request->get('telefono');
        $cirujano->descripcion=$request->get('descripcion');
        $cirujano->estatus="A";
        $cirujano->save();
        return back()->with('flash','Cirujano modificado');
    }
    public function delete(Cirujano $cirujano,Request $request)
    {
        $cirujano->estatus="E";
        $cirujano->save();
        return back()->with('flash','Cirujano Eliminado');
    }
}
