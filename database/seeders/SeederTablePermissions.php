<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class SeederTablePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            //Operaciones sobre tabla roles
            'view-role',
            'create-role',
            'edit-role',
            'delete-role',
        ];

        foreach($permissions as $permission) {
            Permission::create(['name'=>$permission]);
        }
    }
}
