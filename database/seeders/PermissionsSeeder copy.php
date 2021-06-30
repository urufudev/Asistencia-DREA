<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //roles
        Permission::create([
            'name' => 'lista roles',
            'guard_name' => 'lista roles',
        ]);
        Permission::create([
            'name' => 'ver roles',
            'guard_name' => 'ver roles',
        ]);
        Permission::create([
            'name' => 'editar roles',
            'guard_name' => 'editar roles',
        ]);
        Permission::create([
            'name' => 'eliminar roles',
            'guard_name' => 'eliminar roles',
        ]);
        Permission::create([
            'name' => 'registrar roles',
            'guard_name' => 'registrar roles',
        ]);
        //permisos
        Permission::create([
            'name' => 'lista permisos',
            -'name' => 'lista permisos',
        ]);
        Permission::create([
            'name' => 'ver permisos',
            -'name' => 'ver permisos',
        ]);
        Permission::create([
            'name' => 'editar permisos',
            -'name' => 'editar permisos',
        ]);
        Permission::create([
            'name' => 'eliminar permisos',
            -'name' => 'eliminar permisos',
        ]);
        Permission::create([
            'name' => 'registrar permisos',
            -'name' => 'registrar permisos',
        ]);
        //usuarios
        Permission::create([
            'name' => 'registrar usuarios',
            -'name' => 'registrar usuarios',
        ]);
        Permission::create([
            'name' => 'lista usuarios',
            -'name' => 'lista usuarios',
        ]);
        Permission::create([
            'name' => 'ver usuarios',
        ]);
        Permission::create([
            'name' => 'editar usuarios',
        ]);
        Permission::create([
            'name' => 'eliminar usuarios',
        ]);

        //Regimen Laboral
        Permission::create([
            'name' => 'registrar régimen laboral',
        ]);
        Permission::create([
            'name' => 'lista régimen laboral',
        ]);
        Permission::create([
            'name' => 'ver régimen laboral',
        ]);
        Permission::create([
            'name' => 'editar régimen laboral',
        ]);
        Permission::create([
            'name' => 'eliminar régimen laboral',
        ]);

        //Regimen Laboral
        Permission::create([
            'name' => 'registrar régimen de pensión',
        ]);
        Permission::create([
            'name' => 'lista régimen de pensión',
        ]);
        Permission::create([
            'name' => 'ver régimen de pensión',
        ]);
        Permission::create([
            'name' => 'editar régimen de pensión',
        ]);
        Permission::create([
            'name' => 'eliminar régimen de pensión',
        ]);

        //Condición Laboral
        Permission::create([
            'name' => 'registrar condición laboral',
        ]);
        Permission::create([
            'name' => 'lista condición laboral',
        ]);
        Permission::create([
            'name' => 'ver condición laboral',
        ]);
        Permission::create([
            'name' => 'editar condición laboral',
        ]);
        Permission::create([
            'name' => 'eliminar condición laboral',
        ]);

        //Condición Laboral
        Permission::create([
            'name' => 'registrar cargo',
        ]);
        Permission::create([
            'name' => 'lista cargo',
        ]);
        Permission::create([
            'name' => 'ver cargo',
        ]);
        Permission::create([
            'name' => 'editar cargo',
        ]);
        Permission::create([
            'name' => 'eliminar cargo',
        ]);

        //Condición Laboral
        Permission::create([
            'name' => 'registrar oficinas',
        ]);
        Permission::create([
            'name' => 'lista oficinas',
        ]);
        Permission::create([
            'name' => 'ver oficinas',
        ]);
        Permission::create([
            'name' => 'editar oficinas',
        ]);
        Permission::create([
            'name' => 'eliminar oficinas',
        ]);

        
       

        //Admin
        $admin = Role::create(['name' => 'Administrador']);

    
        
        $user = User::find(1); //Italo Morales
        $user->assignRole('Administrador');
    }
}
