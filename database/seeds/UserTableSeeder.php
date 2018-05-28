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

        $adminRole=Role::create(['name'=>'Admin']);
        $medicoRole=Role::create(['name'=>'Medico']);
        $pacienteRole=Role::create(['name'=>'Paciente']);

        $admin = new User; 
        $admin->name="Alexis Goyo";
        $admin->email="alexis@gmail.com";
        $admin->password=bcrypt("123123");
        $admin->save();
        $admin->assignRole($adminRole);
        
        $medico = new User; 
        $medico->name="Joselyn Piña";
        $medico->email="joselyn@gmail.com";
        $medico->password=bcrypt("123456");
        $medico->save();
        $medico->assignRole($medicoRole);
        
        $paciente = new User; 
        $paciente->name="Miguel Blanco";
        $paciente->email="miguel@gmail.com";
        $paciente->password=bcrypt("654321");
        $paciente->save();
        $paciente->assignRole($pacienteRole);
    }
}
