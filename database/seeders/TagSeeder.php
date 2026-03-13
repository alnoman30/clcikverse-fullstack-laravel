<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            ['name' => 'Laravel', 'description' => 'PHP framework for web applications.'],
            ['name' => 'PHP', 'description' => 'Server-side scripting language tutorials.'],
            ['name' => 'JavaScript', 'description' => 'Client-side scripting and front-end development.'],
            ['name' => 'CSS', 'description' => 'Styling and design of web pages.'],
            ['name' => 'VueJS', 'description' => 'Progressive JavaScript framework for front-end apps.'],
        ];

        foreach ($tags as $tag) {
            $tag['slug'] = Str::slug($tag['name']); // <-- generate slug here
            Tag::create($tag);
        }
    }
}
