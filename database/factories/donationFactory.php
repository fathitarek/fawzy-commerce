<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\donation;
use Faker\Generator as Faker;

$factory->define(donation::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'image' => $faker->text,
        'description_en' => $faker->text,
        'description_ar' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
