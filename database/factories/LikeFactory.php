<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Like;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
