<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TipoCirugia;
use App\Especialidad;
use App\Clinica;

class TipoCirugiasController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listadotiposcirugias()
    {
        $tiposcirugias=TipoCirugia::where("estatus","=","A")->get();
        return view('admin.tipocirugia.index',compact('tiposcirugias'));
    }    
    public function create()
    {
        $clinicas=Clinica::where("estatus","=","A")->get();
        $especialidades=Especialidad::all();
        return view('admin.tipocirugia.icreatetipocirugia',compact('especialidades','clinicas'));
    }    
    public function store(Request $request)
    {
        // return Clinica::create($request->all());
        $tipocirugia=new TipoCirugia;
        $tipocirugia->nombre=$request->get('nombre');
        $tipocirugia->especialidad_id=$request->get('especialidad');
        $tipocirugia->descripcion=$request->get('descripcion');
        $tipocirugia->estatus="A";
        $tipocirugia->save();
        $tipocirugia->clinicas()->attach($request->get('clinicas'));
        return back()->with('flash','Tipo de cirugía creada');
    }
    public function edit(TipoCirugia $tipocirugia)
    {
        $especialidades=Especialidad::all();
        return view('admin.tipocirugia.iedittipocirugia',compact('tipocirugia','especialidades'));
    }
    public function update(TipoCirugia $tipocirugia,Request $request)
    {
        $tipocirugia->nombre=$request->get('nombre');
        $tipocirugia->especialidad_id=$request->get('especialidad');
        $tipocirugia->descripcion=$request->get('descripcion');
        $tipocirugia->estatus="A";
        $tipocirugia->save();
        return back()->with('flash','Tipo de Cirugia modificada');
    }
    public function delete(TipoCirugia $tipocirugia,Request $request)
    {
        $tipocirugia->estatus="E";
        $tipocirugia->save();
        return back()->with('flash','Tipo de cirugía Eliminada');
    }
}
