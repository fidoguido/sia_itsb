<?php

use Illuminate\Database\Seeder;

class ParroquiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('parroquias')->insert([
        	'codParroquia'=>'010101',
            'parroquia'=>'BELLAVISTA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'010102',
            'parroquia'=>'CAÑARIBAMBA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);

    
	     DB::table('parroquias')->insert([
        	'codParroquia'=>'010103',
            'parroquia'=>'EL BATÁN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010104',
            'parroquia'=>'EL SAGRARIO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010105',
            'parroquia'=>'EL VECINO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		   DB::table('parroquias')->insert([
        	'codParroquia'=>'010106',
            'parroquia'=>'GIL RAMÍREZ DÁVALOS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        'codParroquia'=>'010107',
        'parroquia'=>'HUAYNACÁPAC',
        'tipo'=>'R',
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
        'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010108',
            'parroquia'=>'MACHÁNGARA',
            'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010109',
            'parroquia'=>'MONAY',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010110',
            'parroquia'=>'SAN BLAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010111',
            'parroquia'=>'SAN SEBASTIÁN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010112',
            'parroquia'=>'SUCRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010113',
            'parroquia'=>'TOTORACOCHA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010114',
            'parroquia'=>'YANUNCAY',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010115',
            'parroquia'=>'HERMANO MIGUEL',
			     'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010150',
            'parroquia'=>'CUENCA',
            'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010151',
            'parroquia'=>'BAÑOS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010152',
            'parroquia'=>'CUMBE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010153',
            'parroquia'=>'CHAUCHA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010155',
            'parroquia'=>'CHIQUINTAD',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010156',
            'parroquia'=>'LLACAO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010157',
            'parroquia'=>'MOLLETURO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010158',
            'parroquia'=>'NULTI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010159',
            'parroquia'=>'OCTAVIO CORDERO PALACIOS (SANTA ROSA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010160',
            'parroquia'=>'PACCHA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'010161',
            'parroquia'=>'QUINGEO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010162',
            'parroquia'=>'RICAURTE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010163',
            'parroquia'=>'SAN JOAQUÍN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'010164',
            'parroquia'=>'SANTA ANA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'010165',
            'parroquia'=>'SAYAUSÍ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'010166',
            'parroquia'=>'SIDCAY',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010167',
            'parroquia'=>'SININCAY',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'010168',
            'parroquia'=>'TARQUI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'010169',
            'parroquia'=>'TURI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010170',
            'parroquia'=>'VALLE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>1 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010171',
            'parroquia'=>'VICTORIA DEL PORTETE (IRQUIS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 1,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010250',
            'parroquia'=>'GIRÓN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 2,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010251',
            'parroquia'=>'ASUNCIÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 2,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010252',
            'parroquia'=>'SAN GERARDO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>2 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010350',
            'parroquia'=>'GUALACEO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 3,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010351',
            'parroquia'=>'CHORDELEG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 3,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010352',
            'parroquia'=>'DANIEL CÓRDOVA TORAL (EL ORIENTE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 3,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010353',
            'parroquia'=>'JADÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>3 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010354',
            'parroquia'=>'MARIANO MORENO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>3 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010355',
            'parroquia'=>'PRINCIPAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 3,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010356',
            'parroquia'=>'REMIGIO CRESPO TORAL (GÚLAG)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>3 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010357',
            'parroquia'=>'SAN JUAN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 3,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010358',
            'parroquia'=>'ZHIDMAD',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>3 ,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010359',
            'parroquia'=>'LUIS CORDERO VEGA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>3 ,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010360',
            'parroquia'=>'SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 3,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010450',
            'parroquia'=>'NABÓN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 4,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010451',
            'parroquia'=>'COCHAPATA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>4 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010452',
            'parroquia'=>'EL PROGRESO (CAB.EN ZHOTA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>4 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010453',
            'parroquia'=>'LAS NIEVES (CHAYA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>4 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010454',
            'parroquia'=>'OÑA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>4 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010550',
            'parroquia'=>'PAUTE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010551',
            'parroquia'=>'AMALUZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>5 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010552',
            'parroquia'=>'BULÁN (JOSÉ VÍCTOR IZQUIERDO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>5 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010553',
            'parroquia'=>'CHICÁN (GUILLERMO ORTEGA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>5 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010554',
            'parroquia'=>'EL CABO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010555',
            'parroquia'=>'GUACHAPALA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010556',
            'parroquia'=>'GUARAINAG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>5 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010557',
            'parroquia'=>'PALMAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
    
		DB::table('parroquias')->insert([
        	'codParroquia'=>'10558',
            'parroquia'=>'PAN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010559',
            'parroquia'=>'SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010560',
            'parroquia'=>'SEVILLA DE ORO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010561',
            'parroquia'=>'TOMEBAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>5 ,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010562',
            'parroquia'=>'DUG DUG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 5,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010650',
            'parroquia'=>'PUCARÁ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 6,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010651',
            'parroquia'=>'CAMILO PONCE ENRÍQUEZ ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>6 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010652',
            'parroquia'=>'SAN RAFAEL DE SHARUG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>6 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010750',
            'parroquia'=>'SAN FERNANDO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>7 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010751',
            'parroquia'=>'CHUMBLÍN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 7,
        ]);
    
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010850',
            'parroquia'=>'SANTA ISABEL (CHAGUARURCO)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 8,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010851',
            'parroquia'=>'ABDÓN CALDERÓN (LA UNIÓN)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 8,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010852',
            'parroquia'=>'EL CARMEN DE PIJILÍ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>8 ,
        ]);
    
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010853',
            'parroquia'=>'ZHAGLLI (SHAGLLI)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 8,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010854',
            'parroquia'=>'SAN SALVADOR DE CAÑARIBAMBA',
            'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 8,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010950',
            'parroquia'=>'SIGSIG',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 9,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010951',
          'parroquia'=>'CUCHIL (CUTCHIL)',
		      'tipo'=>'R',
          'created_at' => date('Y-m-d H:m:s'),
         	'updated_at' => date('Y-m-d H:m:s'),
         	'canton_id' =>9 ,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010952',
            'parroquia'=>'GIMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>9 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010953',
            'parroquia'=>'GUEL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 9,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010954',
            'parroquia'=>'LUDO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 9,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'010955',
            'parroquia'=>'SAN BARTOLOMÉ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>9 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'010956',
            'parroquia'=>'SAN JOSÉ DE RARANGA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>9 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'011050',
            'parroquia'=>'SAN FELIPE DE OÑA CABECERA CANTONAL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>10 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'011051',
            'parroquia'=>'SUSUDEL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>10 ,
        ]);
  
			DB::table('parroquias')->insert([
        	'codParroquia'=>'011150',
            'parroquia'=>'CHORDELEG',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>11 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011151',
            'parroquia'=>'PRINCIPAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 11,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011152',
            'parroquia'=>'LA UNIÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 11,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011153',
            'parroquia'=>'LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>11 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011154',
            'parroquia'=>'SAN MARTÍN DE PUZHIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 11,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011250',
            'parroquia'=>'EL PAN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>12 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011251',
            'parroquia'=>'AMALUZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>12 ,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011252',
            'parroquia'=>'PALMAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>12 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011253',
            'parroquia'=>'SAN VICENTE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>12 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011350',
            'parroquia'=>'SEVILLA DE ORO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>13 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011351',
            'parroquia'=>'AMALUZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>13 ,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'011352',
            'parroquia'=>'PALMAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 13,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011450',
            'parroquia'=>'GUACHAPALA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>14 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011550',
            'parroquia'=>'CAMILO PONCE ENRÍQUEZ',
            'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>15 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'011551',
            'parroquia'=>'EL CARMEN DE PIJILÍ',
            'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 15,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020101',
            'parroquia'=>'ÁNGEL POLIBIO CHÁVES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020102',
            'parroquia'=>'GABRIEL IGNACIO VEINTIMILLA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 16,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020103',
            'parroquia'=>'GUANUJO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 16,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020150',
            'parroquia'=>'GUARANDA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020151',
            'parroquia'=>'FACUNDO VELA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020152',
            'parroquia'=>'GUANUJO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 16,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020153',
            'parroquia'=>'JULIO E. MORENO (CATANAHUÁN GRANDE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 16,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020154',
            'parroquia'=>'LAS NAVES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020155',
            'parroquia'=>'SALINAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 16,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'020156',
            'parroquia'=>'SAN LORENZO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020157',
            'parroquia'=>'SAN SIMÓN (YACOTO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 16,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020158',
            'parroquia'=>'SANTA FÉ (SANTA FÉ)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020159',
            'parroquia'=>'SIMIÁTUG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020160',
            'parroquia'=>'SAN LUIS DE PAMBIL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>16 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020250',
            'parroquia'=>'CHILLANES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>17 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020251',
            'parroquia'=>'SAN JOSÉ DEL TAMBO (TAMBOPAMBA)',
            'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 17,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020350',
            'parroquia'=>'SAN JOSÉ DE CHIMBO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 18,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020351',
            'parroquia'=>'ASUNCIÓN (ASANCOTO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 18,
        ]);
    /*
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020352',
            'parroquia'=>'CALUMA',
            'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 18,
        ]);
    */
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020353',
            'parroquia'=>'MAGDALENA (CHAPACOTO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>18 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020354',
            'parroquia'=>'SAN SEBASTIÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 18,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020355',
            'parroquia'=>'TELIMBELA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 18,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020450',
            'parroquia'=>'ECHEANDÍA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 19,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020550',
            'parroquia'=>'SAN MIGUEL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>20 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020551',
            'parroquia'=>'BALSAPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 20,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020552',
            'parroquia'=>'BILOVÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>20 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020553',
            'parroquia'=>'RÉGULO DE MORA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 20,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020554',
            'parroquia'=>'SAN PABLO (SAN PABLO DE ATENAS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>20 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020555',
            'parroquia'=>'SANTIAGO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 20,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020556',
            'parroquia'=>'SAN VICENTE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 20,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020650',
            'parroquia'=>'CALUMA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 21,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020701',
            'parroquia'=>'LAS MERCEDES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 22,
	]);
  
	DB::table('parroquias')->insert([
        	'codParroquia'=>'020702',
            'parroquia'=>'LAS NAVES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>22 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'020750',
            'parroquia'=>'LAS NAVES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' =>22 ,
        ]);	 
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'030101',
            'parroquia'=>'AURELIO BAYAS MARTÍNEZ',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'030102',
            'parroquia'=>'AZOGUES',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'030103',
            'parroquia'=>'BORRERO',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030104',
            'parroquia'=>'SAN FRANCISCO',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030150',
            'parroquia'=>'AZOGUES',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030151',
            'parroquia'=>'COJITAMBO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030152',
            'parroquia'=>'DÉLEG',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030153',
            'parroquia'=>'GUAPÁN',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030154',
            'parroquia'=>'JAVIER LOYOLA (CHUQUIPATA)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030155',
            'parroquia'=>'LUIS CORDERO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030156',
            'parroquia'=>'PINDILIG',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030157',
            'parroquia'=>'RIVERA',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030158',
            'parroquia'=>'SAN MIGUEL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030159',
            'parroquia'=>'SOLANO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030160',
            'parroquia'=>'TADAY',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 23,
			]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030250',
            'parroquia'=>'BIBLIÁN',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 24,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030251',
            'parroquia'=>'NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 24,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030252',
            'parroquia'=>'SAN FRANCISCO DE SAGEO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 24,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030253',
            'parroquia'=>'TURUPAMBA',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 24,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030254',
            'parroquia'=>'JERUSALÉN',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 24,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030350',
            'parroquia'=>'CAÑAR',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030351',
            'parroquia'=>'CHONTAMARCA',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030352',
            'parroquia'=>'CHOROCOPTE',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030354',
            'parroquia'=>'GUALLETURO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030355',
            'parroquia'=>'HONORATO VÁSQUEZ (TAMBO VIEJO)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030356',
            'parroquia'=>'INGAPIRCA',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030357',
            'parroquia'=>'JUNCAL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030358',
            'parroquia'=>'SAN ANTONIO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030359',
            'parroquia'=>'SUSCAL',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030360',
            'parroquia'=>'TAMBO',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030361',
            'parroquia'=>'ZHUD',
            'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030362',
            'parroquia'=>'VENTURA',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030363',
            'parroquia'=>'DUCUR',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 25,
			]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030450',
            'parroquia'=>'LA TRONCAL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 26,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030451',
            'parroquia'=>'MANUEL J. CALLE',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 26,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030452',
            'parroquia'=>'PANCHO NEGRO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 26,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030550',
            'parroquia'=>'EL TAMBO',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 27,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030650',
            'parroquia'=>'DÉLEG',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 28,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030651',
            'parroquia'=>'SOLANO',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 28,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'030750',
            'parroquia'=>'SUSCAL',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 29,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040101',
            'parroquia'=>'GONZÁLEZ SUÁREZ',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040102',
            'parroquia'=>'TULCÁN',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			
			]);
    /*
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040150',
          'parroquia'=>'TULCÁN',
		       'tipo'=> 'U',
          'created_at' => date('Y-m-d H:m:s'),
         	'updated_at' => date('Y-m-d H:m:s'),
         	'canton_id' => 30,
			]);
      */
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040151',
            'parroquia'=>'EL CARMELO (EL PUN)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040152',
            'parroquia'=>'HUACA',
            'tipo'=> 'R',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040153',
            'parroquia'=>'JULIO ANDRADE (OREJUELA)',
            'tipo'=> 'R',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040154',
            'parroquia'=>'MALDONADO',
            'tipo'=> 'R',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040155',
            'parroquia'=>'PIOTER',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040156',
            'parroquia'=>'TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040157',
            'parroquia'=>'TUFIÑO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040158',
            'parroquia'=>'URBINA (TAYA)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040159',
            'parroquia'=>'EL CHICAL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040160',
            'parroquia'=>'MARISCAL SUCRE',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040161',
            'parroquia'=>'SANTA MARTHA DE CUBA',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 30,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040250',
            'parroquia'=>'BOLÍVAR',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 31,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040251',
            'parroquia'=>'GARCÍA MORENO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 31,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040252',
            'parroquia'=>'LOS ANDES',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 31,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040253',
            'parroquia'=>'MONTE OLIVO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 31,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040254',
            'parroquia'=>'SAN VICENTE DE PUSIR',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 31,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040255',
            'parroquia'=>'SAN RAFAEL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 31,
			]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040301',
            'parroquia'=>'EL ÁNGEL',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 32,
			]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040302',
            'parroquia'=>'27 DE SEPTIEMBRE',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 32,
			]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'040350',
            'parroquia'=>'EL ANGEL',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 32,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040351',
            'parroquia'=>'EL GOALTAL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 32,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040352',
            'parroquia'=>'LA LIBERTAD (ALIZO)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 32,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040353',
            'parroquia'=>'SAN ISIDRO',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 32,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040450',
            'parroquia'=>'MIRA (CHONTAHUASI)',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 33,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040451',
            'parroquia'=>'CONCEPCIÓN',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 33,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040452',
            'parroquia'=>'JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 33,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040453',
            'parroquia'=>'JUAN MONTALVO (SAN IGNACIO DE QUIL)',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 33,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040501',
            'parroquia'=>'GONZÁLEZ SUÁREZ',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040502',
            'parroquia'=>'SAN JOSÉ',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040550',
            'parroquia'=>'SAN GABRIEL',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040551',
            'parroquia'=>'CRISTÓBAL COLÓN',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040552',
            'parroquia'=>'CHITÁN DE NAVARRETE',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
    
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040553',
            'parroquia'=>'FERNÁNDEZ SALVADOR',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040554',
            'parroquia'=>'LA PAZ',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040555',
            'parroquia'=>'PIARTAL',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 34,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040650',
            'parroquia'=>'HUACA',
			'tipo'=> 'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 35,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'040651',
            'parroquia'=>'MARISCAL SUCRE',
			'tipo'=> 'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 35,			
					
			
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050101',
            'parroquia'=>'ELOY ALFARO (SAN FELIPE)',
			  'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'050102',
            'parroquia'=>'IGNACIO FLORES (PARQUE FLORES)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'050103',
            'parroquia'=>'JUAN MONTALVO (SAN SEBASTIÁN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050104',
            'parroquia'=>'LA MATRIZ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050105',
            'parroquia'=>'SAN BUENAVENTURA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050150',
            'parroquia'=>'LATACUNGA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050151',
            'parroquia'=>'ALAQUES (ALÁQUEZ)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050152',
            'parroquia'=>'BELISARIO QUEVEDO (GUANAILÍN) ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050153',
            'parroquia'=>'GUAITACAMA (GUAYTACAMA) ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050154',
            'parroquia'=>'JOSEGUANO BAJO ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050155',
            'parroquia'=>'LAS PAMPAS ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050156',
            'parroquia'=>'MULALÒ ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050157',
            'parroquia'=>'11 DE NOVIEMBRE (ILINCHISI) ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050158',
            'parroquia'=>'POALÒ ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050159',
            'parroquia'=>'SAN JUAN DE PASTOCALLE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050160',
            'parroquia'=>'SIGCHOS ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050161',
            'parroquia'=>'TANICUCHÌ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050162',
            'parroquia'=>'TOACASO ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050163',
            'parroquia'=>'PALO QUEMADO ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 36,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050201',
            'parroquia'=>'EL CARMEN ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 37,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050202',
            'parroquia'=>'LA MANÁ ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 37,
   
        ]);
		DB::table('parroquias')->insert([    
        	'codParroquia'=>'050203',
            'parroquia'=>'EL TRIUNFO ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 37,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050250',
            'parroquia'=>'LA MANÁ ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 37,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050251',
            'parroquia'=>'GUASAGANDA (CAB.EN GUASAGANDA ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 37,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050252',
            'parroquia'=>'PUCAYACU ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 37,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050350',
            'parroquia'=>'EL CORAZON ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 38,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050351',
            'parroquia'=>'MORASPUNGO ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 38,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050352',
            'parroquia'=>'PINLLOPATA ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 38,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050353',
            'parroquia'=>'RAMON CAMPANA ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 38,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050450',
            'parroquia'=>'PUJILÍ ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050451',
            'parroquia'=>' ANGAMARCA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050452',
            'parroquia'=>'CHUCCHILÁN (CHUGCHILÁN) ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050453',
            'parroquia'=>'GUANGAJE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050454',
            'parroquia'=>'ISINLIBÍ (ISINLIVÍ) ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050455',
            'parroquia'=>'LA VICTORIA ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050456',
            'parroquia'=>'PILALÓ ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050457',
            'parroquia'=>'TINGO ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050458',
            'parroquia'=>'ZUMBAHUA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 39,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050550',
            'parroquia'=>'SAN MIGUEL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 40,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'050551',
            'parroquia'=>'ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 40,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050552',
            'parroquia'=>'CUSUBAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 40,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050553',
            'parroquia'=>'MULALILLO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 40,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050554',
            'parroquia'=>'MULLIQUINDIL (SANTA ANA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 40,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050555',
            'parroquia'=>'PANSALEO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 40,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050650',
            'parroquia'=>'SAQUISILÍ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 41,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050651',
            'parroquia'=>'CANCHAGUA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 41,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050652',
            'parroquia'=>'CHANTILÍN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 41,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050653',
            'parroquia'=>'COCHAPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 41,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050750',
            'parroquia'=>'SIGCHOS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 42,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050751',
            'parroquia'=>'CHUGCHILLÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 42,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050752',
            'parroquia'=>'ISINLIVÍ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 42,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050753',
            'parroquia'=>'LAS PAMPAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 42,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'050754',
            'parroquia'=>'PALO QUEMADO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 42,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060101',
            'parroquia'=>'LIZARZABURU',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060102',
            'parroquia'=>'MALDONADO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060103',
            'parroquia'=>'VELASCO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060104',
            'parroquia'=>'VELOZ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060105',
            'parroquia'=>'YARUQUÍES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060150',
            'parroquia'=>'RIOBAMBA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
        DB::table('parroquias')->insert([
        	'codParroquia'=>'060151',
            'parroquia'=>'CACHA (CAB. EN MACHÁNGARA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060152',
            'parroquia'=>'CALPI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060153',
            'parroquia'=>'CUBIJIES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060154',
            'parroquia'=>'FLORES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060155',
            'parroquia'=>'LICAN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060156',
            'parroquia'=>'LICTO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060157',
            'parroquia'=>'PUNGALA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060158',
            'parroquia'=>'PUNIN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060159',
            'parroquia'=>'QUIMIAG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060160',
            'parroquia'=>'SAN JUAN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060161',
            'parroquia'=>'SAN LUIS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 43,
        ]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'060250',
            'parroquia'=>'ALAUSÍ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060251',
            'parroquia'=>'ACHUPALLAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060252',
            'parroquia'=>'CUMANDÁ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060253',
            'parroquia'=>'GUASUNTOS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060254',
            'parroquia'=>'HUIGRA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060255',
            'parroquia'=>'MULTITUD',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060256',
            'parroquia'=>'PISTISHÍ (NARIZ DEL DIABLO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060257',
            'parroquia'=>'PUMALLACTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060258',
            'parroquia'=>'SEVILLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060259',
            'parroquia'=>'SIBAMBE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060260',
            'parroquia'=>'TIXÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 44,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060301',
            'parroquia'=>'CAJABAMBA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060302',
            'parroquia'=>'SICALPA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060350',
            'parroquia'=>'VILLA LA UNIÓN (CAJABAMBA)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060351',
            'parroquia'=>'CAÑI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060352',
            'parroquia'=>'COLUMBE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060353',
            'parroquia'=>'JUAN DE VELASCO (PANGOR)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060354',
            'parroquia'=>'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 45,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060450',
            'parroquia'=>'CHAMBO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 46,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060550',
            'parroquia'=>'CHUNCHI',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 47,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060551',
            'parroquia'=>'CAPZOL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 47,
        ]);
    
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060552',
            'parroquia'=>'COMPUD',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 47,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060553',
            'parroquia'=>'GONZOL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 47,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060554',
            'parroquia'=>'LLAGOS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 47,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060650',
            'parroquia'=>'GUAMOTE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 48,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060651',
            'parroquia'=>'CEBADAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 48,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060652',
            'parroquia'=>'PALMIRA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 48,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060701',
            'parroquia'=>'EL ROSARIO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060702',
            'parroquia'=>'LA MATRIZ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060750',
            'parroquia'=>'GUANO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060751',
            'parroquia'=>'GUANANDO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060752',
            'parroquia'=>'ILAPO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060753',
            'parroquia'=>'LA PROVIDENCIA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060754',
            'parroquia'=>'SAN ANDRES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060755',
            'parroquia'=>'SAN GERARDO DE PACAICAGUÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060756',
            'parroquia'=>'SAN ISIDRO DE PATULÚ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060757',
            'parroquia'=>'SAN JOSÉ DEL CHAZO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060758',
            'parroquia'=>'SANTA FÉ DE GALÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060759',
            'parroquia'=>'VALPARAÍSO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 49,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060850',
            'parroquia'=>'PALLATANGA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 50,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060950',
            'parroquia'=>'PENIPE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 51,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060951',
            'parroquia'=>'AL LATAR',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 51,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060952',
            'parroquia'=>'MATUS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 51,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060954',
            'parroquia'=>'SAN ANTONIO DE BAYUSHIG',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 51,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060955',
            'parroquia'=>'LA CANDELARIA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 51,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'060956',
            'parroquia'=>'BILBAO (CAB.EN QUILLUYACU)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 51,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'061050',
            'parroquia'=>'CUMANDA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 52,


        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'070102',
            'parroquia'=>'MACHALA',
			'tipo'=>'U ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'070103',
            'parroquia'=>'PUERTO BOLÍVAR',
			'tipo'=>'U ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'070104',
            'parroquia'=>'NUEVE DE MAYO',
			'tipo'=>'U ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'070105',
            'parroquia'=>'EL CAMBIO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'070150',
            'parroquia'=>'MACHALA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'070151',
            'parroquia'=>'EL CAMBIO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'070152',
            'parroquia'=>'EL RETIRO',
			     'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 53,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070250',
            'parroquia'=>'ARENILLAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 54,

			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070251',
            'parroquia'=>'CHACRAS',
            'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 54,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070252',
            'parroquia'=>'LA LIBERTAD',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 54,
			]);
  
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070253',
            'parroquia'=>'LAS LAJAS (CAB. EN LA VICTORIA)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 54,
          
			]);
    
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070254',
            'parroquia'=>'PALMALES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 54,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070255',
            'parroquia'=>'CARCABÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 54,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070350',
            'parroquia'=>'PACCHA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 55,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070351',
            'parroquia'=>'AYAPAMBA',
		'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 55,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070352',
            'parroquia'=>'CORDONCILLO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 55,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070353',
            'parroquia'=>'MILAGRO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 55,
			]); 
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070354',
            'parroquia'=>'SAN JOSÉ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 55,
			]);

			DB::table('parroquias')->insert([
        	'codParroquia'=>'070355',
            'parroquia'=>'SAN JUAN DE CERRO AZUL',
			       'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 55,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070450',
            'parroquia'=>'BALSAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 56,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070451',
            'parroquia'=>'BELLAMARÍA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 56,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070550',
            'parroquia'=>'CHILLA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 57,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070650',
            'parroquia'=>'EL GUABO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 58,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070651',
            'parroquia'=>'BARBONES (SUCRE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 58,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070652',
            'parroquia'=>'LA IBERIA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 58,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070653',
            'parroquia'=>'TENDALES (CAB.EN PUERTO TENDALES)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 58,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070654',
            'parroquia'=>'RÍO BONITO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 58,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070701',
            'parroquia'=>'ECUADOR',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 59,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070702',
            'parroquia'=>'EL PARAÍSO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 59,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070703',
            'parroquia'=>'HUALTACO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 59,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070704',
            'parroquia'=>'MILTON REYES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 59,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070705',
            'parroquia'=>'UNIÓN LOJANA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 59,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070750',
            'parroquia'=>'HUAQUILLAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 59,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070850',
            'parroquia'=>'MARCABELÍ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 60,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070851',
            'parroquia'=>'EL INGENIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 60,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070901',
            'parroquia'=>'BOLÍVAR',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070902',
            'parroquia'=>'LOMA DE FRANCO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070903',
            'parroquia'=>'OCHOA LEÓN (MATRIZ)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);

			DB::table('parroquias')->insert([
        	'codParroquia'=>'070904',
            'parroquia'=>'TRES CERRITOS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070950',
            'parroquia'=>'PASAJE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070951',
            'parroquia'=>'BUENAVISTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);

			DB::table('parroquias')->insert([
        	'codParroquia'=>'070952',
            'parroquia'=>'CASACAY',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070953',
            'parroquia'=>'LA PEAÑA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070954',
            'parroquia'=>'PROGRESO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070955',
            'parroquia'=>'UZHCURRUMI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'070956',
            'parroquia'=>'CAÑAQUEMADA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 61,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071001',
            'parroquia'=>'LA MATRIZ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071002',
            'parroquia'=>'LA SUSAYA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071003',
          'parroquia'=>'PIÑAS GRANDE',
		      'tipo'=>'U',
          'created_at' => date('Y-m-d H:m:s'),
         	'updated_at' => date('Y-m-d H:m:s'),
         	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071050',
            'parroquia'=>'PIÑAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071051',
          'parroquia'=>'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)',
		      'tipo'=>'R',
          'created_at' => date('Y-m-d H:m:s'),
         	'updated_at' => date('Y-m-d H:m:s'),
         	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071052',
            'parroquia'=>'LA BOCANA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071053',
            'parroquia'=>'MOROMORO (CAB. EN EL VADO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071054',
            'parroquia'=>'PIEDRAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071055',
            'parroquia'=>'SAN ROQUE (AMBROSIO MALDONADO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 62,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071056',
          'parroquia'=>'SARACAY',
		      'tipo'=>'R',
          'created_at' => date('Y-m-d H:m:s'),
         	'updated_at' => date('Y-m-d H:m:s'),
         	'canton_id' => 62,
			]);
			
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071150',
          'parroquia'=>'PORTOVELO',
		      'tipo'=>'U',
          'created_at' => date('Y-m-d H:m:s'),
         	'updated_at' => date('Y-m-d H:m:s'),
         	'canton_id' => 63,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071151',
            'parroquia'=>'CURTINCAPA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 63,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071152',
            'parroquia'=>'MORALES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 63,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071153',
            'parroquia'=>'SALATÍ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 63,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071201',
            'parroquia'=>'SANTA ROSA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071202',
            'parroquia'=>'PUERTO JELÍ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071203',
            'parroquia'=>'BALNEARIO JAMBELÍ (SATÉLITE)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071204',
            'parroquia'=>'JUMÓN (SATÉLITE)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071205',
            'parroquia'=>'NUEVO SANTA ROSA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071250',
            'parroquia'=>'SANTA ROSA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071251',
            'parroquia'=>'BELLAVISTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071252',
            'parroquia'=>'JAMBELÍ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071253',
            'parroquia'=>'LA AVANZADA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071254',
            'parroquia'=>'SAN ANTONIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071255',
            'parroquia'=>'TORATA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071256',
            'parroquia'=>'VICTORIA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071257',
            'parroquia'=>'BELLAMARÍA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 64,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'071350',
            'parroquia'=>'ZARUMA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071351',
            'parroquia'=>'ABAÑÍN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071352',
            'parroquia'=>'ARCAPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071353',
            'parroquia'=>'GUANAZÁN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071354',
            'parroquia'=>'GUIZHAGUIÑA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071355',
            'parroquia'=>'HUERTAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071356',
            'parroquia'=>'MALVAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071357',
            'parroquia'=>'MULUNCAY GRANDE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071358',
            'parroquia'=>'SINSAO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071359',
            'parroquia'=>'SALVIAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 65,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071401',
            'parroquia'=>'LA VICTORIA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071402',
            'parroquia'=>'PLATANILLOS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071403',
            'parroquia'=>'VALLE HERMOSO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071450',
            'parroquia'=>'LA VICTORIA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071451',
            'parroquia'=>'LA LIBERTAD',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071452',
            'parroquia'=>'EL PARAÍSO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'071453',
            'parroquia'=>'SAN ISIDRO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 66,         
            ]);

      DB::table('parroquias')->insert([
        	'codParroquia'=>'080101',
            'parroquia'=>'BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
	   DB::table('parroquias')->insert([
        	'codParroquia'=>'080102',
            'parroquia'=>'5 DE AGOSTO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080103',
            'parroquia'=>'ESMERALDAS)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080104',
            'parroquia'=>'LUIS TELLO (LAS PALMAS))',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080105',
            'parroquia'=>'SIMÓN PLATA TORRES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080150',
            'parroquia'=>'ESMERALDAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080151',
            'parroquia'=>'ATACAMES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080152',
            'parroquia'=>'CAMARONES (CAB. EN SAN VICENTE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080153',
            'parroquia'=>'CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080154',
            'parroquia'=>'CHINCA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080155',
            'parroquia'=>'CHONTADURO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080156',
            'parroquia'=>'CHUMUNDÉ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080157',
            'parroquia'=>'LAGARTO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080158',
            'parroquia'=>'LA UNIÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080159',
            'parroquia'=>'MAJUA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080160',
            'parroquia'=>'MONTALVO (CAB. EN HORQUETA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080161',
            'parroquia'=>'RÍO VERDE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080162',
            'parroquia'=>'ROCAFUERTE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080163',
            'parroquia'=>'SAN MATEO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080164',
            'parroquia'=>'SÚA (CAB. EN LA BOCANA)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080165',
            'parroquia'=>'TABIAZO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080166',
            'parroquia'=>'TACHINA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080167',
            'parroquia'=>'TONCHIGÜE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080168',
            'parroquia'=>'VUELTA LARGA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 67,
			]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080250',
            'parroquia'=>'VALDEZ (LIMONES)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
			]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'080251',
            'parroquia'=>'ANCHAYACU',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
			]);
   
		  DB::table('parroquias')->insert([
        	'codParroquia'=>'080252',
            'parroquia'=>'ATAHUALPA (CAB. EN CAMARONES)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'080253',
            'parroquia'=>'BORBÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080254',
            'parroquia'=>'LA TOLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080255',
            'parroquia'=>'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080256',
            'parroquia'=>'MALDONADO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080257',
            'parroquia'=>'PAMPANAL DE BOLÍVAR',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080258',
            'parroquia'=>'SAN FRANCISCO DE ONZOLE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080259',
            'parroquia'=>'SANTO DOMINGO DE ONZOLE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080260',
            'parroquia'=>'SELVA ALEGRE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080261',
            'parroquia'=>'TELEMBÍ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080262',
            'parroquia'=>'COLÓN ELOY DEL MARÍA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'80263',
            'parroquia'=>'SAN JOSÉ DE CAYAPAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080264',
            'parroquia'=>'TIMBIRÉS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 68,
		]);
			
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080350',
            'parroquia'=>'MUISNE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080351',
            'parroquia'=>'BOLÍVAR',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080352',
            'parroquia'=>'DAULE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080353',
            'parroquia'=>'GALERA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080354',
            'parroquia'=>'QUINGUE (OLMEDO PERDOMO FRANCO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080355',
            'parroquia'=>'SALIMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080356',
            'parroquia'=>'SAN FRANCISCO',
			'tipo'=>'R',
             'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080357',
            'parroquia'=>'SAN GREGORIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080358',
            'parroquia'=>'SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 69,
		]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080450',
            'parroquia'=>'ROSA ZÁRATE (QUININDÉ)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 70,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080451',
            'parroquia'=>'CUBE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 70,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080452',
            'parroquia'=>'CHURA (CHANCAMA) (CAB. EN EL YERBERO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 70,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080453',
            'parroquia'=>'MALIMPIA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 70,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080454',
            'parroquia'=>'VICHE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 70,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080455',
            'parroquia'=>'LA UNIÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 70,
		]); 
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080550',
            'parroquia'=>'SAN LORENZO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080551',
            'parroquia'=>'ALTO TAMBO (CAB. EN GUADUAL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080552',
            'parroquia'=>'ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080553',
            'parroquia'=>'CALDERÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080554',
            'parroquia'=>'CARONDELET',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080555',
            'parroquia'=>'5 DE JUNIO (CAB. EN UIMBI)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080556',
            'parroquia'=>'CONCEPCIÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080557',
            'parroquia'=>'MATAJE (CAB. EN SANTANDER)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080558',
            'parroquia'=>'SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080559',
            'parroquia'=>'SANTA RITA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080560',
            'parroquia'=>'TAMBILLO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080561',
            'parroquia'=>'TULULBÍ (CAB. EN RICAURTE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080562',
            'parroquia'=>'URBINA',
			'tipo'=>'R ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 71,
        ]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080650',
            'parroquia'=>'ATACAMES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 72,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080651',
            'parroquia'=>'LA UNIÓN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 72,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080652',
            'parroquia'=>'SÚA (CAB. EN LA BOCANA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 72,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080653',
            'parroquia'=>'TONCHIGÜE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 72,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080654',
            'parroquia'=>'TONSUPA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 72,
        ]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'080750',
            'parroquia'=>'RIOVERDE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 73,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080751',
            'parroquia'=>'CHONTADURO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 73,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080752',
            'parroquia'=>'CHUMUNDÉ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 73,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080753',
            'parroquia'=>'LAGARTO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 73,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080754',
            'parroquia'=>'MONTALVO (CAB. EN HORQUETA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 73,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080755',
            'parroquia'=>'ROCAFUERTE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 73,
        ]);
        DB::table('parroquias')->insert([
        	'codParroquia'=>'080850',
            'parroquia'=>'LA CONCORDIA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 218,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080851',
            'parroquia'=>'MONTERREY',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 218,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080852',
            'parroquia'=>'LA VILLEGAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 218,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'080853',
            'parroquia'=>'PLAN PILOTO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 218,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090101',
            'parroquia'=>'AYACUCHO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'090102',
            'parroquia'=>'BOLÍVAR (SAGRARIO)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'090103',
            'parroquia'=>'CARBO (CONCEPCIÓN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
	    ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'090104 ',
            'parroquia'=>'FEBRES CORDERO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090105',
            'parroquia'=>'GARCÍA MORENO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090106',
            'parroquia'=>'LETAMENDI',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090107',
            'parroquia'=>'NUEVE DE OCTUBRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090108',
            'parroquia'=>'OLMEDO (SAN ALEJO)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090109',
            'parroquia'=>'ROCA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090110',
            'parroquia'=>'ROCAFUERTE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090111',
            'parroquia'=>'SUCRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090112',
            'parroquia'=>'TARQUI',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090113',
            'parroquia'=>'URDANETA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090114',
            'parroquia'=>'XIMENA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090115',
            'parroquia'=>'PASCUALES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090150',
            'parroquia'=>'GUAYAQUIL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090151',
            'parroquia'=>'CHONGÓN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090152',
            'parroquia'=>'JUAN GÓMEZ RENDÓN (PROGRESO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090153',
            'parroquia'=>'MORRO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090154',
            'parroquia'=>'PASCUALES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090155',
            'parroquia'=>'PLAYAS (GRAL. VILLAMIL)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090156',
            'parroquia'=>'POSORJA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090157',
            'parroquia'=>'PUNÁ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090158',
            'parroquia'=>'TENGUEL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 74 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090250',
            'parroquia'=>'ALFREDO BAQUERIZO MORENO (JUJÁN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 75 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090350',
            'parroquia'=>'BALAO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 76 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090450',
            'parroquia'=>'BALZAR',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 77 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090550',
            'parroquia'=>'COLIMES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 78,
        ]);


		DB::table('parroquias')->insert([
        	'codParroquia'=>'090551',
            'parroquia'=>'SAN JACINTO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 78 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090601',
            'parroquia'=>'DAULE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090602',
            'parroquia'=>'LA AURORA (SATÉLITE)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090603',
            'parroquia'=>'BANIFE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090604',
            'parroquia'=>'EMILIANO CAICEDO MARCOS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090605',
            'parroquia'=>'MAGRO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090606',
            'parroquia'=>'PADRE JUAN BAUTISTA AGUIRRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090607',
            'parroquia'=>'SANTA CLARA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090608',
            'parroquia'=>'VICENTE PIEDRAHITA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090650',
            'parroquia'=>'DAULE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090651',
            'parroquia'=>'ISIDRO AYORA (SOLEDAD)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090652',
            'parroquia'=>'JUAN BAUTISTA AGUIRRE (LOS TINTOS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090653',
            'parroquia'=>'LAUREL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090654',
            'parroquia'=>'LIMONAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090655',
            'parroquia'=>'LOMAS DE SARGENTILLO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090656',
            'parroquia'=>'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)',
            'tipo'=>'R',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090657',
            'parroquia'=>'PIEDRAHITA (NOBOL)',
            'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 79 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'090701',
            'parroquia'=>'ELOY ALFARO (DURÁN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 80 ,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'090702',
            'parroquia'=>'EL RECREO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 80 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090750',
            'parroquia'=>'ELOY ALFARO (DURÁN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 80 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090850',
            'parroquia'=>'VELASCO IBARRA (EL EMPALME)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 81 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090851',
            'parroquia'=>'GUAYAS (PUEBLO NUEVO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 81 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090852',
            'parroquia'=>'EL ROSARIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 81 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'090950',
            'parroquia'=>'EL TRIUNFO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 82 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091050',
            'parroquia'=>'MILAGRO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 83 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091051',
            'parroquia'=>'CHOBO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 83 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091052',
            'parroquia'=>'GENERAL ELIZALDE (BUCAY)',
            'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 83 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091053',
            'parroquia'=>'MARISCAL SUCRE (HUAQUES)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 83 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091054',
            'parroquia'=>'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)',
            'tipo'=>'R',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 83 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091150',
            'parroquia'=>'NARANJAL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 84 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091151',
            'parroquia'=>'JESÚS MARÍA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 84 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091152',
            'parroquia'=>'SAN CARLOS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 84 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091153',
            'parroquia'=>'SANTA ROSA DE FLANDES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 84 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091154',
            'parroquia'=>'TAURA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 84 ,

        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'091250',
            'parroquia'=>'NARANJITO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 85 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091350',
            'parroquia'=>'PALESTINA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 86 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091450',
            'parroquia'=>'PEDRO CARBO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 87 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091451',
            'parroquia'=>'VALLE DE LA VIRGEN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 87 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091452',
            'parroquia'=>'SABANILLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 87 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091601',
            'parroquia'=>'SAMBORONDÓN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 88 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091602',
            'parroquia'=>'LA PUNTILLA (SATÉLITE)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 88 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091650',
            'parroquia'=>'SAMBORONDÓN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 88 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091651',
            'parroquia'=>'TARIFA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 88 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091850',
            'parroquia'=>'SANTA LUCÍA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 89 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091901',
            'parroquia'=>'BOCANA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091902',
            'parroquia'=>'CANDILEJOS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091903',
            'parroquia'=>'CENTRAL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091904',
            'parroquia'=>'PARAÍSO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091905',
            'parroquia'=>'SAN MATEO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091950',
            'parroquia'=>'EL SALITRE (LAS RAMAS)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091951',
            'parroquia'=>'GRAL. VERNAZA (DOS ESTEROS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091952',
            'parroquia'=>'LA VICTORIA (ÑAUZA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'091953',
            'parroquia'=>'JUNQUILLAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 90 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092050',
            'parroquia'=>'SAN JACINTO DE YAGUACHI',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 91 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092051',
            'parroquia'=>'CRNEL. LORENZO DE GARAICOA (PEDREGAL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 91 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092053',
            'parroquia'=>'GRAL. PEDRO J. MONTERO (BOLICHE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 91 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092054',
            'parroquia'=>'SIMÓN BOLÍVAR',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 91 ,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092055',
            'parroquia'=>'YAGUACHI VIEJO (CONE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 91 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092056',
            'parroquia'=>'VIRGEN DE FÁTIMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 91 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092150',
            'parroquia'=>'GENERAL VILLAMIL (PLAYAS)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 92 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092250',
            'parroquia'=>'SIMÓN BOLÍVAR',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 93 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092251',
            'parroquia'=>'CRNEL.LORENZO DE GARAICOA (PEDREGAL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 93 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092350',
            'parroquia'=>'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 94 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092450',
            'parroquia'=>'LOMAS DE SARGENTILLO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 95 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092451',
            'parroquia'=>'ISIDRO AYORA (SOLEDAD)',
			'tipo'=>'R',
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 95 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092550',
            'parroquia'=>'NARCISA DE JESÚS',
			'tipo'=>'U',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 96 ,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'092750',
            'parroquia'=>'GENERAL ANTONIO ELIZALDE (BUCAY)',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 97 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'092850',
            'parroquia'=>'ISIDRO AYORA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 98 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100101',
            'parroquia'=>'CARANQUI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100102',
            'parroquia'=>'GUAYAQUIL DE ALPACHACA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100103',
            'parroquia'=>'SAGRARIO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100104',
            'parroquia'=>'SAN FRANCISCO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100105',
            'parroquia'=>'LA DOLOROSA DEL PRIORATO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100150',
            'parroquia'=>'SAN MIGUEL DE IBARRA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100151',
            'parroquia'=>'AMBUQUÍ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100152',
            'parroquia'=>'ANGOCHAGUA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100153',
            'parroquia'=>'CAROLINA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100154',
            'parroquia'=>'LA ESPERANZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100155',
            'parroquia'=>'LITA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100156',
            'parroquia'=>'SALINAS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100157',
            'parroquia'=>'SAN ANTONIO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 99 ,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100201',
            'parroquia'=>'ANDRADE MARÍN (LOURDES)',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100202',
            'parroquia'=>'ATUNTAQUI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100250',
            'parroquia'=>'ATUNTAQUI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100251',
            'parroquia'=>'IMBAYA (SAN LUIS DE COBUENDO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100252',
            'parroquia'=>'SAN FRANCISCO DE NATABUELA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100253',
            'parroquia'=>'SAN JOSÉ DE CHALTURA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100254',
            'parroquia'=>'SAN ROQUE',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 100 ,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100301',
            'parroquia'=>'SAGRARIO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100302',
            'parroquia'=>'SAN FRANCISCO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100350',
            'parroquia'=>'COTACACHI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100351',
            'parroquia'=>'APUELA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100352',
            'parroquia'=>'GARCÍA MORENO (LLURIMAGUA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100353',
            'parroquia'=>'IMANTAG',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100354',
            'parroquia'=>'PEÑAHERRERA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100355',
            'parroquia'=>'PLAZA GUTIÉRREZ (CALVARIO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100356',
            'parroquia'=>'QUIROGA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100357',
            'parroquia'=>'6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100358',
            'parroquia'=>'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO',
            'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 101 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100401',
            'parroquia'=>'JORDÁN',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100402',
            'parroquia'=>'SAN LUIS',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100450',
            'parroquia'=>'OTAVALO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100451',
            'parroquia'=>'DR. MIGUEL EGAS CABEZAS (PEGUCHE)',
           	 'tipo'=>'R',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100452',
            'parroquia'=>'EUGENIO ESPEJO (CALPAQUÍ)',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100453',
            'parroquia'=>'GONZÁLEZ SUÁREZ',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100454',
            'parroquia'=>'PATAQUÍ',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100455',
            'parroquia'=>'SAN JOSÉ DE QUICHINCHE',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100456',
            'parroquia'=>'SAN JUAN DE ILUMÁN',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100457',
            'parroquia'=>'SAN PABLO',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100458',
            'parroquia'=>'SAN RAFAEL',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100459',
            'parroquia'=>'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)',
            'tipo'=>'R',
		   'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 102 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100550',
            'parroquia'=>'PIMAMPIRO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 103 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100551',
            'parroquia'=>'CHUGÁ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 103 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100552',
            'parroquia'=>'MARIANO ACOSTA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 103 ,
        ]);


		DB::table('parroquias')->insert([
        	'codParroquia'=>'100553',
            'parroquia'=>'SAN FRANCISCO DE SIGSIPAMBA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 103 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100650',
            'parroquia'=>'URCUQUÍ CABECERA CANTONAL',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 104 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100651',
            'parroquia'=>'CAHUASQUÍ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 104 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100652',
            'parroquia'=>'LA MERCED DE BUENOS AIRES',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 104 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100653',
            'parroquia'=>'PABLO ARENAS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 104 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100654',
            'parroquia'=>'SAN BLAS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 104 ,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'100655',
            'parroquia'=>'TUMBABIRO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 104 ,
        ]);
 
			DB::table('parroquias')->insert([
        	'codParroquia'=>'110101',
            'parroquia'=>'EL SAGRARIO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110102',
            'parroquia'=>'SAN SEBASTIAN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110103',
            'parroquia'=>'SUCRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110104',
            'parroquia'=>'VALLE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'110150',
            'parroquia'=>'LOJA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110151',
            'parroquia'=>'CHANTACO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110152',
            'parroquia'=>'CHUQUIRIBAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110153',
            'parroquia'=>'EL CISNE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110154',
            'parroquia'=>'GUALEL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110155',
            'parroquia'=>'JIMBILLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110156',
            'parroquia'=>'MALACATOS (VALLADOLID)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110157',
            'parroquia'=>'SAN LUCAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110158',
            'parroquia'=>'SAN PEDRO DE VILCABAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110159',
            'parroquia'=>'SANTIAGO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110160',
            'parroquia'=>'TAQUIL (MIGUEL RIOFRÍO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110161',
            'parroquia'=>'VILCABAMBA (VICTORIA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110162',
            'parroquia'=>'YANGANA (ARSENIO CASTILLO)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110163',
            'parroquia'=>'QUINARA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 105,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110201',
            'parroquia'=>'CARIAMANGA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110202',
            'parroquia'=>'CHILE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110203',
            'parroquia'=>'SAN VICENTE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110250',
            'parroquia'=>'CARIMANGA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110251',
            'parroquia'=>'COLAISACA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110252',
            'parroquia'=>'EL LUCERO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110253',
            'parroquia'=>'UTUANA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110254',
            'parroquia'=>'SANGUILLIN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 106,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110301',
            'parroquia'=>'CATAMAYO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110302',
            'parroquia'=>'SAN JOSE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110350',
            'parroquia'=>'CATAMAYO (LA TOMA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110351',
            'parroquia'=>'EL TAMBO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110352',
            'parroquia'=>'GUAYQUICHUMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110353',
            'parroquia'=>'SAN PEDRO DE LA BENDITA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110354',
            'parroquia'=>'ZAMBI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 107,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110450',
            'parroquia'=>'CELICA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110451',
            'parroquia'=>'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110452',
            'parroquia'=>'CHAQUINAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110453',
            'parroquia'=>'12 DE DICIEMBRE (CAB. EN ACHIOTES)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110454',
            'parroquia'=>'PINDAL (FEDERICO PÁEZ)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110455',
            'parroquia'=>'POZUL (SAN JUAN DE POZUL)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'110456',
            'parroquia'=>'SABANILLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110457',
            'parroquia'=>'TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 108,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110550',
            'parroquia'=>'CHAGUARPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 109,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110551',
            'parroquia'=>'BUENAVISTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 109,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110552',
            'parroquia'=>'EL ROSARIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 109,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110553',
            'parroquia'=>'SANTA RUFINA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 109,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110554',
            'parroquia'=>'AMARILLOS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 109,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110650',
            'parroquia'=>'AMALUZA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110651',
            'parroquia'=>'BELLAVISTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110652',
            'parroquia'=>'JIMBURA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110653',
            'parroquia'=>'SANTA TERESITA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110654',
            'parroquia'=>'27 DE ABRIL (CAB. EN LA NARANJA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110655',
            'parroquia'=>'EL INGENIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110656',
            'parroquia'=>'EL AIRO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 110,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'110750',
            'parroquia'=>'GONZANAMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110751',
            'parroquia'=>'CHANGAIMINA (LA LIBERTAD)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110752',
            'parroquia'=>'FUNDOCHAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110753',
            'parroquia'=>'NAMBACOLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110754',
            'parroquia'=>'PURUNUMA(EGUIGUREN)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110755',
            'parroquia'=>'QUILANGA(LA PAZ)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110756',
            'parroquia'=>'SACAPALCA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110757',
            'parroquia'=>'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 111,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110801',
            'parroquia'=>'GENERAL ELOY ALFARO(SAN SEBASTIAN)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 112,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110802',
            'parroquia'=>'MACARA(MANUEL ENRIQUE REBGEL SUQUILANDA)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 112,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110850',
            'parroquia'=>'MACARA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 112,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110851',
            'parroquia'=>'LARAMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 112,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110852',
            'parroquia'=>'LA VICTORIA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 112,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110853',
            'parroquia'=>'SABIANGO(LA CAPILLA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 112,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'110901',
            'parroquia'=>'CATACOCHA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110902',
            'parroquia'=>'LOURDES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110950',
            'parroquia'=>'CANGONAMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110952',
            'parroquia'=>'GUACHANMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110953',
            'parroquia'=>'LA TINGUE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110954',
            'parroquia'=>'LAURO GUERRERO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110955',
            'parroquia'=>'OLMEDO(SANTA BARBARA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110956',
            'parroquia'=>'ORIANGA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110957',
            'parroquia'=>'SAN ANTONIO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110958',
            'parroquia'=>'CASANGA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'110959',
            'parroquia'=>'YAMANA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 113,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111050',
            'parroquia'=>'ALAMOR',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 114,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111051',
            'parroquia'=>'CIANO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 114,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'111052',
            'parroquia'=>'EL ARENAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 114,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111053',
            'parroquia'=>'EL LIMO (MARIANA DE JESUS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 114,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111054',
            'parroquia'=>'MERCADILLO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 114,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111055',
            'parroquia'=>'VICENTINO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 114,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111150',
            'parroquia'=>'SARAGURO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111151',
            'parroquia'=>'EL PARAISO DE CELEN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111152',
            'parroquia'=>'EL TABLON',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111153',
            'parroquia'=>'LLUZHAPA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111154',
            'parroquia'=>'MANU',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111155',
            'parroquia'=>'SAN ANTONIO DE QUIMBE(CUMBE)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111156',
            'parroquia'=>'SAN PABLO DE TENTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111157',
            'parroquia'=>'SAN SEBASTIAN DE YULUC',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111158',
            'parroquia'=>'SELVA ALEGRE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111159',
            'parroquia'=>'URDANETA(PAQUISHAPA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111160',
            'parroquia'=>'SUMAYPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 115,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111250',
            'parroquia'=>'SOZORANGA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 116,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'111251',
            'parroquia'=>'NUEVA FATIMA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 117,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111252',
            'parroquia'=>'TACAMOROS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 117,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111350',
            'parroquia'=>'ZAPOTILLO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 118,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111351',
            'parroquia'=>'MANGAHURCO(CAZADEROS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 118,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111352',
            'parroquia'=>'GARZAREAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 118,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111353',
            'parroquia'=>'LIMONES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 118,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111354',
            'parroquia'=>'PALETILLAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 118,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111355',
            'parroquia'=>'BOLASPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 118,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111450',
            'parroquia'=>'PINDAL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 119,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111451',
            'parroquia'=>'CHAQUINAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 119,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111452',
            'parroquia'=>'12 DE DICIEMBRE(CAB EN ACHIOTES)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 119,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111453',
            'parroquia'=>'MILAGROS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 119,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111550',
            'parroquia'=>'QUILANGA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 120,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111551',
            'parroquia'=>'FUNDOCHAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 120,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111552',
            'parroquia'=>'SAN ANTONIO DE LAS ARADAS(CAB. EN LAS ARADAS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 120,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111650',
            'parroquia'=>'OLMEDO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 120,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'111651',
            'parroquia'=>'LA TINGUE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 120,
		]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120101',
            'parroquia'=>'CLEMENTE BAQUERIZO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120102',
            'parroquia'=>'DR. CAMILO PONCE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120103',
            'parroquia'=>'BARREIRO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120104',
            'parroquia'=>'EL SALTO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120150',
            'parroquia'=>'BABAHOYO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
    
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120151',
            'parroquia'=>'BARREIRO (SANTA RITA)',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120152',
            'parroquia'=>'CARACOL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120153',
            'parroquia'=>'FEBRES CORDERO (LAS JUNTAS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120154',
            'parroquia'=>'PIMOCHA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120155',
            'parroquia'=>'LA UNION',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 121,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120250',
            'parroquia'=>'BABA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 122,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120251',
            'parroquia'=>'GUARE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 122,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120252',
            'parroquia'=>'ISLA DE BEJUCAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 122,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120350',
            'parroquia'=>'MONTALVO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 123,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120450',
            'parroquia'=>'PUEBLOVIEJO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 124,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120451',
            'parroquia'=>'PUERTO PECHICHE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 124,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120452',
            'parroquia'=>'SAN JUAN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 124,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120501',
            'parroquia'=>'QUEVEDO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120502',
            'parroquia'=>'SAN CAMILO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120503',
            'parroquia'=>'SAN JOSE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120504',
            'parroquia'=>'GUAYACAN',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120505',
            'parroquia'=>'NICOLAS INFANTE DIAZ',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120506',
            'parroquia'=>'SAN CRISTOBAL',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120507',
            'parroquia'=>'SIETE DE OCTUBRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120508',
            'parroquia'=>'24 DE MAYO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120509',
            'parroquia'=>'VENUS DEL RIO QUEVEDO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120510',
            'parroquia'=>'VIVA ALFARO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120550',
            'parroquia'=>'QUEVEDO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'120551',
            'parroquia'=>'BUENA FE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120552',
            'parroquia'=>'MOCACHE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120553',
            'parroquia'=>'SAN CARLOS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120554',
            'parroquia'=>'VALENCIA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120555',
            'parroquia'=>'LA ESPERANZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 125,
		]);
 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120650',
            'parroquia'=>'CATARAMA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 126,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120651',
            'parroquia'=>'RICAURTE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 126,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120701',
            'parroquia'=>'10 DE NOVIEMBRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 127,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120750',
            'parroquia'=>'VENTANAS',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 127,
		]);
    //  VIPYT
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120751',
            'parroquia'=>'QUINSALOMA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 127,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120752',
            'parroquia'=>'ZAPOTAL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 127,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120753',
            'parroquia'=>'CHACARITA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 127,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'120754',
            'parroquia'=>'LOS ANGELES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 127,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120850',
            'parroquia'=>'VINCES',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 128,
		]);
    //  YTYTIHG
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120851',
            'parroquia'=>'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 128,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'120852',
            'parroquia'=>'PALENQUE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 128,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121001',
            'parroquia'=>'SAN JACINTO DE BUENA FE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 130,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121002',
            'parroquia'=>'7 DE AGOSTO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 130,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121003',
            'parroquia'=>'11 DE OCTUBRE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 130,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121050',
            'parroquia'=>'SAN JACINTO DE BUENA FE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 130,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121051',
            'parroquia'=>'PATRICIA PILAR',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 130,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121150',
            'parroquia'=>'VALENCIA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 131,
		]);
    
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121250',
            'parroquia'=>'MOCACHE',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 132,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'121350',
            'parroquia'=>'QUINSALOMA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 133,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130101',
            'parroquia'=>'PORTOVIEJO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130102',
            'parroquia'=>'12 DE MARZO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130103',
            'parroquia'=>'COLÓN',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130104',
            'parroquia'=>'PICOAZÁ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130105',
            'parroquia'=>'SAN PABLO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130106',
            'parroquia'=>'ANDRÉS DE VERA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130107',
            'parroquia'=>'FRANCISCO PACHECO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130108',
            'parroquia'=>'18 DE OCTUBRE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130109',
            'parroquia'=>'SIMÓN BOLÍVAR',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130150',
            'parroquia'=>'PORTOVIEJO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'130151',
            'parroquia'=>'ABDÓN CALDERÓN (SAN FRANCISCO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130152',
            'parroquia'=>'ALHAJUELA (BAJO GRANDE)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130153',
            'parroquia'=>'CRUCITA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130154',
            'parroquia'=>'PUEBLO NUEVO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130155',
            'parroquia'=>'RIOCHICO (RÍO CHICO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130156',
            'parroquia'=>'SAN PLÁCIDO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130157',
            'parroquia'=>'CHIRIJOS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 134,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130250',
            'parroquia'=>'CALCETA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 135,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130251',
            'parroquia'=>'MEMBRILLO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 135,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130252',
            'parroquia'=>'QUIROGA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 135,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130301',
            'parroquia'=>'CHONE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130302',
            'parroquia'=>'SANTA RITA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130350',
            'parroquia'=>'CHONE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130351',
            'parroquia'=>'BOYACÁ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130352',
            'parroquia'=>'CANUTO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130353',
            'parroquia'=>'CONVENTO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130354',
            'parroquia'=>'CHIBUNGA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130355',
            'parroquia'=>'ELOY ALFARO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130356',
            'parroquia'=>'RICAURTE',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130357',
            'parroquia'=>'SAN ANTONIO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 136,
        ]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130401',
            'parroquia'=>'EL CARMEN',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 137,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130402',
            'parroquia'=>'4 DE DICIEMBRE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 137,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130450',
            'parroquia'=>'EL CARMEN',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 137,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130451',
            'parroquia'=>'WILFRIDO LOOR MOREIRA (MAICITO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 137,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130452',
            'parroquia'=>'SAN PEDRO DE SUMA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 137,
        ]);
    DB::table('parroquias')->insert([
        	'codParroquia'=>'130550',
            'parroquia'=>'FLAVIO ALFARO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 138,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130551',
            'parroquia'=>'SAN FRANCISCO DE NOVILLO (CAB. EN',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 138,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130552',
            'parroquia'=>'ZAPALLO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 138,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130601',
            'parroquia'=>'DR. MIGUEL MORÁN LUCIO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130602',
            'parroquia'=>'MANUEL INOCENCIO PARRALES Y GUALE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130603',
            'parroquia'=>'SAN LORENZO DE JIPIJAPA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130650',
            'parroquia'=>'JIPIJAPA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130651',
            'parroquia'=>'AMÉRICA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130652',
            'parroquia'=>'EL ANEGADO (CAB. EN ELOY ALFARO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130653',
            'parroquia'=>'JULCUY',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130654',
            'parroquia'=>'LA UNIÓN',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130655',
            'parroquia'=>'MACHALILLA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130656',
            'parroquia'=>'MEMBRILLAL',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130657',
            'parroquia'=>'PEDRO PABLO GÓMEZ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130658',
            'parroquia'=>'PUERTO DE CAYO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130659',
            'parroquia'=>'PUERTO LÓPEZ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 139,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130750',
            'parroquia'=>'JUNÍN',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 140,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130801',
            'parroquia'=>'LOS ESTEROS',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130802',
            'parroquia'=>'MANTA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130803',
            'parroquia'=>'SAN MATEO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130804',
            'parroquia'=>'TARQUI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130805',
            'parroquia'=>'ELOY ALFARO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130850',
            'parroquia'=>'MANTA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130851',
            'parroquia'=>'SAN LORENZO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
        DB::table('parroquias')->insert([
        	'codParroquia'=>'130852',
            'parroquia'=>'SANTA MARIANITA (BOCA DE PACOCHE)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 141,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130901',
            'parroquia'=>'ANIBAL SAN ANDRÉS',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130902',
            'parroquia'=>'MONTECRISTI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130903',
            'parroquia'=>'EL COLORADO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130904',
            'parroquia'=>'GENERAL ELOY ALFARO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130905',
            'parroquia'=>'LEONIDAS PROAÑO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130950',
            'parroquia'=>'MONTECRISTI',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130951',
            'parroquia'=>'JARAMIJÓ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'130952',
            'parroquia'=>'LA PILA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 142,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131050',
            'parroquia'=>'PAJÁN',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 143,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131051',
            'parroquia'=>'CAMPOZANO (LA PALMA DE PAJÁN)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 143,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131052',
            'parroquia'=>'CASCOL',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 143,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131053',
            'parroquia'=>'GUALE',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 143,
			
        ]);
        DB::table('parroquias')->insert([
        	'codParroquia'=>'131054',
            'parroquia'=>'LASCANO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 143,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131250',
            'parroquia'=>'ROCAFUERTE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 144,
        
		]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131301',
            'parroquia'=>'SANTA ANA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131302',
            'parroquia'=>'LODANA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131350',
            'parroquia'=>'SANTA ANA DE VUELTA LARGA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131351',
            'parroquia'=>'AYACUCHO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           'canton_id' => 145,
			
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131352',
            'parroquia'=>'HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131353',
            'parroquia'=>'LA UNIÓN',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131354',
            'parroquia'=>'OLMEDO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131355',
            'parroquia'=>'SAN PABLO (CAB. EN PUEBLO NUEVO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 145,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131401',
            'parroquia'=>'BAHÍA DE CARÁQUEZ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131402',
            'parroquia'=>'LEONIDAS PLAZA GUTIÉRREZ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131450',
            'parroquia'=>'BAHÍA DE CARÁQUEZ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131451',
            'parroquia'=>'CANOA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131452',
            'parroquia'=>'COJIMÍES',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131453',
            'parroquia'=>'CHARAPOTÓ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131454',
            'parroquia'=>'10 DE AGOSTO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
    
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131455',
            'parroquia'=>'JAMA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
     
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131456',
            'parroquia'=>'PEDERNALES',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131457',
            'parroquia'=>'SAN ISIDRO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131458',
            'parroquia'=>'SAN VICENTE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 146,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131550',
            'parroquia'=>'TOSAGUA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 147,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131551',
            'parroquia'=>'BACHILLERO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 147,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131552',
            'parroquia'=>'ANGEL PEDRO GILER (LA ESTANCILLA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 147,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131650',
            'parroquia'=>'SUCRE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 148,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131651',
            'parroquia'=>'BELLAVISTA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 148,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131652',
            'parroquia'=>'NOBOA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 148,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131653',
            'parroquia'=>'ARQ. SIXTO DURÁN BALLÉ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 148,
       
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'131750',
            'parroquia'=>'PEDERNALES',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 149,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131751',
            'parroquia'=>'COJIMÍES',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 149,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131752',
            'parroquia'=>'10 DE AGOSTO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 149,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131753',
            'parroquia'=>'ATAHUALPA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 149,

		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131850',
            'parroquia'=>'OLMEDO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 150,
       
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'131950',
            'parroquia'=>'PUERTO LÓPEZ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 151,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131951',
            'parroquia'=>'MACHALILLA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 151,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'131952',
            'parroquia'=>'SALANGO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
          	'canton_id' => 151,
    
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'132050',
            'parroquia'=>'JAMA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 152,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'132150',
            'parroquia'=>'JARAMIJÓ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 153,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'132250',
            'parroquia'=>'SAN VICENTE',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 154,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'132251',
            'parroquia'=>'CANOA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 154,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140150',
            'parroquia'=>'MACAS',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140151',
            'parroquia'=>'ALSHI (CAB. EN 9 DE OCTUBRE)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140152',
            'parroquia'=>'CHIGUAZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140153',
            'parroquia'=>'GENERAL PROAÑO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140154',
            'parroquia'=>'HUASAGA (CAB.EN WAMPUIK)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140155',
            'parroquia'=>'MACUMA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140156',
            'parroquia'=>'SAN ISIDRO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140157',
            'parroquia'=>'SEVILLA DON BOSCO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140158',
            'parroquia'=>'SINAÍ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140159',
            'parroquia'=>'TAISHA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140160',
            'parroquia'=>'ZUÑA (ZÚÑAC)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140161',
            'parroquia'=>'TUTINENTZ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140162',
            'parroquia'=>'CUCHAENTZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140163',
            'parroquia'=>'SAN JOSÉ DE MORONA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
     
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140164',
            'parroquia'=>'RÍO BLANCO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 156,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140201',
            'parroquia'=>'GUALAQUIZA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
     
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140202',
            'parroquia'=>'MERCEDES MOLINA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
    
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140250',
            'parroquia'=>'GUALAQUIZA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
        
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'140251',
            'parroquia'=>'AMAZONAS (ROSARIO DE CUYES)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
        
		]);DB::table('parroquias')->insert([
        	'codParroquia'=>'140252',
            'parroquia'=>'BERMEJOS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
     
		]);
 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140253',
            'parroquia'=>'BOMBOIZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140254',
            'parroquia'=>'CHIGÜINDA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140255',
            'parroquia'=>'EL ROSARIO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140256',
            'parroquia'=>'NUEVA TARQUI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140257',
            'parroquia'=>'SAN MIGUEL DE CUYES',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140258',
            'parroquia'=>'EL IDEAL',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 157,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140350',
            'parroquia'=>'GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140351',
            'parroquia'=>'INDANZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140352',
            'parroquia'=>'PAN DE AZÚCAR',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
       
		]);
 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140353',
            'parroquia'=>'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140354',
            'parroquia'=>'SAN CARLOS DE LIMÓN (SAN CARLOS DEL',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140355',
            'parroquia'=>'SAN JUAN BOSCO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140356',
            'parroquia'=>'SAN MIGUEL DE CONCHAY',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'140357',
            'parroquia'=>'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140358',
            'parroquia'=>'YUNGANZA (CAB. EN EL ROSARIO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 158,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140450',
            'parroquia'=>'PALORA (METZERA)',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 159,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140451',
            'parroquia'=>'ARAPICOS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 159,
   
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140452',
            'parroquia'=>'CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)',
           	'tipo'=>'R',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 159,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140453',
            'parroquia'=>'HUAMBOYA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 159,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140454',
            'parroquia'=>'SANGAY (CAB. EN NAYAMANACA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 159,
        
		]);
  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140550',
            'parroquia'=>'SANTIAGO DE MÉNDEZ',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140551',
            'parroquia'=>'COPAL',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140552',
            'parroquia'=>'CHUPIANZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140553',
            'parroquia'=>'PATUCA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
  
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140554',
            'parroquia'=>'SAN LUIS DE EL ACHO (CAB. EN EL ACHO)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140555',
            'parroquia'=>'SANTIAGO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
     
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140556',
            'parroquia'=>'TAYUZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140557',
            'parroquia'=>'SAN FRANCISCO DE CHINIMBIMI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 160,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140650',
            'parroquia'=>'SUCÚA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 161,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140651',
            'parroquia'=>'ASUNCIÓN',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 161,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140652',
            'parroquia'=>'HUAMBI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 161,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140653',
            'parroquia'=>'LOGROÑO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 161,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140654',
            'parroquia'=>'YAUPI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 161,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140655',
            'parroquia'=>'SANTA MARIANITA DE JESÚS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 161,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140750',
            'parroquia'=>'HUAMBOYA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 162,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140751',
            'parroquia'=>'CHIGUAZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
          	'canton_id' => 162,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140752',
            'parroquia'=>'PABLO SEXTO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 162,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140850',
            'parroquia'=>'SAN JUAN BOSCO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 163,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140851',
            'parroquia'=>'PAN DE AZÚCAR',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 163,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140852',
            'parroquia'=>'SAN CARLOS DE LIMÓN',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 163,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140853',
            'parroquia'=>'SAN JACINTO DE WAKAMBEIS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 163,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140854',
            'parroquia'=>'SANTIAGO DE PANANZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 163,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140950',
            'parroquia'=>'TAISHA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 164,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140951',
            'parroquia'=>'HUASAGA (CAB. EN WAMPUIK)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 164,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140952',
            'parroquia'=>'MACUMA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 164,
       
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140953',
            'parroquia'=>'TUTINENTZA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 164,
      
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'140954',
            'parroquia'=>'PUMPUENTSA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 164,
    
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'141050',
            'parroquia'=>'LOGROÑO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 165,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'141051',
            'parroquia'=>'YAUPI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 165,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'141052',
            'parroquia'=>'SHIMPIS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 165,
     
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'141150',
            'parroquia'=>'PABLO SEXTO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 166,
       
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'141250',
            'parroquia'=>'SANTIAGO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 167,
        
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'141251',
            'parroquia'=>'SAN JOSÉ DE MORONA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 167,
		]);
        
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150150',
            'parroquia'=>'TENA',
			 'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168 ,
        ]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'150151',
            'parroquia'=>'AHUANO',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'150152',
            'parroquia'=>'CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)',
           	 'tipo'=>'U',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'150153',
            'parroquia'=>'CHONTAPUNTA',
			 'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150154',
            'parroquia'=>'PANO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150155',
            'parroquia'=>'PUERTO MISAHUALLI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150156',
            'parroquia'=>'PUERTO NAPO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150157',
            'parroquia'=>'TÁLAG',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150158',
            'parroquia'=>'SAN JUAN DE MUYUNA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 168,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150350',
            'parroquia'=>'ARCHIDONA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 169,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150351',
            'parroquia'=>'AVILA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 169,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150352',
            'parroquia'=>'COTUNDO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 169,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150353',
            'parroquia'=>'LORETO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 169,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150354',
            'parroquia'=>'SAN PABLO DE USHPAYACU',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 169,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150450',
            'parroquia'=>'EL CHACO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 170,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150451',
            'parroquia'=>'GONZALO DíAZ DE PINEDA (EL BOMBÓN)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 170,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150452',
            'parroquia'=>'LINARES',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 170,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150453',
            'parroquia'=>'OYACACHI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 170,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150454',
            'parroquia'=>'SANTA ROSA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 170,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150455',
            'parroquia'=>'SARDINAS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 170,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150750',
            'parroquia'=>'BAEZA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150751',
            'parroquia'=>'COSANGA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'150752',
            'parroquia'=>'CUYUJA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150753',
            'parroquia'=>'PAPALLACTA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150754',
            'parroquia'=>'SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150755',
            'parroquia'=>'SAN JOSÉ DEL PAYAMINO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150756',
            'parroquia'=>'SUMACO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 171,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'150950',
            'parroquia'=>'CARLOS JULIO AROSEMENA TOLA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 172,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160150',
            'parroquia'=>'PUYO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160151',
            'parroquia'=>'ARAJUNO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160152',
            'parroquia'=>'CANELOS',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160153',
            'parroquia'=>'CURARAY',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160154',
            'parroquia'=>'DIEZ DE AGOSTO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
			DB::table('parroquias')->insert([
        	'codParroquia'=>'160155',
            'parroquia'=>'FÁTIMA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160156',
            'parroquia'=>'MONTALVO (ANDOAS)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160157',
            'parroquia'=>'POMONA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160158',
            'parroquia'=>'RÍO CORRIENTES',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160159',
            'parroquia'=>'RÍO TIGRE',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160160',
            'parroquia'=>'SANTA CLARA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160161',
            'parroquia'=>'SARAYACU',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160162',
            'parroquia'=>'SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160163',
            'parroquia'=>'TARQUI',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160164',
            'parroquia'=>'TENIENTE HUGO ORTIZ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160165',
            'parroquia'=>'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160166',
            'parroquia'=>'EL TRIUNFO',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 173,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160250',
            'parroquia'=>'MERA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 174,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160251',
            'parroquia'=>'MADRE TIERRA',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 174,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160252',
            'parroquia'=>'SHELL',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 174,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160350',
            'parroquia'=>'SANTA CLARA',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 175,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160351',
            'parroquia'=>'SAN JOSÉ',
			'tipo'=>'R',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 175,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160450',
            'parroquia'=>'ARAJUNO',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 176,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'160451',
            'parroquia'=>'CURARAY',
			'tipo'=>'U',
           	'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 176,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170101',
            'parroquia'=>'BELISARIO QUEVEDO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170102',
            'parroquia'=>'CARCELÈN',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170103',
            'parroquia'=>'CENTRO HISTÒRICO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170104',
            'parroquia'=>'COCHAPAMBA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
			'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170105',
            'parroquia'=>'COMITÈ DEL PUEBLO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170106',
            'parroquia'=>'COTOCOLLAO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170107',
            'parroquia'=>'CHILIBULO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170108',
            'parroquia'=>'CHILLOGALLO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170109',
            'parroquia'=>'CHIMBACALLE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
			'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170110',
            'parroquia'=>'EL CONDADO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170111',
            'parroquia'=>'GUAMANÌ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170112',
            'parroquia'=>'IÑAQUITO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170113',
            'parroquia'=>'ITCHIMBÌA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170114',
            'parroquia'=>'JIPIJAPA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);

		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170115',
            'parroquia'=>'KENNEDY',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
 
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170116',
            'parroquia'=>'LA ARGELIA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170117',
            'parroquia'=>'LA CONCEPCIÒN',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
   
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170118',
            'parroquia'=>'LA ECUATORIANA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170119',
            'parroquia'=>'LA FERROVIARIA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170120',
            'parroquia'=>'LA LIBERTAD',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170121',
            'parroquia'=>'LA MAGDALENA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170122',
            'parroquia'=>'LA MENA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170123',
            'parroquia'=>'MARISCAL SUCRE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170124',
            'parroquia'=>'PONCEANO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170125',
            'parroquia'=>'PUENGASÌ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170126',
            'parroquia'=>'QUITUMBE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);

		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170127',
            'parroquia'=>'RUMIPAMBA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170128',
            'parroquia'=>'SAN BARTOLO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170129',
            'parroquia'=>'SAN ISIDRO DEL INCA',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170130',
            'parroquia'=>'SAN JUAN',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170131',
            'parroquia'=>'SOLANDA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170132',
            'parroquia'=>'TURUBAMBA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170150',
            'parroquia'=>'QUITO DISTRITO METROPOLITANO',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170151',
            'parroquia'=>'ALANGASÌ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170152',
            'parroquia'=>'AMAGUAÑA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170153',
            'parroquia'=>'ATAHUALPA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170154',
            'parroquia'=>'CALACALÌ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170155',
            'parroquia'=>'CALDERÒN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170156',
            'parroquia'=>'CONOCOTO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170157',
            'parroquia'=>'CUMBAYÀ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170158',
            'parroquia'=>'CHAVEZPAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170159',
            'parroquia'=>'CHECA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170160',
            'parroquia'=>'EL QUINCHE',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170161',
            'parroquia'=>'GUALEA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170162',
            'parroquia'=>'GUANGOPOLO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170163',
            'parroquia'=>'GUAYLLABAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170164',
            'parroquia'=>'LA MERCED',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170165',
            'parroquia'=>'LLANO CHICO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170166',
            'parroquia'=>'LLOA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170167',
            'parroquia'=>'MINDO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170168',
            'parroquia'=>'NANEGAL',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170169',
            'parroquia'=>'NANEGALITO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170170',
            'parroquia'=>'NAYÒN',
            'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170171',
            'parroquia'=>'NONO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170172',
            'parroquia'=>'PACTO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170173',
            'parroquia'=>'PEDRO VICENTE MALDONADO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170174',
            'parroquia'=>'PERUCHO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170175',
            'parroquia'=>'PIFO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170176',
            'parroquia'=>'PÌNTAG',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170177',
            'parroquia'=>'POMASQUI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170178',
            'parroquia'=>'PUÈLLARO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170179',
            'parroquia'=>'PUEMBO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170180',
            'parroquia'=>'SAN ANTONIO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170181',
            'parroquia'=>'SAN JOSÈ DE MINAS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170182',
            'parroquia'=>'SAN MIGUEL DE  LOS BANCOS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170183',
            'parroquia'=>'TARABELA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170184',
            'parroquia'=>'TUMBACO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170185',
            'parroquia'=>'YARUQUÌ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170186',
            'parroquia'=>'ZAMBIZA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'170187',
            'parroquia'=>'PUERTO QUITO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 177,
        ]);
	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170201',
            'parroquia'=>'AYORA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170202',
            'parroquia'=>'CAYAMBE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170203',
            'parroquia'=>'JUAN MONTALVO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170250',
            'parroquia'=>'CAYAMBE',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170251',
            'parroquia'=>'ASCÀZUBI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170252',
            'parroquia'=>'CANCAHUA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170253',
            'parroquia'=>'OLMEDO (PESILLO9 ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170254',
            'parroquia'=>'OTÒN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170255',
            'parroquia'=>'SANTA ROSA DE CUZUBAMBA',
            'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 178,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170350',
            'parroquia'=>'MACHACHI',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170351',
            'parroquia'=>'ALÒAG',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'170352',
            'parroquia'=>'ALOASÌ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170353',
            'parroquia'=>'CUTUGLAHUA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170354',
            'parroquia'=>'EL CHAUPI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170355',
            'parroquia'=>'MANUEL CORNEJO ASTORGA (TANDAPI)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170356',
            'parroquia'=>'TAMBILLO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170357',
            'parroquia'=>'UYUMBICHO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 179,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170450',
            'parroquia'=>'TABACUNDO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 180,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170451',
            'parroquia'=>'LA ESPERANZA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 180,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170452',
            'parroquia'=>'MALCHINGUÌ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 180,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170453',
            'parroquia'=>'TOCACHI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 180,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170454',
            'parroquia'=>'TUPIGACHI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 180,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170501',
            'parroquia'=>'SANGOLQUÌ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 181,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170502',
            'parroquia'=>'SAN PEDRO DE TABOADA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 181,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170503',
            'parroquia'=>'SAN RAFAEL',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 181,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170550',
            'parroquia'=>'SANGOLQUI',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 181,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170551',
            'parroquia'=>'COTOGCHOA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 181,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170552',
            'parroquia'=>'RUMIPAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 181,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170750',
            'parroquia'=>'SAN MIGUEL D E LOS BANCOS ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 182,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170751',
            'parroquia'=>'MINDO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 182,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170752',
            'parroquia'=>'PEDRO VICENTE MALDONADO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 182,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170753',
            'parroquia'=>'PUERTO QUITO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 182,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170850',
            'parroquia'=>'PEDRO VICENTE MALDONADO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 183,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'170950',
            'parroquia'=>'PUERTO QUITO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 184,
        ]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'180101',
            'parroquia'=>'ATOCHA– FICOA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180102',
            'parroquia'=>'CELIANO MONGE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
				DB::table('parroquias')->insert([
        	'codParroquia'=>'180103',
            'parroquia'=>'HUACHI CHICO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);

		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180104',
            'parroquia'=>'HUACHI LORETO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180105',
            'parroquia'=>'LA MERCED',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180106',
            'parroquia'=>'LA PENÌNSULA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'1807',
            'parroquia'=>'MATRIZ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180108',
            'parroquia'=>'PISHILATA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180109',
            'parroquia'=>'SAN FRANCISCO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180150',
            'parroquia'=>'AMBATO',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180151',
            'parroquia'=>'AMBATILLO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180152',
            'parroquia'=>'ATAHUALPA (CHISALATA)',
	         'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180153',
            'parroquia'=>'AUGUSTO N. MARTÌNEZ (MUNDUGLEO)',
			'tipo' =>'R',
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180154',
            'parroquia'=>'CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180155',
            'parroquia'=>'HUACHI GRANDE',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180156',
            'parroquia'=>'IZAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180157',
            'parroquia'=>'JUAN BENIGNO VELA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180158',
            'parroquia'=>'MONTALVO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180159',
            'parroquia'=>'PASA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180160',
            'parroquia'=>'PICAIGUA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180161',
            'parroquia'=>'PILAGÜÍN (PILAHÜÍN)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180162',
            'parroquia'=>'QUISAPINCHA (QUIZAPINCHA)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180163',
            'parroquia'=>'SAN BARTOLOMÉ DE PINLLOG',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180164',
            'parroquia'=>'SAN FERNANDO (PASA SAN FERNANDO)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180165',
            'parroquia'=>'SANTA ROSA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180166',
            'parroquia'=>'TOTORAS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180167',
            'parroquia'=>'CUNCHIBAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180168',
            'parroquia'=>'UNAMUNCHO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 185,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180250',
            'parroquia'=>'BAÑOS DE AGUA SANTA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 186,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180251',
            'parroquia'=>'LLIGUA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 186,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180252',
            'parroquia'=>'RÍO NEGRO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 186,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180253',
            'parroquia'=>'RÍO VERDE',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 186,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180254',
            'parroquia'=>'ULBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 186,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180350',
            'parroquia'=>'CEVALLOS',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 187,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180450',
            'parroquia'=>'MOCHA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 188,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180451',
            'parroquia'=>'PINGUILÍ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 188,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180550',
            'parroquia'=>'PATATE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 189,
        ]);
	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180551',
            'parroquia'=>'EL TRIUNFO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 189,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180552',
            'parroquia'=>'LOS ANDES (CAB. EN POATUG)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 189,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180553',
            'parroquia'=>'SUCRE (CAB. EN SUCRE-PATATE URCU)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 189,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180650',
            'parroquia'=>'QUERO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 190,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180651',
            'parroquia'=>'RUMIPAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 190,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180652',
            'parroquia'=>'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 190,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180701',
            'parroquia'=>'PELILEO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180702',
            'parroquia'=>'PELILEO GRANDE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180703',
            'parroquia'=>'PELILEO GRANDE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180750',
            'parroquia'=>'PELILEO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180751',
            'parroquia'=>'BENÍTEZ (PACHANLICA)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180752',
            'parroquia'=>'BOLÍVAR',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180753',
            'parroquia'=>'COTALÓ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180754',
            'parroquia'=>'CHIQUICHA (CAB. EN CHIQUICHA GRANDE )',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180755',
            'parroquia'=>'EL ROSARIO (RUMICHACA)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180756',
            'parroquia'=>'GARCÍA MORENO (CHUMAQUI)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180757',
            'parroquia'=>'GUAMBALÓ (HUAMBALÓ)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180758',
            'parroquia'=>'SALASACA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 191,
        ]);
  
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180801',
            'parroquia'=>'CIUDAD NUEVA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180802',
            'parroquia'=>'PÍLLARO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180850',
            'parroquia'=>'PÍLLARO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180851',
            'parroquia'=>'BAQUERIZO MORENO',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180852',
            'parroquia'=>'EMILIO MARÍA TERÁN(RUMIPAMBA) ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180853',
            'parroquia'=>'MARCOS ESPINEL (CHACATA)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180854',
            'parroquia'=>'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180855',
            'parroquia'=>'SAN ANDRÉS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180856',
            'parroquia'=>'SAN JOSÉ DE POALÓ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180857',
            'parroquia'=>'SAN MIGUELITO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 192,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180950',
            'parroquia'=>'TISALEO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 193,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'180951',
            'parroquia'=>'QUINCHICOTO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 193,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190101',
            'parroquia'=>'EL LIMON',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
	   ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'190102',
            'parroquia'=>'ZAMORA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'190150',
            'parroquia'=>'ZAMORA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
			      
        ]);

        DB::table('parroquias')->insert([
        	'codParroquia'=>'190151',
            'parroquia'=>'CUMBARATZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
			    
        ]);
   
   
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'190152',
            'parroquia'=>'GUADALUPE',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
        ]);
        DB::table('parroquias')->insert([
        	'codParroquia'=>'190153',
            'parroquia'=>'IMBANA(LA VICTORIA DE IMBANA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
		]);

	    DB::table('parroquias')->insert([
        	'codParroquia'=>'190154',
            'parroquia'=>'PAQUISHA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
		]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'190155',
            'parroquia'=>'SABANILLA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'190156',
            'parroquia'=>'TIMBARA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190157',
            'parroquia'=>'ZUMBI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190158',
            'parroquia'=>'SAN CARLOS DE LAS MINAS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 194,
			
		]);
	    DB::table('parroquias')->insert([
        	'codParroquia'=>'190250',
            'parroquia'=>'ZUMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190252',
            'parroquia'=>'EL CHORRO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
	    ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190253',
            'parroquia'=>'EL PORVENIR DEL CARMEN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190254',
            'parroquia'=>'LA CHONTA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
		]);
			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190255',
            'parroquia'=>'PALANDA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190256',
            'parroquia'=>'PUCAPAMBA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
		]); 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190257',
            'parroquia'=>'SAN FRANCISCO DEL VERGEL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
	    ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190258',
            'parroquia'=>'VALLADOLID',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
		]);

		DB::table('parroquias')->insert([
        	'codParroquia'=>'190359',
            'parroquia'=>'SAN ANDRES',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 195,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190350',
            'parroquia'=>'GUAYZIMI',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 196,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190351',
            'parroquia'=>'ZURMI',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 196,
			 
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190352',
            'parroquia'=>'NUEVO PARAISO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 196,
			  
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190450',
            'parroquia'=>'28 DE MAYO(SAN JOSE DE YACUAMBI)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 197,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190451',
            'parroquia'=>'LA PAZ',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 197,
	    ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190452',
            'parroquia'=>'TUTUPALI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 197,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190550',
            'parroquia'=>'YANTZAZA(YANZATZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 198,
	    ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190551',
            'parroquia'=>'CHICAÑA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 198,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190552',
            'parroquia'=>'EL PANGUI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 198,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190553',
            'parroquia'=>'LOS ENCUENTROS',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 198,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190650',
            'parroquia'=>'EL PANGUI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 199,
	    ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190651',
            'parroquia'=>'EL GUISME',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 199,
			 
	    ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190652',
            'parroquia'=>'PACHICUTZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 199,
        ]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190653',
            'parroquia'=>'TUNDAYME',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 199,
		]);	  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190750',
            'parroquia'=>'ZUMBI',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 200,
		]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190751',
            'parroquia'=>'PAQUISHA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 200,
		]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190752',
            'parroquia'=>'TRIUNFO-DORADO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 200,
		]);	 

		DB::table('parroquias')->insert([
        	'codParroquia'=>'190753',
            'parroquia'=>'PANGUINTZA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 200,
		]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190850',
            'parroquia'=>'PALANDA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 201,
		]);	  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190851',
            'parroquia'=>'EL PORVENIR DEL CARMEN',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 201,
		]);	 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190852',
            'parroquia'=>'SAN FRANCISCO DEL VERGEL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 201,
		]);	 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190854',
            'parroquia'=>'LA CANELA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 201,
		]);	  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190950',
            'parroquia'=>'PAQUISHA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 202,
		]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190951',
            'parroquia'=>'BELLAVISTAA',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 202,
		]);	 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'190952',
            'parroquia'=>'NUEVO QUITO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 202,
		]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200150',
            'parroquia'=>'PUERTO BAQUERIZO MORENO',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 203,
		]);	  
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200151',
            'parroquia'=>'EL PROGRESO',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 203,
		]);	 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200152',
            'parroquia'=>'ISLA SANTA MARIA(FOREANA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 203,
		]);	 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200250',
            'parroquia'=>'PUERTO VILLAMIL',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 204,
	    ]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200251',
            'parroquia'=>'TOMAS DE BERLANGA(SANTO TOMAS)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 204,
        ]);    			
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200350',
            'parroquia'=>'PUERTO AYORA',
			'tipo'=>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 205,
		]);	 
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200351',
            'parroquia'=>'BELLAVISTA',
            'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 205,
		]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'200352',
            'parroquia'=>'SANTA ROSA(INCLUYE LA ISLA BALTRA)',
			'tipo'=>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 205,
		]);	
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210150',
            'parroquia'=>'NUEVA LOJA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210151',
            'parroquia'=>'CUYABENO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210152',
            'parroquia'=>'DURENO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210153',
            'parroquia'=>'GENERAL FARFÁN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210154',
            'parroquia'=>'TARAPOA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
  

		DB::table('parroquias')->insert([
        	'codParroquia'=>'210155',
            'parroquia'=>'EL ENO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210156',
            'parroquia'=>'PACAYACU',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210157',
            'parroquia'=>'JAMBELÍ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210158',
            'parroquia'=>'SANTA CECILIA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210159',
            'parroquia'=>'AGUAS NEGRAS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 206,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210250',
            'parroquia'=>'EL DORADO DE CASCALES',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 207,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210251',
            'parroquia'=>'EL REVENTADOR',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 207,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210252',
            'parroquia'=>'GONZALO PIZARRO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 207,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210253',
            'parroquia'=>'LUMBAQUÍ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 207,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210254',
            'parroquia'=>'PUERTO LIBRE',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 207,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210255',
            'parroquia'=>'SANTA ROSA DE SUCUMBÍOS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 207,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210350',
            'parroquia'=>'PUERTO EL CARMEN DEL PUTUMAYO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 208,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'210351',
            'parroquia'=>'PALMA ROJA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 208,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210352',
            'parroquia'=>'PUERTO BOLÍVAR (PUERTO MONTÚFAR)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 208,
        ]);

		DB::table('parroquias')->insert([
		'codParroquia'=>'210353',
            'parroquia'=>'PUERTO RODRÍGUEZ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 208,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210354',
            'parroquia'=>'SANTA ELENA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 208,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210450',
            'parroquia'=>'SHUSHUFINDI',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 209,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210451',
            'parroquia'=>'LIMONCOCHA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 209,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210452',
            'parroquia'=>'PAÑACOCHA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 209,
        ]);
		 DB::table('parroquias')->insert([
		'codParroquia'=>'210453',
            'parroquia'=>'SAN ROQUE (CAB. EN SAN VICENTE)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 209,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210454',
            'parroquia'=>'SAN PEDRO DE LOS COFANES',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 209,
        ]);
		 DB::table('parroquias')->insert([
		'codParroquia'=>'210455',
            'parroquia'=>'SIETE DE JULIO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 209,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210550',
            'parroquia'=>'LA BONITA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 210,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210551',
            'parroquia'=>'EL PLAYÓN DE SAN FRANCISCO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 210,
        ]);
		DB::table('parroquias')->insert([
		'codParroquia'=>'210552',
            'parroquia'=>'LA SOFÍA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 210,
        ]);        


		DB::table('parroquias')->insert([
		    'codParroquia'=>'210553',
            'parroquia'=>'ROSA FLORIDA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 210,
        ]);      
        DB::table('parroquias')->insert([
		   'codParroquia'=>'210554',
            'parroquia'=>'SANTA BÁRBARA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 210,
        ]); 
        DB::table('parroquias')->insert([
		    'codParroquia'=>'210650',
            'parroquia'=>'EL DORADO DE CASCALES',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 211,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'210651',
            'parroquia'=>'SANTA ROSA DE SUCUMBÍOS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 211,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'210652',
            'parroquia'=>'SEVILLA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 211,
        ]);		
		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'210750',
            'parroquia'=>'TARAPOA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 212,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'210751',
            'parroquia'=>'CUYABENO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 212,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'210752',
            'parroquia'=>'AGUAS NEGRAS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 212,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220150',
            'parroquia'=>'PUERTO FRANCISCO DE ORELLANA (EL COCA)',
            'tipo' =>'U',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220151',
            'parroquia'=>'DAYUMA',
			'tipo' =>'R',          
		    'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220152',
            'parroquia'=>'TARACOA (NUEVA ESPERANZA: YUCA)',
			'tipo' =>'R',
			'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);	
        

		DB::table('parroquias')->insert([
		    'codParroquia'=>'220153',
            'parroquia'=>'ALEJANDRO LABAKA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220154',
            'parroquia'=>'EL DORADO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220155',
            'parroquia'=>'EL EDÉN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220156',
            'parroquia'=>'GARCÍA MORENO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220157',
            'parroquia'=>'INÉS ARANGO (CAB. EN WESTERN)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220158',
            'parroquia'=>'LA BELLEZA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220159',
            'parroquia'=>'NUEVO PARAÍSO (CAB. EN UNIÓN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220160',
            'parroquia'=>'SAN JOSÉ DE GUAYUSA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220161',
            'parroquia'=>'SAN LUIS DE ARMENIA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 213,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220201',
            'parroquia'=>'TIPITINI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220250',
            'parroquia'=>'NUEVO ROCAFUERTE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220251',
            'parroquia'=>'CAPITÁN AUGUSTO RIVADENEYRA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220252',
            'parroquia'=>'CONONACO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);	

		DB::table('parroquias')->insert([
		    'codParroquia'=>'220253',
            'parroquia'=>'SANTA MARÍA DE HUIRIRIMA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220254',
            'parroquia'=>'TIPUTINI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);	
			DB::table('parroquias')->insert([
		    'codParroquia'=>'220255',
            'parroquia'=>'YASUNÍ',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 214,
        ]);	
		
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220350',
            'parroquia'=>'LA JOYA DE LOS SACHAS',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220351',
            'parroquia'=>'ENOKANQUI',
			'tipo' =>'R',  
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220352',
            'parroquia'=>'POMPEYA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220353',
            'parroquia'=>'SAN CARLOS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220354',
            'parroquia'=>'SAN SEBASTIÁN DEL COCA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220355',
            'parroquia'=>'LAGO SAN PEDRO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220356',
            'parroquia'=>'RUMIPAMBA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220357',
            'parroquia'=>'TRES DE NOVIEMBRE',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220358',
            'parroquia'=>'UNIÓN MILAGREÑA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 215,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220450',
            'parroquia'=>'LORETO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 216,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220451',
            'parroquia'=>'AVILA (CAB. EN HUIRUNO)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 216,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220452',
            'parroquia'=>'PUERTO MURIALDO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 216,
        ]);	
  

		DB::table('parroquias')->insert([
		    'codParroquia'=>'220453',
            'parroquia'=>'SAN JOSÉ DE PAYAMINO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 216,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220454',
            'parroquia'=>'SAN JOSÉ DE DAHUANO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 216,
        ]);	
		DB::table('parroquias')->insert([
		    'codParroquia'=>'220455',
            'parroquia'=>'SAN VICENTE DE HUATICOCHA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 216,
        ]);
		 DB::table('parroquias')->insert([
        	'codParroquia'=>'230101',
            'parroquia'=>'ABRAHAM CALAZACÒN',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230102',
            'parroquia'=>'BOMBOLÌ',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230103',
            'parroquia'=>'CHIGUILPE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230104',
            'parroquia'=>'RÌO TOACHI',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230105',
            'parroquia'=>'RÌO VERDE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230106',
            'parroquia'=>'SANTO DOMINGO DE LOS COLORADOS',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230107',
            'parroquia'=>'ZARACAY',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230150',
            'parroquia'=>'SANTO DOMINGO D E LOS COLORADOS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230151',
            'parroquia'=>'ALLURÌQUIN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230152',
            'parroquia'=>'PUERTO LIMÒN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230153',
            'parroquia'=>'LUZ DE  AMÈRICA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230154',
            'parroquia'=>'SAN JACINTO DEL BÙA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230155',
            'parroquia'=>'VALLE HERMOSO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'230156',
            'parroquia'=>'EL ESFUERZO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		

		DB::table('parroquias')->insert([
        	'codParroquia'=>'230157',
            'parroquia'=>'SANTA MARÌA DEL TOACHI',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 217,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240101',
            'parroquia'=>'BALLENITA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
  

		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240102',
            'parroquia'=>'SANTA ELENA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240150',
            'parroquia'=>'SANTA ELENA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240151',
            'parroquia'=>'ATAHUALPA',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240152',
            'parroquia'=>'COLONCHE',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240153',
            'parroquia'=>'CHANDUY',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240154',
            'parroquia'=>'MANGLARALTO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240155',
            'parroquia'=>'SIMÒN BOLÌVAR (JULIO MORENO)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240156',
            'parroquia'=>'SAN JOSÈ DE ANCÒN',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 219,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240250',
            'parroquia'=>'LA LIBERTAD',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 220,
        ]);
		
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240301',
            'parroquia'=>'CARLOS ESPINOZA LARREA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240302',
            'parroquia'=>'GRAL. ALBERTO ENRÌQUEZ GALLO',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240303',
            'parroquia'=>'VICENTE ROCAFUERTE',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240304',
            'parroquia'=>'SANTA ROSA',
			'tipo' =>'U',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240350',
            'parroquia'=>'SALINAS',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240351',
            'parroquia'=>'ANCONCITO',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		DB::table('parroquias')->insert([
        	'codParroquia'=>'240352',
            'parroquia'=>'JOSÈ LUIS TAMAYO (MUEY)',
			'tipo' =>'R',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'canton_id' => 221,
        ]);
		
}
}

