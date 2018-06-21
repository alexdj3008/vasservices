<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Agenda;
class AgendaController extends Controller
{
    public function agenda(User $user)
    {
        $agendas=Agenda::where("cirujano_id","=",$user->cirujano->id)->get();
        return view('medico.agenda.index',compact('agendas'));
    }    
}
