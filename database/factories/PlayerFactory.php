<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use App\Team;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name(),
        'last_name' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail,
        'team_id' => Team::inRandomOrder()->first()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
