<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Web Development', 'description' => 'Articles about building websites and web applications.'],
            ['name' => 'Programming', 'description' => 'Programming tips, tutorials, and guides for developers.'],
            ['name' => 'Mobile Apps', 'description' => 'Learn to create mobile applications for iOS and Android.'],
            ['name' => 'Data Science', 'description' => 'Explore data analysis, machine learning, and AI topics.'],
            ['name' => 'Cybersecurity', 'description' => 'Stay updated on security best practices and hacking prevention.'],
        ];

        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name']); // <-- add this
            Category::create($category);
        }
    }
}
