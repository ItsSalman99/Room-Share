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
        $user = User::create([
            'name' => 'Salman Abbas',
            'email' => 'salmanabbaszaidi@outlook.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->attachRole('Admin');
    }
}
