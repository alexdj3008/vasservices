<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Clinica;
use App\Estado;
use Illuminate\Support\Facades\Storage;

class ClinicasController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listadoclinicas()
    {
        $clinicas=Clinica::where("estatus","=","A")->get();
        return view('admin.clinicas.index',compact('clinicas'));
    }    
    public function create()
    {
        $estados=Estado::all();
        return view('admin.clinicas.icreateclinica',compact('estados'));
    }    
    public function store(Request $request)
    {
        // return Clinica::create($request->all());
        $this->validate($request,[
         'rif' => 'required|string|max:12|unique:clinicas'
        ]);
        $clinica=new Clinica;
        $clinica->nombre=$request->get('nombre');
        $clinica->rif=$request->get('rif');
        $clinica->estado_id=$request->get('estado');
        $clinica->direccion=$request->get('direccion');
        $clinica->descripcion=$request->get('descripcion');
        $clinica->email=$request->get('email');
        $clinica->estatus="A";
        $clinica->save();
        $clinicas=Clinica::where("estatus","=","A")->get();
        return redirect()->route('admin.clinicas.index',compact('clinicas'))->with('flash','Registro realizado con éxito');
    }
    public function storefoto(Clinica $clinica)
    {
        $this->validate(request(),[
            'foto'=>'image'
        ]);
        $foto=request()->file('foto')->store('public');
        $clinica->imagen=Storage::url($foto);
        $clinica->save();
    }
    public function edit(Clinica $clinica)
    {
        $estados=Estado::all();
        return view('admin.clinicas.ieditclinica',compact('clinica','estados'));
    }
    public function update(Clinica $clinica,Request $request)
    {
        $this->validate($request,[
            'rif' => 'required|string|max:13',
            'rif' => Rule::unique('clinicas')->ignore($clinica->id)
           ]);
        $clinica->nombre=$request->get('nombre');
        $clinica->rif=$request->get('rif');
        $clinica->estado_id=$request->get('estado');
        $clinica->direccion=$request->get('direccion');
        $clinica->descripcion=$request->get('descripcion');
        $clinica->email=$request->get('email');
        $clinica->estatus="A";
        $clinica->save();
        return back()->with('flash','Clínica modificada con éxito');
    }
    public function delete(Clinica $clinica,Request $request)
    {
        $clinica->estatus="E";
        $clinica->save();
        return back()->with('flash','Clínica eliminada con éxito');
    }
}

