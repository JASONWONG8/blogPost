<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => '1',
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'body' => $faker->text,
        'created_at' => $faker->dateTimeBetween('now', '+01 days'),
        'updated_at' => $faker->dateTimeBetween('now', '+01 days'), 
    ];
});
