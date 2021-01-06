<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\order_details;
use Faker\Generator as Faker;

$factory->define(order_details::class, function (Faker $faker) {

    return [
        'customer_id' => $faker->randomDigitNotNull,
        'order_id' => $faker->randomDigitNotNull,
        'product_id' => $faker->randomDigitNotNull,
        'price' => $faker->word,
        'quantity' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
