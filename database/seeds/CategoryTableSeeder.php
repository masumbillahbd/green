<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // $x = 1;
        // $number = $x++;

        // for($x=0; $x<= 10; $x++)
        $number = 1;

        foreach (range(1, 10) as $value) {
            Category::create([
                'category_name' => $faker->name,
                'category_url' => $faker->url,
                'category_position' => $number++,
            ]);
        }
        
    }
}
