<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\competitions;
use Faker\Generator as Faker;

$factory->define(competitions::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'image' => $faker->word,
        'video_url' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
