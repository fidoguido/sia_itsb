<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Model::unguard();
        //Creamos usuario
        $user = new User();
        $user->name="administrador";
        $user->email = "admin@itsb.edu.ec";
        $user->password = Hash::make('admin');
        $user->save();
		
        Role::create([
        	'name'		=> 'Admin',
        	'slug'		=>	'admin',
        	'special'	=>	'all-access'
        ]);
    }
}
