<?php

use Illuminate\Database\Seeder;

class EtniasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etnias')->insert([
        	'etnia'=>'AFRODESCENDIENTE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('etnias')->insert([
        	'etnia'=>'BLANCO/A',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('etnias')->insert([
        	'etnia'=>'INDIGENA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('etnias')->insert([
        	'etnia'=>'MESTIZO/A',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('etnias')->insert([
        	'etnia'=>'MONTUBIO/A',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
