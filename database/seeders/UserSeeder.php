<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Salman Abbas',
            'email' => 'salmanabbaszaidi@outlook.com',
            'password' => Hash::make('12345678'),
        ]);

        $admin->attachRole('Admin');

        $host1 = User::create([
            'name' => 'John Doe',
            'email' => 'John@gmail.com',
            'password' => Hash::make('host1234'),
        ]);

        $host1->attachRole('Host');

        $host2 = User::create([
            'name' => 'Muhammad Ali',
            'email' => 'muhammad@gmail.com',
            'password' => Hash::make('host12345'),
        ]);

        $host2->attachRole('Host');
    }
}
