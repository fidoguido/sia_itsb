<?php

use Illuminate\Database\Seeder;

class CantonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cantones')->insert([
        	'codCanton'=>'0101',
            'canton'=>'CUENCA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0102',
            'canton'=>'GIRÓN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);
        
        DB::table('cantones')->insert([
        	'codCanton'=>'0103',
            'canton'=>'GUALACEO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0104',
            'canton'=>'NABÓN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0105',
            'canton'=>'PAUTE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0106',
            'canton'=>'PUCARA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0107',
            'canton'=>'SAN FERNANDO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0108',
            'canton'=>'SANTA ISABEL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0109',
            'canton'=>'SIGSIG',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0110',
            'canton'=>'OÑA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

         DB::table('cantones')->insert([
        	'codCanton'=>'0111',
            'canton'=>'CHORDELEG',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0112',
            'canton'=>'EL PAN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0113',
            'canton'=>'SEVILLA DE ORO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0114',
            'canton'=>'GUACHAPALA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0115',
            'canton'=>'CAMILO PONCE ENRÍQUEZ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 1,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0201',
            'canton'=>'GUARANDA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0202',
            'canton'=>'CHILLANES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0203',
            'canton'=>'CHIMBO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0204',
            'canton'=>'ECHANDÍA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0205',
            'canton'=>'SAN MIGUEL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0206',
            'canton'=>'CALUMA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0207',
            'canton'=>'LAS NAVES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 2,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0301',
            'canton'=>'AZOGUES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0302',
            'canton'=>'BIBLIAN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0303',
            'canton'=>'CAÑAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0304',
            'canton'=>'LA TRONCAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0305',
            'canton'=>'EL TAMBO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0306',
            'canton'=>'DÉLEG',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0307',
            'canton'=>'SUSCAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 3,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0401',
            'canton'=>'TULCÁN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 4,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0402',
            'canton'=>'BOLÍVAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 4,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0403',
            'canton'=>'ESPEJO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 4,
        ]);
        
        DB::table('cantones')->insert([
        	'codCanton'=>'0404',
            'canton'=>'MIRA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 4,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0405',
            'canton'=>'MONTUFAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 4,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0406',
            'canton'=>'SAN PEDRO DE HUACA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 4,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0501',
            'canton'=>'LATACUNGA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0502',
            'canton'=>'LA MANÁ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0503',
            'canton'=>'PANGUA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

		DB::table('cantones')->insert([
        	'codCanton'=>'0504',
            'canton'=>'PUJILI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0505',
            'canton'=>'SALCEDO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0506',
            'canton'=>'SAQUISILÍ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0507',
            'canton'=>'SIGCHOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 5,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0601',
            'canton'=>'RIOBAMBA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0602',
            'canton'=>'ALAUSI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0603',
            'canton'=>'COLTA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0604',
            'canton'=>'CHAMBO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0605',
            'canton'=>'CHUNCHI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0606',
            'canton'=>'GUAMOTE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0607',
            'canton'=>'GUANO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0608',
            'canton'=>'PALLATANGA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0609',
            'canton'=>'PENIPE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0610',
            'canton'=>'CUMANDÁ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 6,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0701',
            'canton'=>'MACHALA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0702',
            'canton'=>'ARENILLAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0703',
            'canton'=>'ATAHUALPA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0704',
            'canton'=>'BALSAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0705',
            'canton'=>'CHILLA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0706',
            'canton'=>'EL GUABO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0707',
            'canton'=>'HUAQUILLAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0708',
            'canton'=>'MARCABELÍ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0709',
            'canton'=>'PASAJE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0710',
            'canton'=>'PIÑAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0711',
            'canton'=>'PORTOVELO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0712',
            'canton'=>'SANTA ROSA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0713',
            'canton'=>'ZARUMA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0714',
            'canton'=>'LAS LAJAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 7,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0801',
            'canton'=>'ESMERALDAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0802',
            'canton'=>'ELOY ALFARO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0803',
            'canton'=>'MUISNE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0804',
            'canton'=>'QUININDÉ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0805',
            'canton'=>'SAN LORENZO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0806',
            'canton'=>'ATACAMES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0807',
            'canton'=>'RIOVERDE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 8,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0901',
            'canton'=>'GUAYAQUIL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0902',
            'canton'=>'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0903',
            'canton'=>'BALAO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0904',
            'canton'=>'BALZAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0905',
            'canton'=>'COLIMES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0906',
            'canton'=>'DAULE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0907',
            'canton'=>'DURÁN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0908',
            'canton'=>'EL EMPALME',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0909',
            'canton'=>'EL TRIUNFO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0910',
            'canton'=>'MILAGRO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0911',
            'canton'=>'NARANJAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0912',
            'canton'=>'NARANJITO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0913',
            'canton'=>'PALESTINA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0914',
            'canton'=>'PEDRO CARBO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0916',
            'canton'=>'SAMBORONDÓN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0918',
            'canton'=>'SANTA LUCIA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0919',
            'canton'=>'SALITRE (URBINA JADO)',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0920',
            'canton'=>'SAN JACINTO DE YAGUACHI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0921',
            'canton'=>'PLAYAS (GNRAL VIILLAMIL)',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0922',
            'canton'=>'SIMON BOLIVAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0923',
            'canton'=>'CORONEL MARCELINO MARIDUEÑA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0924',
            'canton'=>'LOMAS DE SARGENTILLO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0925',
            'canton'=>'NOBOL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0927',
            'canton'=>'GENERAL ANTONIO ELIZALDE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'0928',
            'canton'=>'ISIDRO AYORA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 9,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1001',
            'canton'=>'IBARRA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 10,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1002',
            'canton'=>'ANTONIO ANTE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 10,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1003',
            'canton'=>'COTACACHI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 10,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1004',
            'canton'=>'OTAVALO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 10,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1005',
            'canton'=>'PIMANPIRO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 10,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1006',
            'canton'=>'SAN MIGUEL DE URCUQUÍ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 10,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1101',
            'canton'=>'LOJA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1102',
            'canton'=>'CALVAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1103',
            'canton'=>'CATAMAYO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1104',
            'canton'=>'CELICA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1105',
            'canton'=>'CHAGUARPAMBA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1106',
            'canton'=>'ESPÍNDOLA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1107',
            'canton'=>'GONZANAMÁ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1108',
            'canton'=>'MACARÁ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1109',
            'canton'=>'PALTAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1110',
            'canton'=>'PUYANGO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1111',
            'canton'=>'SARAGURO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1112',
            'canton'=>'SOZORANGA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1113',
            'canton'=>'ZAPOTILLO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1114',
            'canton'=>'PINDAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1115',
            'canton'=>'QUILANGA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1116',
            'canton'=>'OLMEDO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 11,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1201',
            'canton'=>'BABAHOYO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1202',
            'canton'=>'BABA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1203',
            'canton'=>'MONTALVO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1204',
            'canton'=>'PUEBLOVIEJO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1205',
            'canton'=>'QUEVEDO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1206',
            'canton'=>'URDANETA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1207',
            'canton'=>'VENTANAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1208',
            'canton'=>'VINCES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1209',
            'canton'=>'PALENQUE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1210',
            'canton'=>'BUENA FÉ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1211',
            'canton'=>'VALENCIA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1212',
            'canton'=>'MOCACHE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1213',
            'canton'=>'QUINSALOMA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 12,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1301',
            'canton'=>'PORTOVIEJO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1302',
            'canton'=>'BOLÍVAR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1303',
            'canton'=>'CHONE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1304',
            'canton'=>'EL CARMEN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1305',
            'canton'=>'FLAVIO ALFARO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1306',
            'canton'=>'JIPIJAPA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1307',
            'canton'=>'JUNÍN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1308',
            'canton'=>'MANTA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1309',
            'canton'=>'MONTECRISTI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1310',
            'canton'=>'PAJAN',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1312',
            'canton'=>'ROCAFUERTE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1313',
            'canton'=>'SANTA ANA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1314',
            'canton'=>'SUCRE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1315',
            'canton'=>'TOSAGUA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1316',
            'canton'=>'24 MAYO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1317',
            'canton'=>'PEDERNALES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1318',
            'canton'=>'OLMEDO2A',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1319',
            'canton'=>'PUERTO LÓPEZ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1320',
            'canton'=>'JAMA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1321',
            'canton'=>'JARAMIJÓ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1322',
            'canton'=>'SAN VICENTE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1323',
            'canton'=>'MANGA DEL CURA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 13,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1401',
            'canton'=>'MORONA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1402',
            'canton'=>'GUALAQUIZA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1403',
            'canton'=>'LIMÓN INDANZA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1404',
            'canton'=>'PALORA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1405',
            'canton'=>'SANTIAGO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1406',
            'canton'=>'SUCÚA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1407',
            'canton'=>'HUAMBOYA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1408',
            'canton'=>'SAN JUAN BOSCO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1409',
            'canton'=>'TAISHA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1410',
            'canton'=>'LOGROÑO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1411',
            'canton'=>'PABLO SEXTO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1412',
            'canton'=>'TIWINTZA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 14,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1501',
            'canton'=>'TENA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 15,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1503',
            'canton'=>'ARCHIDONA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 15,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1504',
            'canton'=>'EL CHACHO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 15,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1507',
            'canton'=>'QUIJOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 15,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1509',
            'canton'=>'CARLOS JULIO AROSEMENA TOLA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 15,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1601',
            'canton'=>'PASTAZA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 16,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1602',
            'canton'=>'MERA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 16,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1603',
            'canton'=>'SANTA CLARA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 16,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1604',
            'canton'=>'ARAJUNO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 16,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1701',
            'canton'=>'QUITO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1702',
            'canton'=>'CAYAMBE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1703',
            'canton'=>'MEJIA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1704',
            'canton'=>'PEDRO MONCAYO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1705',
            'canton'=>'RUMIÑAHUI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1707',
            'canton'=>'SAN MIGUEL DE LOS BANCOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1708',
            'canton'=>'PEDRO VICENTE MALDONADO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1709',
            'canton'=>'PUERTO QUITO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 17,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1801',
            'canton'=>'AMBATO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1802',
            'canton'=>'BAÑOS DE AGUA SANTA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1803',
            'canton'=>'CEVALLOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1804',
            'canton'=>'MOCHA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1805',
            'canton'=>'PATATE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1806',
            'canton'=>'QUERO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1807',
            'canton'=>'SAN PEDRO DE PELILEO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1808',
            'canton'=>'SANTIAGO DE PILLARO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1809',
            'canton'=>'TISALEO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 18,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1901',
            'canton'=>'ZAMORA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1902',
            'canton'=>'CHINCHIPE',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1903',
            'canton'=>'NANGARITZA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1904',
            'canton'=>'YACUAMBI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1905',
            'canton'=>'YANTZAZA (YANZATZA)',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1906',
            'canton'=>'EL PANGUI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1907',
            'canton'=>'CENTINELA DEL CONDOR',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1908',
            'canton'=>'PALANDA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'1909',
            'canton'=>'PAQUISHA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 19,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2001',
            'canton'=>'SAN CRISTOBAL',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 20,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2002',
            'canton'=>'ISABELA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 20,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2003',
            'canton'=>'SANTA CRUZ',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 20,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2101',
            'canton'=>'NUEVA LOJA (LAGO AGRIO)',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2102',
            'canton'=>'GONZALO PIZARRO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2103',
            'canton'=>'PUTUMAYO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2104',
            'canton'=>'SHUSHUFINDI',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2105',
            'canton'=>'SUCUMBÍOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2106',
            'canton'=>'CASCALES',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2107',
            'canton'=>'CUYABENO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 21,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2201',
            'canton'=>'ORELLANA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 22,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2202',
            'canton'=>'AGUARICO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 22,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2203',
            'canton'=>'LA JOYA DE LOS SACHAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 22,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2204',
            'canton'=>'LORETO',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 22,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2301',
            'canton'=>'SANTO DOMINGO DE LOS COLORADOS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 23,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2302',
            'canton'=>'LA CONCORDIA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 23,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2401',
            'canton'=>'SANTA ELENA',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 24,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2402',
            'canton'=>'LA LIBERTAD',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 24,
        ]);

        DB::table('cantones')->insert([
        	'codCanton'=>'2403',
            'canton'=>'SALINAS',
            'created_at' => date('Y-m-d H:m:s'),
           	'updated_at' => date('Y-m-d H:m:s'),
           	'provincia_id' => 24,
        ]);       

    }
}
