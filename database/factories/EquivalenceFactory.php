<?php 

use Faker\Generator as Faker;

$factory->define(App\Equivalence::class, function (Faker $faker) {
    return [
        'project_id' => $faker->numberBetween(1, 20),
        'amount' => $faker->numberBetween(5,150),
        'description' => $faker->text()

    ];
});
