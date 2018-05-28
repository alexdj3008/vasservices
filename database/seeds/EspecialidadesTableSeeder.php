<?php

use Illuminate\Database\Seeder;
use App\Especialidad;
class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::truncate();
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Cirugía General";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Odontología";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Cirugía Plástica y Estética";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Ginecología";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Oftalmología";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Otorrinolaringología";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Traumatología";
        $especialidad->estatus='A';
        $especialidad->save(); 
        $especialidad = new Especialidad; 
        $especialidad->descripcion="Urología";
        $especialidad->estatus='A';
        $especialidad->save();
            
    }
}
