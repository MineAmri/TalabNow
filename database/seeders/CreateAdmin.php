<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
//use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;

class CreateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Pape AMin', 
        	'email' => 'admin@papi.com',
        	'password' => bcrypt('passpass')
        ]);

       // $role = Role::create(['name' => 'Administrateur']);
        //$permissions = Permission::pluck('id','id')->all();
        //$role->syncPermissions($permissions);
        //$user->assignRole([$role->id]);
    }
}
