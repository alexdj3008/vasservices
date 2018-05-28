<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::truncate();
        $estado = new Estado; 
        $estado->nombre="Amazonas";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Anzoátegui";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Apure";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Aragua";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Barinas";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Bolívar";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Carabobo";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Cojedes";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Delta Amacuro";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Distrito Capital";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Falcón";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Guárico";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Lara";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Mérida";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Miranda";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Monagas";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Nueva Esparta";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Portuguesa";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Sucre";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Táchira";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Trujillo";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Vargas";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Yaracuy";
        $estado->save();
        $estado = new Estado;
        $estado->nombre="Zulia";
        $estado->save();
               
    }
}
