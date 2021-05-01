<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            [
                "title" => "live wire Cool",
                "content" => "lorem ipsum dolor sit amet",
                "likes" => 3,
                "dislikes" => 1,
                'type' => 'Article'
            ],
            [
                "title" => "live sugoi Cool",
                "content" => "lorem ipsum dolor sit amet",
                "likes" => 2,
                "dislikes" => 10,
                'type' => 'Album'
            ],
            [
                "title" => "live my Cool",
                "content" => "lorem ipsum dolor sit amet",
                "likes" => 30,
                "dislikes" => 1,
                'type' => 'Video'
            ],
        ]);
    }
}
