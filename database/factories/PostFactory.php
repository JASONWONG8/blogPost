<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->text,
        'user_id' => '1',
        'total_comments' => '0', 
        'created_at' => $faker->dateTimeBetween('now', '+01 days'),
        'updated_at' => $faker->dateTimeBetween('now', '+01 days'), 
    ];
});
