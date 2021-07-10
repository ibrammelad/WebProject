<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'email' => $this->faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'), // 123456
        'remember_token' => \Illuminate\Support\Str::random(10),
        'status' => $this->faker->numberBetween(0,1),
        'showMail' =>$this->faker->numberBetween(0,1),
        'showName' =>$this->faker->numberBetween(0,1),
        'showNearly' =>$this->faker->numberBetween(0,1),
    ];
});
