<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'preview' => $faker->sentences(5, true),
        'body' => $faker->sentences(15, true),
        'category_id' => factory(App\Category::class),
        'user_id' => factory(App\User::class),
        'created_at' => now(),
    ];
});
