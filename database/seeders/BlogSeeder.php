<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();
        $tags = Tag::all();

        for ($i = 1; $i <= 10; $i++) {
            $category = $categories->random();

            // Generate placeholder image
            $imageUrl = "https://picsum.photos/600/400?random=$i";
            $imageName = "blog_$i.jpg";

            // Download image to public/uploads/blogs
            $imageContents = file_get_contents($imageUrl);
            file_put_contents(public_path("uploads/blogs/$imageName"), $imageContents);

            $blog = Blog::create([
                'user_id' => 1, // Make sure admin exists
                'category_id' => $category->id,
                'title' => "Tech Blog Post $i",
                'slug' => Str::slug("Tech Blog Post $i"),
                'feature_image' => $imageName,
                'description' => "<p>This is a detailed post on <strong>{$category->name}</strong> covering programming, tech tips, and real-world examples.</p><p>Post #$i is designed to help developers understand new technologies and best practices in coding.</p>",
            ]);

            // Attach random 1-3 tags
            $blog->tags()->sync($tags->random(rand(1, 3))->pluck('id')->toArray());
        }
    }
}
