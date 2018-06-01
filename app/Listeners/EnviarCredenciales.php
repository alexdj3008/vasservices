<?php

namespace App\Listeners;

use App\Events\UsuarioFueCreado;
use App\Mail\LoginCredentials;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        Mail::to($event->user)->queue(
            new LoginCredentials($event->user,$event->password)
        );
    }
}
