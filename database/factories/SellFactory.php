<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sell;
use Faker\Generator as Faker;

$factory->define(App\Sell::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'location' => $faker->locale,
        'name' => $faker->name,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'seller' => function () {
            return factory(App\User::class)->create()->name;
        },
        'contact' => function () {
            return factory(App\User::class)->create()->contact;
        },

    ];
});

