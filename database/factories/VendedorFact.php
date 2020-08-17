<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vendedor;
use Faker\Generator as Faker;

$factory->define(Vendedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->name,
        'email' => $faker->unique()->email,  
        'senha' => "password",
        'telefone' => $faker->numberBetween($min = 100000, $max = 99999),
    ];
});
