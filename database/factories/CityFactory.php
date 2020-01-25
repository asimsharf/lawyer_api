<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\City;
use App\Model\Countery;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'countery_id' => function(){
        	return Countery::all()->random();
        }
    ];
});
