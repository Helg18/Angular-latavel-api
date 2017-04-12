<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Libros::class, function (Faker\Generator $faker) {


    return [
		'name'        => $faker->catchPhrase,
		'author'      => $faker->name,
		'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'price'       => $faker->numberBetween($min = 10, $max = 900),
    ];
});