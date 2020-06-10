<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

// use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        //
        'text'          => $faker->realText(rand(80, 600)),
        'course_title'  => $faker->sentence(10),
        'duration'      => $faker->sentence(5),
        'user_id'       => function () {
            return App\User::inRandomOrder()
                ->first()
                ->id;
        },
    ];
});
