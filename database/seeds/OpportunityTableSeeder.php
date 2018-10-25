<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Opportunity;

class OpportunityTableSeeder extends Seeder
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
         DB::table('opportunities')->delete();

         Opportunity::create([
            'contact' => 'contact 1',
            'sales_executive' => 'sales 1',
            'status' => 'status 1',
            'description' =>'description 1',
            'value'=>'value 1',
            'meetings' => 'meetings 1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
         Opportunity::create([
            'contact' => 'contact 2',
            'sales_executive' => 'sales 2',
            'status' => 'status 2',
            'description' =>'description 2',
            'value'=>'value 2',
            'meetings' => 'meetings 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
         Opportunity::create([
            'contact' => 'contact 3',
            'sales_executive' => 'sales 3',
            'status' => 'status 3',
            'description' =>'description 3',
            'value'=>'value 3',
            'meetings' => 'meetings 3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);

         Opportunity::create([
            'contact' => 'contact 4',
            'sales_executive' => 'sales 4',
            'status' => 'status 4',
            'description' =>'description 4',
            'value'=>'value 4',
            'meetings' => 'meetings 4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]);
        }
   	}
       }
