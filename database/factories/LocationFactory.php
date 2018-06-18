<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
        'street' => $faker->streetAddress(),
        'city' => $faker->city(),
        'state' => $faker->state(),
        'zipcode' => $faker->postcode(),
        'insee' => $faker->postcode(),
        'country' => $faker->country(),
        'latitude' => $faker->latitude($min = 45, $max = 47),
        'longitude' => $faker->longitude($min = 0.5, $max = 2),

    ];
});
