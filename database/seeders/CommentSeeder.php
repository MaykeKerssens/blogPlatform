<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor. Cras sed felis eget velit aliquet sagittis id.',
            'user_id' => 2,
            'post_id' => 1
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 1
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor. Cras sed felis eget velit aliquet sagittis id.',
            'user_id' => 2,
            'post_id' => 1
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 1
        ]);



        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor. Cras sed felis eget velit aliquet sagittis id.',
            'user_id' => 2,
            'post_id' => 2
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 2
        ]);



        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor. Cras sed felis eget velit aliquet sagittis id.',
            'user_id' => 2,
            'post_id' => 3
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 3
        ]);



        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor. Cras sed felis eget velit aliquet sagittis id.',
            'user_id' => 2,
            'post_id' => 5
        ]);



        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 6
        ]);


        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 7
        ]);


        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 8
        ]);



        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 9
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 9
        ]);

        Comment::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna eget est lorem ipsum.',
            'user_id' => 2,
            'post_id' => 9
        ]);

    }
}
