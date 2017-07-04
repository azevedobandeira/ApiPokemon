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

$factory->define(\SON\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(SON\Models\Pokemons::class, function (Faker\Generator $faker) {

    return [
        'name'        => $faker->name,
        'tipo'        => $faker->safeColorName,
        'poderatack'  => rand(10,1500),
        'poderdefesa' => rand(10,2500),
        'agilidade'   => rand(50,500),

    ];
});
