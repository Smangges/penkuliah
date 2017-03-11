<?php

$factory->define(App\Models\School\Rank::class, function (Faker\Generator $faker) {
    return [
        'semester' => $faker->randomElement([1, 2, 3, 4, 5, 6]),
        'position' => random_int(1, 200)
    ];
});

$factory->define(App\Models\School\Score::class, function (Faker\Generator $faker) {
    return [
        'semester' => $faker->randomElement([1, 2, 3, 4, 5, 6]),
        'value' => random_int(75, 100)
    ];
});

$factory->define(App\Models\School\Student::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->numberBetween(131400000, 131499999),
        'name' => $faker->name(),
        'generation' => $faker->randomElement([2010, 2011, 2012, 2013])
    ];
});

$factory->define(App\Models\School\Subject::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->jobTitle()
    ];
});
