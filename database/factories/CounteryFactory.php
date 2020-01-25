<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Countery;
use Faker\Generator as Faker;

$factory->define(Countery::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
