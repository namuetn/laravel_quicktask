<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Song;
use App\Models\Singer;
use Faker\Generator as Faker;


$factory->define(Song::class, function (Faker $faker) {
    DB::table('songs')->truncate();

    return [
        'name' => $faker->name,
        'category' => $faker->name,
        'singer_id' => function() {
            return factory(Singer::class)->create()->id;
        },
    ];
});
