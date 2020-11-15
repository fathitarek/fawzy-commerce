<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\blogs;
use Faker\Generator as Faker;

$factory->define(blogs::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'description_en' => $faker->word,
        'description_ar' => $faker->word,
        'image' => $faker->word,
        'date' => $faker->word,
        'tags' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
