<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->defaultUsersInsert();
    	$faker = Faker\Factory::create();

    	foreach (range(1, 10) as $index) {
    		User::create([
	        	'name' => $faker->name, 
	        	'email' => $faker->unique()->email, 
	        	'password' =>bcrypt($faker->password),
        	]);
    	}

    	
        
    }


    public function defaultUsersInsert(){
    	User::create([
        	'name' => 'Masum', 
        	'email' => 'masumdhaka99@gmail.com', 
        	'password' => bcrypt('123'),
        ]);
    }
}
