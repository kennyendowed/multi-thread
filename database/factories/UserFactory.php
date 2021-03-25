<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'username' => $faker->username,
        'email'=>'kennygendowed@gmail.com',
        'mobile_number' => $faker->unique()->e164PhoneNumber,
        'password' => $password ?: $password = bcrypt('password'),
        'amount_to_bill'=>$faker->randomFloat(),
        'remember_token' => str_random(10),
    ];
});
