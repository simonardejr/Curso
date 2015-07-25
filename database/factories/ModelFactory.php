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

$factory->define(Curso\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Curso\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->sentence,
        'obs' => $faker->sentence,
    ];
});

$factory->define(Curso\Entities\Project::class, function (Faker\Generator $faker) {
    return [
        'owner_id' => 1,
        'client_id' => rand(1,10),
        'name' => $faker->name,
        'description' => $faker->sentence,
        'progress' => rand(1,100),
        'status' => $faker->sentence,
        'due_date' => $faker->date,
    ];
});