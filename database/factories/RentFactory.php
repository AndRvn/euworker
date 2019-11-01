<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
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

$factory->define(\App\Models\Rent::class, function (Faker $faker) {
    $city = \App\Models\Location\City::all()->random();

    return [
        'title' => ['en' => $faker->name] ,
        'description' => ['en' => $faker->realText(900)],
        'address' => ['en' => $faker->address],
        'price' => $faker->randomFloat(3, 900, 3000),
        'published_at' => \Carbon\Carbon::now(),
        'validity' => \Carbon\Carbon::now()->addMonths(3),
        'user_id' => \App\User::all()->random(),
        'city_id' => $city->id,
        'country_id' => $city->country_id,
    ];
});
