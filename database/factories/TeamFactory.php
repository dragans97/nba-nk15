<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address(),
        'city' => $faker->city(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
