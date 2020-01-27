<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Document;
use App\Model\City;
use App\Model\Lawyer;
use Faker\Generator as Faker;

$factory->define(Lawyer::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber(),
        'password' => $faker->password,
        'office_name' => $faker->word,
        'gender' => $faker->numberBetween(0,1),
        'profile_image' => $faker->imageUrl(640,  480,  true),
        'background_imge' => $faker->imageUrl( 640,  480,  true),
        // 'profile_image' => $faker->image(public_path('img'),400,300, 'people', true),
        // 'background_imge' => $faker->image(public_path('img'),400,300, 'people', true),
        'address_text' => $faker->word,
        'latitude' => $faker->numberBetween(100,1000),
        'longitude' => $faker->numberBetween(100,1000),
        'document_id' => function(){
        	return Document::all()->random();
        },
        'city_id' => function(){
        	return City::all()->random();
        }
    ];
});
