<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pilot;
use Faker\Generator as Faker;

$factory->define(Pilot::class, function (Faker $faker) {
    return [
        
        'firstname' => $faker -> firstName,
        'lasname' => $faker -> lastName,
        'nationality' => $faker -> country,
        'date_of_birth' => $faker -> date
    ];
});
