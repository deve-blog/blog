<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $date = date('Y-m-d H:i:s');
    return [
        'blog_id' => $faker->numberBetween(1, 3000),
        'name' => $faker->name,
        'email' => $faker->email,
        'content' => $faker->text,
        'created_at' => $date,
        'updated_at' => $date
    ];
});
