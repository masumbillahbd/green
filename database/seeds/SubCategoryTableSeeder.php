<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker =  Faker\Factory::create();

        foreach (range(1, 10) as $index) {

        	SubCategory::create([
	        	'category_id'=> rand(9, 10),
	        	'sub_category_name'=> $faker->name,
	        	'sub_category_url'=> $faker->url,
	        ]);

        }
       
    }
}
