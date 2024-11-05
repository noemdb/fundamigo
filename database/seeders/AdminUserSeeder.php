<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear el rol de Admin si no existe
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);

        // Crear permisos específicos (agrega los que necesites)
        $permissions = [
            'manage users',
            'edit posts',
            'delete posts',
            'publish posts',
            'view reports',
        ];

        foreach ($permissions as $permissionName) {
            $permission = Permission::firstOrCreate(['name' => $permissionName]);
            $adminRole->givePermissionTo($permission);
        }

        // Crear un usuario Admin
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('password'), // Cambia la contraseña en producción
                'email_verified_at' => now(),
            ]
        );

        // Asignar el rol de Administrador al usuario
        $adminUser->assignRole($adminRole);
    }
}
