<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Admin\Permiso;


$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'slug' => $faker->word,
    ];
});
