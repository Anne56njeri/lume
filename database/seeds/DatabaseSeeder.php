<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('UsersTableSeeder');
          $this->call('AccountTableSeeder');
          $this->call('ContactTableSeeder');
          $this->call('MessagesTableSeeder');
          $this->call('MeetingsTableSeeder');
          $this->call('OpportunityTableSeeder');
    }
}
