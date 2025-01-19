<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Article::factory(20)->create();
        Comment::factory(40)->create();

        $list = ['Tech','News','Art','OSS','Music'];
        foreach($list as $data){
            Category::create(['name' => $data]);
        }
        User::factory()->create(['name' => 'Alice','email' => 'alice@gmail.com']);
        User::factory()->create(['name' => 'Bob','email' => 'bob@gmail.com']);
    }
}
