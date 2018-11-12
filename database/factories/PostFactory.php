<?php

use App\User;
use App\Category;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $userMax = User::orderBy("id","desc")->first()->id;
    $categoryMax = Category::orderBy("id","desc")->first()->id;
    return [
        //
        "user_id" => $faker->numberBetween(1,$userMax),
        "category_id" => $faker->numberBetween(1,$categoryMax),
        "content" => $faker->text(400),
        "created_at" => $faker->dateTime,
    ];
});
