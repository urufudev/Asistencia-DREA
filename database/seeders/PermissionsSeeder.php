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
            'name' => 'registrar r??gimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista r??gimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver r??gimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar r??gimen laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar r??gimen laboral',
            'guard_name' => 'web',
        ]);

        //Regimen Laboral
        Permission::create([
            'name' => 'registrar r??gimen de pensi??n',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista r??gimen de pensi??n',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver r??gimen de pensi??n',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar r??gimen de pensi??n',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar r??gimen de pensi??n',
            'guard_name' => 'web',
        ]);

        //Condici??n Laboral
        Permission::create([
            'name' => 'registrar condici??n laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'lista condici??n laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver condici??n laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar condici??n laboral',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar condici??n laboral',
            'guard_name' => 'web',
        ]);

        //Condici??n Laboral
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

        //Condici??n Laboral
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

        
        //Personal de Puerta
        Permission::create([
            'name' => 'registrar asistencia',
            'guard_name' => 'web',
        ]);

        
       

        //Admin
        $admin = Role::create(['name' => 'Administrador']);

        Role::create(['name'=>'Trabajador'])->givePermissionTo([
            'lista presencial',
            'registrar presencial',
            'eliminar presencial'
        ]);;

        Role::create(['name'=>'Personal de Asistencia'])->givePermissionTo([
            'registrar asistencia',
            
        ]);;

    
        
        $user = User::find(1); //Italo Morales
        $user->assignRole('Administrador');
    }
}
