<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\partners;
use Faker\Generator as Faker;

$factory->define(partners::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'image' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
