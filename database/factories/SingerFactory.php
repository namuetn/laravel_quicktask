<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Singer;
use Faker\Generator as Faker;

$factory->define(Singer::class, function (Faker $faker) {
    DB::table('singers')->truncate();

    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
