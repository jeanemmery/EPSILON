<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Tee-Shirt',
            'slug' => 'tee-shirt'
        ]);

        Category::create([
            'name' => 'Sweat',
            'slug' => 'sweat'
        ]);

        Category::create([
            'name' => 'Short',
            'slug' => 'short'
        ]);

        Category::create([
            'name' => 'Casquette',
            'slug' => 'casquette'
        ]);

        Category::create([
            'name' => 'Coque',
            'slug' => 'coque'
        ]);
    }
}
