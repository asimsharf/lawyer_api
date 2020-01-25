<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\DocumentType;
use Faker\Generator as Faker;

$factory->define(DocumentType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
