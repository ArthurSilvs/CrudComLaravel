<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ModelLoja;
use Faker\Generator as Faker;

$factory->define(ModelLoja::class, function (Faker $faker) {
    return [ 
        'imagem' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
        'classe' => $faker->unique()->word,
        'nome' => $faker->unique()->word,
        'tamanho' => $faker->randomLetter,
        'preco' => $faker->numberBetween($min = 20, $max = 1000),
    ];
});
