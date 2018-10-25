<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Messages;

class MessagesTableSeeder extends Seeder
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
         DB::table('messages')->delete();

         Messages::create([
            'date'=> 01-02-2018,
            'type'=>'type 1',
            'subject'=>'subject 1',
            'body'=>'body 1',
            'receipent' =>'receipent 1',
            'sender'=>'sender 1'
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
         Messages::create([
           'date'=> 01-02-2018,
           'type'=>'type 2',
           'subject'=>'subject 2',
           'body'=>'body 2',
           'receipent' =>'receipent 2',
           'sender'=>'sender 2'
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Messages::create([
           'date'=> 03-02-2018,
           'type'=>'type 3',
           'subject'=>'subject 3',
           'body'=>'body 3',
           'receipent' =>'receipent 3',
           'sender'=>'sender 3'
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Messages::create([
           'date'=> 04-02-2018,
           'type'=>'type 4',
           'subject'=>'subject 4',
           'body'=>'body 4',
           'receipent' =>'receipent 4',
           'sender'=>'sender 4'
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
        }
   	}
       }
