<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Quirofano;
use App\Clinica;
class QuirofanosController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listadoquirofanos()
    {
        $quirofanos=Quirofano::where("estatus","=","A")->get();
        return view('admin.quirofanos.index',compact('quirofanos'));
    }    
    public function create()
    {
        $clinicas=Clinica::where("estatus","=","A")->get();
        return view('admin.quirofanos.icreatequirofano',compact('clinicas'));
    }    
    public function store(Request $request)
    {
        $quirofano=new Quirofano;
        $quirofano->numero=$request->get('numero');
        $quirofano->clinica_id=$request->get('clinica_id');
        $quirofano->descripcion=$request->get('descripcion');
        $quirofano->estatus="A";
        $quirofano->save();
        $quirofanos=Quirofano::where("estatus","=","A")->get();
        return redirect()->route('admin.quirofanos.index',compact('quirofanos'))->with('flash','Registro realizado con éxito');
    }
    public function edit(Quirofano $quirofano)
    {
        $clinicas=Clinica::where("estatus","=","A")->get();
        return view('admin.quirofanos.ieditquirofano',compact('quirofano','clinicas'));
    }
    public function update(Quirofano $quirofano,Request $request)
    {
        $quirofano->numero=$request->get('numero');
        $quirofano->descripcion=$request->get('descripcion');
        $quirofano->estatus="A";
        $quirofano->save();
        return back()->with('flash','Quirofano modificado con éxito');
    }
    public function delete(Quirofano $quirofano,Request $request)
    {
        $quirofano->estatus="E";
        $quirofano->save();
        return back()->with('flash','Quirófano eliminado con éxito');
    }
}
