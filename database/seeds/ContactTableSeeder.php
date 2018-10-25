<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Contact;

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
         DB::table('contacts')->delete();

         Contact::create([
             'name' => 'First account',

             'phone number'=>'12345',
             'address'=> 'Nairobi',
             'company'=>'company1',
             'title'=>'title1',
             'notes'=>'note1',
             'meetings'=>'meeeting1',
             'opportunities'=>'opp1',
             'preffered_notification_method'=>'one',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
         Contact::create([
             'name' => 'second account',

             'phone number'=>'12345',
             'address'=> 'kisumu',
             'company'=>'company2',
             'title'=>'title2',
             'notes'=>'note2',
             'meetings'=>'meeeting2',
             'opportunities'=>'opp2',
             'preffered_notification_method'=>'two',

              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Contact::create([
             'name' => 'third account',

             'phone number'=>'12345',
             'address'=> 'Nakuru',
             'company'=>'company3',
             'title'=>'title3',
             'notes'=>'note3',
             'meetings'=>'meeeting3',
             'opportunities'=>'opp3',
             'preffered_notification_method'=>'two',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         Contact::create([
             'name' => 'forth account',

             'phone number'=>'12345',
             'address'=> 'Eldoret',
             'company'=>'company4',
             'title'=>'title4',
             'notes'=>'note4',
             'meetings'=>'meeeting4',
             'opportunities'=>'opp4',
             'preffered_notification_method'=>'four',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
        }
   	}
       }
