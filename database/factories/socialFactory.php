<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\social;
use Faker\Generator as Faker;

$factory->define(social::class, function (Faker $faker) {

    return [
        'facebook' => $faker->word,
        'instgram' => $faker->word,
        'linkedin' => $faker->word,
        'twitter' => $faker->word,
        'youtube' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
