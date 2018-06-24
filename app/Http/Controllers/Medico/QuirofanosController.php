<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quirofano;
class QuirofanosController extends Controller
{
    public function listadoquirofanos()
    {
        $quirofanos=Quirofano::where("estatus","=","A")->get();
        return view('medico.quirofanos.index',compact('quirofanos'));
    }   
}
