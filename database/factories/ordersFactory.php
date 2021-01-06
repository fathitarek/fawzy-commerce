<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\orders;
use Faker\Generator as Faker;

$factory->define(orders::class, function (Faker $faker) {

    return [
        'full_name' => $faker->word,
        'address' => $faker->word,
        'city' => $faker->word,
        'zip' => $faker->word,
        'email' => $faker->word,
        'order_note' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
