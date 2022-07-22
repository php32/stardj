<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Roles::create([
            'name' => 'admin',
            'guard_name' => 'auth'
        ]);

        $user = Roles::create([
            'name' => 'user',
            'guard_name' => 'user'
        ]);

        $dj = Roles::create([
            'name' => 'DJ',
            'guard_name' => 'DJ Owner'
        ]);
    }
}
