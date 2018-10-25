<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Meetings;

class ContactTableSeeder extends Seeder
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
         DB::table('meeting')->delete();

         Meetings::create([
            'date' => '1st November',
            'place'=>'Place 1',
            'location'=>'location 1',
            'status'=>'status1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
         Meetings::create([
           'date' => '2nd November',
           'place'=>'Place 2',
           'location'=>'location 2',
           'status'=>'status2',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Meetings::create([
           'date' => '3rd November',
           'place'=>'Place 3',
           'location'=>'location 3',
           'status'=>'status 3',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Meetings::create([
           'date' => '4th November',
           'place'=>'Place 4',
           'location'=>'location 4',
           'status'=>'status4',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
        }
   	}
       }
