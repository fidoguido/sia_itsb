<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(NacionalidadesTableSeeder::class);
        $this->call(DiscapacidadesTableSeeder::class);
        $this->call(EtniasTableSeeder::class);
        //--
        $this->call(ProvinciaTableSeeder::class);
        $this->call(CantonTableSeeder::class);
        $this->call(ParroquiaTableSeeder::class);
    }
}
