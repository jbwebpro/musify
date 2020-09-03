<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'lyrics' => $faker->text(300),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
