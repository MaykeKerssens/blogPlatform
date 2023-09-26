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
        $user1 = User::create([
            'name' => 'Fedde van Gils',
            'email' => 'subscriber@test.com',
            'password' => Hash::make('12345678')
        ]);
        $user1->assignRole('subscriber');
        $user1->save();

        $user2 = User::create([
            'name' => 'Mayke Kerssens',
            'email' => 'auther@test.com',
            'password' => Hash::make('12345678')
        ]);
        $user2->assignRole('subscriber');
        $user2->assignRole('author');
        $user2->save();

        $user3 = User::create([
            'name' => 'Jan',
            'email' => 'test2@test.com',
            'password' => Hash::make('12345678')
        ]);
        $user3->assignRole('subscriber');
        $user3->save();

        $user4 =User::create([
            'name' => 'Isabel',
            'email' => 'test3@test.com',
            'password' => Hash::make('12345678')
        ]);
        $user4->assignRole('subscriber');
        $user4->save();

        $user5 = User::create([
            'name' => 'Kiki',
            'email' => 'test4@test.com',
            'password' => Hash::make('12345678')
        ]);
        $user5->assignRole('subscriber');
        $user5->save();
    }

}
