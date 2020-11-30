<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $count = 2000;
        for ($i = 0; $i < $count; $i++) {
            Image::factory()->for(
                Post::factory(),'imageable'
            )->create();
        }
    }
}
