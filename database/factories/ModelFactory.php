<?php


use App\User;
use App\Model\Blog;
use Faker\Generator;
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

$factory->define(User::class, function (Generator $faker) {

       return [
           'name' => $faker->name,
           'email' => $faker->safeEmail,
           'username' =>$faker->firstName.'-'.$faker->numberBetween(20,100).'-'.$faker->asciify("******"),
           'password' => bcrypt(str_random(10)),
           'remember_token' => str_random(10),
       ];

});

$factory->define(Blog::class , function (Generator $faker) {

        return [
            'title' => $faker->text(20),
            'post' => $faker->realText(300),
            'user_id' => $faker->numberBetween(1, 20)
        ];

});