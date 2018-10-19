<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\User;
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
         {
         DB::table('users')->delete();

         User::create([
             'name' => 'John Doe',
             'email' => 'john.doe@gmail.com',
             'password' => password_hash('123456', PASSWORD_BCRYPT),
             'role' => 'admin'
         ]);
         User::create([
             'name' => 'Lisa Doe',
             'email' => 'lisa.doe@gmail.com',
             'password' => password_hash('123456', PASSWORD_BCRYPT),
             'role' => 'admin'
         ]);

         User::create([
             'name' => 'Jane Doe',
             'email' => 'jane.doe@gmail.com',
             'password' => password_hash('123456', PASSWORD_BCRYPT),
             'role' => 'admin',
         ]);

         User::create([
             'name' => 'Jason Bourne',
             'email' => 'jason@gmail.com',
             'password' => password_hash('123456', PASSWORD_BCRYPT),
             'role' =>'user'
         ]);
        }
   	}
       }
