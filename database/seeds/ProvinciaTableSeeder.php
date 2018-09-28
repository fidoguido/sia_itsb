<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('provincias')->insert([
            'idProvincia'=>1,
            'codProvincia' => '01',
            'Provincia' => 'AZUAY',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>2,
            'codProvincia' => '02',
            'Provincia' => 'BOLIVAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('provincias')->insert([
            'idProvincia'=>3,
            'codProvincia' => '03',
            'Provincia' => 'CAÑAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>4,
            'codProvincia' => '04',
            'Provincia' => 'CARCHI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>5,
            'codProvincia' => '05',
            'Provincia' => 'COTOPAXI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>6,
            'codProvincia' => '06',
            'Provincia' => 'CHIMBORAZO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>7,
            'codProvincia' => '07',
            'Provincia' => 'EL ORO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>8,
            'codProvincia' => '08',
            'Provincia' => 'ESMERALDAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>9,
            'codProvincia' => '09',
            'Provincia' => 'GUAYAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>10,
            'codProvincia' => '10',
            'Provincia' => 'IMBABURA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>11,
            'codProvincia' => '11',
            'Provincia' => 'LOJA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>12,
            'codProvincia' => '12',
            'Provincia' => 'LOS RIOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>13,
            'codProvincia' => '13',
            'Provincia' => 'MANABI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

       	DB::table('provincias')->insert([
            'idProvincia'=>14,
            'codProvincia' => '14',
            'Provincia' => 'MORONA SANTIAGO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

       	DB::table('provincias')->insert([
            'idProvincia'=>15,
            'codProvincia' => '15',
            'Provincia' => 'NAPO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

       	DB::table('provincias')->insert([
            'idProvincia'=>16,
            'codProvincia' => '16',
            'Provincia' => 'PASTAZA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
  		
  		DB::table('provincias')->insert([
            'idProvincia'=>17,
            'codProvincia' => '17',
            'Provincia' => 'PICHINCHA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

  		DB::table('provincias')->insert([
            'idProvincia'=>18,
            'codProvincia' => '18',
            'Provincia' => 'TUNGURAHUA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

  		DB::table('provincias')->insert([
            'idProvincia'=>19,
            'codProvincia' => '19',
            'Provincia' => 'ZAMORA CHINCHIPE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>20,
            'codProvincia' => '20',
            'Provincia' => 'GALAPAGOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>21,
            'codProvincia' => '21',
            'Provincia' => 'SUCUMBIOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>22,
            'codProvincia' => '22',
            'Provincia' => 'ORELLANA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>23,
            'codProvincia' => '23',
            'Provincia' => 'SANTO DOMINGO DE LOS TSACHILAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);

        DB::table('provincias')->insert([
            'idProvincia'=>24,
            'codProvincia' => '24',
            'Provincia' => 'SANTA ELENA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
