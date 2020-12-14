<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'role' => 'admin',
            'phone' => '09123456789',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        User::factory(20)->create();
        $this->call([
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
        ]);

        //insert post_tag and category_post records
        $post = 2000;

        $tags = Tag::all()->pluck('id');
        $categories = Category::all()->pluck('id');

        for ($i = 0; $i < $post; $i++){

            $tag = rand(3, 10);
            $tags = $tags->shuffle();
            for ($j = 0; $j < $tag; $j++){
                DB::table('post_tag')->insert([
                    'post_id' => $i + 1,
                    'tag_id' => $tags[$j],
                ]);
            }

            $category = rand(1, 5);
            $categories = $categories->shuffle();
            for ($j = 0; $j < $category; $j++){
                DB::table('category_post')->insert([
                    'post_id' => $i + 1,
                    'category_id' => $categories[$j],
                ]);
            }
        }
    }
}
