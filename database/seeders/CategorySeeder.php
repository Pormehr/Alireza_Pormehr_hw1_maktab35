<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $count = 50;
        for ($i = 0; $i < $count; $i++) {
            Image::factory()->for(
                Category::factory(), 'imageable'
            )->create();
        }
    }
}
