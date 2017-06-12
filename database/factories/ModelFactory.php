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
$factory->define(SON\Models\Question::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name
    ];
});
$factory->define(SON\Models\Language::class, function (Faker\Generator $faker) {

    return [
        'choes' => $faker->name,
        'votes' => rand(110,5000),
        'question_id' => rand(1,2)
    ];
});