<?php

use Illuminate\Database\Seeder;
use App\Photo;


class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

        $image = 'masum.jpg';
        foreach (range(1, 10) as $value) {
        	
        	Photo::create([
        		'photo_tag' => $faker->name,
        		'photo' => $image,

        	]);

        }
    }
}
//http://localhost/eloquent_two/Upload/Photos/2020-05-13_1589399242.jpg