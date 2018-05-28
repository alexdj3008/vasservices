<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(EstadosTableSeeder::class);
        $this->call(EspecialidadesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ClinicasTableSeeder::class);
        $this->call(TiposCirugiaTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
