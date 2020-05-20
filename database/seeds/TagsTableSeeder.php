<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $value) {
        	
        	Tag::create([
        		'tag_name' => $faker->name,
        	]);
        }

    }
}
