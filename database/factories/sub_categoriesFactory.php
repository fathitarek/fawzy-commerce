<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sub_categories;
use Faker\Generator as Faker;

$factory->define(sub_categories::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'category_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
