<?php

use Faker\Generator as Faker;

$factory->define(\App\Member::class, function (Faker $faker) {
    return [
        'enumber' => random_int(1, 999999),
        'password' => bcrypt('123456'),
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
    ];
});
