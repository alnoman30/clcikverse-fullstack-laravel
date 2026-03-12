<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Devices and electronic gadgets'
            ],
            [
                'name' => 'Fashion',
                'description' => 'Clothing and fashion accessories'
            ],
            [
                'name' => 'Home Appliances',
                'description' => 'Appliances for home use'
            ],
            [
                'name' => 'Books',
                'description' => 'Educational and story books'
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports equipment and accessories'
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'description' => $category['description'],
                'slug' => Str::slug($category['name']),
            ]);
        }
    }
}
