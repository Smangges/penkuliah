<?php

$factory->define(App\Models\College\Admission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company()
    ];
});

$factory->define(App\Models\College\College::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->streetName(),
        'public' => $faker->randomElement([true, false])
    ];
});

$factory->define(App\Models\College\Colleger::class, function (Faker\Generator $faker) {
    return [
        'generation' => $faker->randomElement([2013, 2014, 2015, 2016])
    ];
});

$factory->define(App\Models\College\Program::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->jobTitle()
    ];
});
