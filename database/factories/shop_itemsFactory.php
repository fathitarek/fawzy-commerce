<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\shop_items;
use Faker\Generator as Faker;

$factory->define(shop_items::class, function (Faker $faker) {

    return [
        'name_en' => $faker->word,
        'name_ar' => $faker->word,
        'description_en' => $faker->word,
        'description_ar' => $faker->word,
        'main_price' => $faker->randomDigitNotNull,
        'sale_price' => $faker->randomDigitNotNull,
        'main_image' => $faker->word,
        'category_id' => $faker->randomDigitNotNull,
        'sub_category_id' => $faker->randomDigitNotNull,
        'tags' => $faker->word,
        'publish' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
