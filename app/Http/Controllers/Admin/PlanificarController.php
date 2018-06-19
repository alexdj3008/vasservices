<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PlanificacionCirugia;
class PlanificarController extends Controller
{
    public function listadocitas()
    {
        $citas=PlanificacionCirugia::all();
        // return $citas;
        return view('admin.planificar.index',compact('citas'));
        
    }    
    
    
    public function edit(HistoriaMedica $historia)
    {
        return view('medico.historias.iedithistoria',compact('historia'));
    }
    public function update(HistoriaMedica $historia,Request $request)
    {
        $historia->update($request->all());
        return back()->with('flash','Historia medica modificada con éxito');
    }
    
}
