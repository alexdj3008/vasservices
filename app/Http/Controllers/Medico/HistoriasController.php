<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HistoriaMedica;
class HistoriasController extends Controller
{
    public function listadohistorias()
    {
        $historias=HistoriaMedica::where("estatus","=","A")->get();
        return view('medico.historias.index',compact('historias'));
    }  
    public function view(HistoriaMedica $historia)
    {
        return view('medico.historias.view',compact('historia'));
    }  
    
    public function edit(HistoriaMedica $historia)
    {
        return view('medico.historias.iedithistoria',compact('historia'));
    }
    public function update(HistoriaMedica $historia,Request $request)
    {
        $historia->update($request->all());
        return back()->with('flash','Historia médica actualizada con éxito');
    }
}
