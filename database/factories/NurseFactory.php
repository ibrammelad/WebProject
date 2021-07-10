<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nurse;
use Faker\Generator as Faker;

$factory->define(Nurse::class, function (Faker $faker) {
    return [
        'salary' => $this->faker->numberBetween(1500 , 5000) ,
        'services' => $this->faker->word ,
        'qualifications' => $this->faker->word(),
        'from' => '9 pm',
        'to' => '12 Am',
        'status' => $this->faker->numberBetween(0,1),
        'user_id' => function(){
            return  \App\User::all()->random();} ,
    ];
});
