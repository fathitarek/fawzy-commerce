<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sucess_stories;
use Faker\Generator as Faker;

$factory->define(sucess_stories::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'description_en' => $faker->word,
        'description_ar' => $faker->word,
        'image' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
