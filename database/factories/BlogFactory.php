<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

/*$factory->define(Blog::class, function (Faker $faker) {
    $date = date('Y-m-d H:i:s');
    return [
        'user_id' => $faker->numberBetween(1, 100),
        'title' => $faker->text(50),
        'content' => $faker->text(2000),
        'created_at' => $date,
        'updated_at' => $date
    ];
});*/


/*$factory->define(Blog::class, function (Faker $faker) {
    $date = date('Y-m-d H:i:s');
    $content = $faker->text(2000) . "<img src='{$faker->imageUrl()}' alt='img' />";
    return [
        'user_id' => $faker->numberBetween(1, 100),
        'title' => $faker->text(50),
        'content' => $content,
        'created_at' => $date,
        'updated_at' => $date
    ];
});*/

$factory->define(Blog::class, function (Faker $faker) {
    $date = date('Y-m-d H:i:s');
    $content = $faker->text(2000) . "<img src='{$faker->imageUrl()}' alt='img' />" . $faker->text(100);
    return [
        'user_id' => $faker->numberBetween(1, 100),
        'title' => $faker->text(50),
        'content' => $content,
        'created_at' => $date,
        'updated_at' => $date
    ];
});
