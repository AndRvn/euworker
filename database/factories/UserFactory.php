<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'avatar' => $faker->imageUrl(),
        'phone' => $faker->phoneNumber,
        'type' => $faker->randomElement(User::TYPES),
        'is_company' => $faker->boolean(),
        'company_name' => ['en' => $faker->name],
        'view_count' => $faker->randomDigit,
        'password' => 'secret',
        'remember_token' => Str::random(10),
    ];
});
