<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\projects_form;
use Faker\Generator as Faker;

$factory->define(projects_form::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'mobile' => $faker->randomDigitNotNull,
        'address' => $faker->word,
        'note' => $faker->word,
        'project_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
