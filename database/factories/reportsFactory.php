<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\reports;
use Faker\Generator as Faker;

$factory->define(reports::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'description_en' => $faker->text,
        'description_ar' => $faker->text,
        'image' => $faker->text,
        'file' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
