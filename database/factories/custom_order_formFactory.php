<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\custom_order_form;
use Faker\Generator as Faker;

$factory->define(custom_order_form::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'address' => $faker->word,
        'message' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
