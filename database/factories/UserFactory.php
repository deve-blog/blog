<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $date = date("Y-m-d H:i:s");
    sleep(1);
    return [
        'username' => $faker->userName,
        'email' => $faker->email,
        'created_at' => $date,
        'updated_at' => $date
    ];
});
