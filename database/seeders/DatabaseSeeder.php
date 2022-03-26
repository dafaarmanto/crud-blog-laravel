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
        User::create([
            "name" => "Dafa Armanto",
            "username" => "@dafaarmanto",
            "email" => "randikadafa@gmail.com",
            "password" => bcrypt('dafaarmanto')
        ]);

        // User::create([
        //     "name" => "Gojo Satoru",
        //     "username" => "@gojousatoru",
        //     "email" => "manggojo@gmail.com",
        //     "password" => bcrypt('dafaarmanto')
        // ]);

        User::factory(5)->create();

        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);

        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Category::create([
            "name" => "UI/UX Design",
            "slug" => "ui-ux-design"
        ]);

        Category::create([
            "name" => "Business",
            "slug" => "business"
        ]);

        Category::create([
            "name" => "Blockchain",
            "slug" => "blockchain"
        ]);

        Post::factory(20)->create();
    }
}
