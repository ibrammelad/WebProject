<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
             'text' => $this->faker->paragraph,
             'user_id' => \App\User::all()->random(),
             'post_id' => \App\Post::all()->random(),
    ];
});
