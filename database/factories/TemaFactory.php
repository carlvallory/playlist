<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tema;
use Faker\Generator as Faker;

$factory->define(Tema::class, function (Faker $faker) {

    return [
        'artist_id' => $faker->text,
        'album_id' => $faker->text,
        'name' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
