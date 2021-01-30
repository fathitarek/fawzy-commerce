<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\custom_order;
use Faker\Generator as Faker;

$factory->define(custom_order::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'description_en' => $faker->text,
        'description_ar' => $faker->text,
        'image' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
