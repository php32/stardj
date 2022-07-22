<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'DJOwner', 
            'email' => 'dj@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::where(['name' => 'DJ'])->first();
     
        // $permissions = Permission::pluck('id','id')->all();
   
        // $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
