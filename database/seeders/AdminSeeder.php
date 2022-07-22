<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Supper Admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // $role = Role::where(['name' => 'admin'])->first();
        $role = Role::where('name', 'admin')->first();

        $user->assignRole($role);
        dd($user);
    }
}
