<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::create([
            'title' => 'Tijdsnood',
            'content' => 'Ik ben een toets web development aan het maken, en ben bang dat ik mischien in tijdsnood terecht ga komen. Heeft iemand hier tips voor?',
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Probleem 2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Probleem 3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 3
        ]);

        Post::create([
            'title' => 'Probleem 4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 6
        ]);

        Post::create([
            'title' => 'Probleem 5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 4
        ]);

        Post::create([
            'title' => 'Probleem 6',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 5
        ]);

        Post::create([
            'title' => 'Probleem 7',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 5
        ]);

        Post::create([
            'title' => 'Probleem 8',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Probleem 9',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Probleem 10',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In massa tempor nec feugiat nisl pretium fusce id. ',
            'user_id' => 3
        ]);


    }
}
