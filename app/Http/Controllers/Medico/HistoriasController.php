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
    public function create()
    {
        $estados=Estado::all();
        return view('admin.clinicas.icreateclinica',compact('estados'));
    }    
    public function store(Request $request)
    {
        // return Clinica::create($request->all());
        $this->validate($request,[
         'rif' => 'required|string|max:13|unique:clinicas'
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
    public function edit(HistoriaMedica $historia)
    {
        return view('medico.historias.iedithistoria',compact('historia'));
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
        return back()->with('flash','Clinica modificada con éxito');
    }
}
