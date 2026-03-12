<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            // Electronics
            ['name' => 'Smartphones', 'description' => 'Mobile phones and smartphones'],
            ['name' => 'Laptops', 'description' => 'Portable computers'],
            ['name' => 'Headphones', 'description' => 'Audio headphones and earbuds'],
            ['name' => 'Smart Watches', 'description' => 'Wearable smart devices'],
            ['name' => 'Gaming Consoles', 'description' => 'PlayStation, Xbox, Nintendo, etc.'],

            // Books
            ['name' => 'Fiction', 'description' => 'Novels and fictional stories'],
            ['name' => 'Non-Fiction', 'description' => 'Informative and factual books'],
            ['name' => 'Science', 'description' => 'Books on science and technology'],
            ['name' => 'History', 'description' => 'Historical books and biographies'],
            ['name' => 'Children', 'description' => 'Books for kids and young readers'],

            // Home Appliances
            ['name' => 'Refrigerators', 'description' => 'Cooling and food storage appliances'],
            ['name' => 'Microwaves', 'description' => 'Kitchen microwaves and ovens'],
            ['name' => 'Vacuum Cleaners', 'description' => 'Home cleaning devices'],
            ['name' => 'Air Conditioners', 'description' => 'Cooling appliances for homes'],
            ['name' => 'Washing Machines', 'description' => 'Laundry washing machines'],

            // Fashion
            ['name' => 'Men Clothing', 'description' => 'Apparel for men'],
            ['name' => 'Women Clothing', 'description' => 'Apparel for women'],
            ['name' => 'Footwear', 'description' => 'Shoes and sandals'],
            ['name' => 'Accessories', 'description' => 'Bags, belts, hats, and more'],
            ['name' => 'Jewelry', 'description' => 'Rings, necklaces, bracelets'],
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag['name'],
                'description' => $tag['description'],
                'slug' => Str::slug($tag['name']),
            ]);
        }
    }
}
