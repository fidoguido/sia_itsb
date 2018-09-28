<?php

use Illuminate\Database\Seeder;

class DiscapacidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discapacidades')->insert([
        	'discapacidad'=>'AUDITIVA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('discapacidades')->insert([
        	'discapacidad'=>'FÍSICA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('discapacidades')->insert([
        	'discapacidad'=>'INTELECTUAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('discapacidades')->insert([
        	'discapacidad'=>'LENGUAJE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('discapacidades')->insert([
        	'discapacidad'=>'PSICO-SOCIAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('discapacidades')->insert([
        	'discapacidad'=>'VISUAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
