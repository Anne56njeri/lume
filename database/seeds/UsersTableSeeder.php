<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /*
     we loop through as we create the dummy data
     */
     public function run()
       {
           $faker = Faker::create();
       	foreach (range(1,10) as $index) {
   	        DB::table('users')->insert([
   	            'name' => $faker->name,
   	            'email' => $faker->email,
   	            'password' =>  password_hash('123456', PASSWORD_BCRYPT),
   	        ]);
   	}
       }
}
