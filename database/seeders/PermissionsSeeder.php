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
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar roles',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'registrar roles',
            'guard_name' => 'web',
        ]);
        //permisos
        Permission::create([
            'name' => 'lista permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar permisos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'registrar permisos',
            'guard_name' => 'web',
        ]);
        //usuarios
        Permission::create([
            'name' => 'registrar usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar usuarios',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar usuarios',
            'guard_name' => 'web',
        ]);

        //Regimen Laboral
        Permission::create([
            'name' => 'registrar régimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista régimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver régimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar régimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar régimen laboral',
            'guard_name' => 'web',
        ]);

        //Regimen Laboral
        Permission::create([
            'name' => 'registrar régimen de pensión',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista régimen de pensión',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver régimen de pensión',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar régimen de pensión',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar régimen de pensión',
            'guard_name' => 'web',
        ]);

        //Condición Laboral
        Permission::create([
            'name' => 'registrar condición laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista condición laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver condición laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar condición laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar condición laboral',
            'guard_name' => 'web',
        ]);

        //Condición Laboral
        Permission::create([
            'name' => 'registrar cargo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista cargo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver cargo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar cargo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar cargo',
            'guard_name' => 'web',
        ]);

        //Condición Laboral
        Permission::create([
            'name' => 'registrar oficinas',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista oficinas',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver oficinas',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar oficinas',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar oficinas',
            'guard_name' => 'web',
        ]);


        //Eventos
        Permission::create([
            'name' => 'registrar eventos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista eventos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver eventos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar eventos',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar eventos',
            'guard_name' => 'web',
        ]);

        //Presencial
        Permission::create([
            'name' => 'lista presencial',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'registrar presencial',
            'guard_name' => 'web',
        ]);
    
        Permission::create([
            'name' => 'eliminar presencial',
            'guard_name' => 'web',
        ]);

        
       

        //Admin
        $admin = Role::create(['name' => 'Administrador']);

        Role::create(['name'=>'Trabajador']);

    
        
        $user = User::find(1); //Italo Morales
        $user->assignRole('Administrador');
    }
}
