<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole=Role::create(['name'=>'admin']);
        $medicoRole=Role::create(['name'=>'medico']);
        $pacienteRole=Role::create(['name'=>'paciente']);

        $admin = new User; 
        $admin->name="Alexis Goyo";
        $admin->email="alexis@gmail.com";
        $admin->password="123123";
        $admin->save();
        $admin->assignRole($adminRole);
        
        $medico = new User; 
        $medico->name="Joselyn Piña";
        $medico->email="joselyn@gmail.com";
        $medico->password="123456";
        $medico->save();
        $medico->assignRole($medicoRole);
        
        $paciente = new User; 
        $paciente->name="Miguel Blanco";
        $paciente->email="miguel@gmail.com";
        $paciente->password="654321";
        $paciente->save();
        $paciente->assignRole($pacienteRole);
    }
}
