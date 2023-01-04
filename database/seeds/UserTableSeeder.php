<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\UserModel as User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'uuid' => Str::uuid(),
        	'name' => 'admin',
        	'username' => 'admin',
        	'phone' => '08123456789',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('password')
        ]);

        $role = Role::create([
            'uuid' => Str::uuid(),
            'name' => 'Admin'
        ]);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
