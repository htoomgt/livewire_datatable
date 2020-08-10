<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FakePerson;
use Faker\Generator as Faker;

$factory->define(FakePerson::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'gender' => $gender,
        'dob' => $faker->date($format = 'Y-m-d', $max = '2010-01-01')
    ];
});
