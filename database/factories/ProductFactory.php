<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


// \App\Product::create([
//     'title' => 'Product 1',
//     'slug'  => 'product-1',
//     'description' => 'Testdescription',
// ]);

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title'       => $faker->numerify("Product ###"),
        'slug'        => "",
        'description' => $faker->paragraphs(4, true),
        'price'       => $faker->randomFloat(2,10,999),
        'barcode'     => $faker->ean8,
        'stock'       => $faker->numberBetween(0, 999),
        'cover'       => 'https://loremflickr.com/640/480/computer'
    ];
});
