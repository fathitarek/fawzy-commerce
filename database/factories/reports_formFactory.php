<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\reports_form;
use Faker\Generator as Faker;

$factory->define(reports_form::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'mobile' => $faker->word,
        'address' => $faker->word,
        'note' => $faker->word,
        'report_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
