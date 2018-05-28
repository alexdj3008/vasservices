<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servicios;
class ServiciosController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listadoservicios()
    {
        $servicios=Servicios::where("estatus","=","A")->get();
        return view('admin.servicios.index',compact('servicios'));
    }    
    public function create()
    {
        return view('admin.servicios.icreateservicio');
    }    
    public function store(Request $request)
    {
        // return Clinica::create($request->all());
        $servicio=new Servicios;
        $servicio->nombre=$request->get('nombre');
        $servicio->descripcion=$request->get('descripcion');
        $servicio->estatus="A";
        $servicio->save();
        return back()->with('flash','Servicio adicional creado');
    }
    public function edit(Servicios $servicio)
    {
        return view('admin.servicios.ieditservicio',compact('servicio'));
    }
    public function update(Servicios $servicio,Request $request)
    {
        $servicio->nombre=$request->get('nombre');
        $servicio->descripcion=$request->get('descripcion');
        $servicio->estatus="A";
        $servicio->save();
        return back()->with('flash','Servicio adicional modificado');
    }
    public function delete(Servicios $servicio,Request $request)
    {
        $servicio->estatus="E";
        $servicio->save();
        return back()->with('flash','Servicio adicional Eliminado');
    }
}
