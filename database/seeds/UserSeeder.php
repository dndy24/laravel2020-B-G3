<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        static $angka = 1;
    	for($i = 1; $i <= 100; $i++){
    	    // insert data ke table menggunakan Faker
    		DB::table('users')->insert([
    			'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password')
    		]);
    	}
    }
}
