<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-create',
            'role-read',
            'role-update',
            'role-delete',
         ];

        foreach ($permissions as $permission) {
            Permission::create([
                'uuid' => Str::uuid(),
                'name' => $permission
            ]);
        }
    }
}
