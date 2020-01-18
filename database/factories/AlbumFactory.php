<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {

    return [
        'artista_id' => $faker->text,
        'name' => $faker->text,
        'images' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
