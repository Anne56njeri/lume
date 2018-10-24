<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Accounts;

class AccountTableSeeder extends Seeder
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

         Accounts::create([
             'name' => 'First account',
             'address'=> 'Nairobi',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
         Accounts::create([
             'name' => 'Lisa Doe',
              'address'=> 'Kisumu',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Accounts::create([
             'name' => 'Jane Doe',
             'address'=> 'Mombasa',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Accounts::create([
             'name' => 'Jason Bourne',
             'address'=> 'Eldoret',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
        }
   	}
       }
