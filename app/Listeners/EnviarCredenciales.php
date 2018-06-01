<?php

namespace App\Listeners;

use App\Events\UsuarioFueCreado;
use App\Mail\LoginCredentials;
use Illuminate\Support\Facades\Mail;

class EnviarCredenciales
{
    /**
     * Handle the event.
     *
     * @param  UsuarioFueCreado  $event
     * @return void
     */
    public function handle(UsuarioFueCreado $event)
    {
        // dd($event->user->toArray(),$event->password);
        Mail::to($event->user)->queue(
            new LoginCredentials($event->user, $event->password)
        );
    }
}
