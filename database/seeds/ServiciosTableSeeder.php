<?php

use Illuminate\Database\Seeder;
use App\Servicios;
class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicios::truncate();
        $servicio = new Servicios;
        $servicio->nombre="Traduccion";
        $servicio->descripcion="";
        $servicio->estatus='A';
        $servicio->save();

        $servicio = new Servicios;
        $servicio->nombre="Hotel";
        $servicio->descripcion="";
        $servicio->estatus='A';
        $servicio->save();

        $servicio = new Servicios;
        $servicio->nombre="Servicio Gastronómico";
        $servicio->descripcion="";
        $servicio->estatus='A';
        $servicio->save();

        $servicio = new Servicios;
        $servicio->nombre="Enfermera particular";
        $servicio->descripcion="";
        $servicio->estatus='A';
        $servicio->save();

        $servicio = new Servicios;
        $servicio->nombre="Traduccion";
        $servicio->descripcion="";
        $servicio->estatus='A';
        $servicio->save();
    }
}
