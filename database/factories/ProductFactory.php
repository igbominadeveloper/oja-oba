<?php

use Faker\Generator as Faker;
use App\User;
use App\Category;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word(5,10)
    ];
});

 $factory->define(App\Product::class, function (Faker $faker) {
     return [
         'price' => $faker->numberBetween(300,2000),
         'name' => $faker->word(5,10),
         'description' => $faker->sentence(10,15),
         'user_id' => User::all()->random()->id,
         'stock_unit' => $faker->numberBetween(60,200),
         'category_id' => Category::all()->random()->id
     ];
 });
