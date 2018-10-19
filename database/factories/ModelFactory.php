<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
Factory allows you to  create test data
*/

public function run()
{
    factory(App\User::class, 10)->create()->each(function ($u) {
        $u->posts()->save(factory(App\Post::class)->make());
    });
}
