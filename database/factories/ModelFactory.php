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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'api_token' => str_random(30),
    ];
});

// Documentation for $faker: https://github.com/fzaninotto/Faker
$factory->define(App\Cat::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
      //  'icon' => $faker->imageUrl(300, 300, 'cats'),
        'icon' => '1',
        'badgeid' => str_random(10),
        'allowedfood' => $faker->randomDigitNotNull,
    ];
});
