<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::create([
            'name' => 'Admin',
            'display_name' => 'Admin',
            'description' => 'Can access all features!'
        ]);
        Role::create([
            'name' => 'Host',
            'display_name' => 'Host',
            'description' => 'Can access Host features!'
        ]);
        Role::create([
            'name' => 'User',
            'display_name' => 'User',
            'description' => 'Can access normal features features!'
        ]);
    }
}
