<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use App\User;

use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->words(5, true),
        'content' => $faker->sentences(20, true),
        'user_id' => User::inRandomOrder()->first()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
