<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\donation_form;
use Faker\Generator as Faker;

$factory->define(donation_form::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'message' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
