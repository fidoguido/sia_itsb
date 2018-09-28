<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
        	'name'			=>	'Navegar usuarios',
        	'slug'			=>	'users.index',
        	'description'	=>	'Lista y navega todos los usuario del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ver detalle de usuarios',
        	'slug'			=>	'users.show',
        	'description'	=>	'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Edición de usuarios',
        	'slug'			=>	'users.edit',
        	'description'	=>	'Edita cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Eliminar usuario',
        	'slug'			=>	'users.destroy',
        	'description'	=>	'Edita cualquier dato de un usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name'			=>	'Navegar roles',
        	'slug'			=>	'roles.index',
        	'description'	=>	'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Ver roles',
        	'slug'			=>	'roles.show',
        	'description'	=>	'Ver en detalle los roles del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Crear roles',
        	'slug'			=>	'roles.create',
        	'description'	=>	'Crea un nuevo rol al sistema',
        ]);
        Permission::create([
        	'name'			=>	'Edición de roles',
        	'slug'			=>	'roles.edit',
        	'description'	=>	'Edita cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'			=>	'Eliminar roles',
        	'slug'			=>	'roles.destroy',
        	'description'	=>	'Edita cualquier dato de un rol del sistema',
        ]);

        //Persona
        Permission::create([
        	'name'			=>	'Navegar Personas',
        	'slug'			=>	'personas.index',
        	'description'	=>	'Lista y navega todos los registros de personas',
        ]);
        Permission::create([
        	'name'			=>	'Navegar Persona',
        	'slug'			=>	'personas.show',
        	'description'	=>	'Ver en detalle los datos de una persona en el sistema',
        ]);
        Permission::create([
        	'name'			=>	'Navegar Persona',
        	'slug'			=>	'personas.create',
        	'description'	=>	'Crea una nueva persona en el sistema',
        ]);
        Permission::create([
        	'name'			=>	'Edición de Persona',
        	'slug'			=>	'personas.edit',
        	'description'	=>	'Edita cualquier dato de una perona en el sistema',
        ]);
        Permission::create([
        	'name'			=>	'Eliminar Persona',
        	'slug'			=>	'personas.destroy',
        	'description'	=>	'Elimina una persona en el sistema',
        ]); 
    }
}
