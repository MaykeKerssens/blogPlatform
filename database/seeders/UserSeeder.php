<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Fedde van Gils',
            'email' => 'f.vangils@curio.nl',
            'password' => Hash::make('welkom123')
        ]);

        User::create([
            'name' => 'Mayke Kerssens',
            'email' => 'test@test.nl',
            'password' => Hash::make('12345678')
        ]);


        User::create([
            'name' => 'Piet',
            'email' => 'test1@test.nl',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Jan',
            'email' => 'test2@test.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Isabel',
            'email' => 'test3@test.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Kiki',
            'email' => 'test4@test.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
