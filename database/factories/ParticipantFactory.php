<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Participant;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Participant::class, function (Faker $faker) {
    return [
        'code' => Str::random(6),
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber
    ];
});
