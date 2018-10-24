<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use App\Account;

class accountSeeder extends Seeder
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
         DB::table('accounts')->delete();

         Account::create([
             'name' => 'First account',
             'address'=> 'Nairobi'


         ]);
         Account::create([
             'name' => 'Lisa Doe',
              'address'=> 'Kisumu'
         ]);

         Account::create([
             'name' => 'Jane Doe',
             'address'=> 'Mombasa'
         ]);

         Account::create([
             'name' => 'Jason Bourne',
             'address'=> 'Eldoret'
         ]);
        }
   	}
       }
