<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\Document;
use App\Model\DocumentType;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'document_path' => $faker->word,
        'document_type_id' => function(){
        	return DocumentType::all()->random();
        }
    ];
});
