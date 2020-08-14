<?php

/** @var Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'code' => substr($faker->unique()->swiftBicNumber, 0, 6),
        'description' => $faker->realText('200'),
        'price' => $faker->randomNumber(5),
        'url_image' => $faker->realText(30)
    ];
});
