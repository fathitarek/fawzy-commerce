<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\slider;
use Faker\Generator as Faker;

$factory->define(slider::class, function (Faker $faker) {

    return [
        'title_en' => $faker->word,
        'title_ar' => $faker->word,
        'description_en' => $faker->word,
        'description_ar' => $faker->word,
        'image' => $faker->word,
        'slide_order' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
