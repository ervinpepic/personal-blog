<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        Post::factory()->create();

        // $user = User::factory()->create();
        
        // $perosnal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $sport = Category::create([
        //     'name' => 'Sport',
        //     'slug' => 'sport',
        // ]);

        // $news = Category::create([
        //     'name' => 'News',
        //     'slug' => 'news',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $perosnal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>Lorem Ipsum is...</p>',
        //     'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $sport->id,
        //     'title' => 'My Sport Post',
        //     'slug' => 'my-sport-post',
        //     'excerpt' => '<p>Lorem Ipsum is...</p>',
        //     'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $news->id,
        //     'title' => 'My News Post',
        //     'slug' => 'my-news-post',
        //     'excerpt' => '<p>Lorem Ipsum is...</p>',
        //     'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
        // ]);
    }
}
