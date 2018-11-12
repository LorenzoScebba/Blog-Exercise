<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    $userMax = User::orderBy("id","desc")->first()->id;
    $postMax = Post::orderBy("id","desc")->first()->id;
    return [
        //
        "user_id" => $faker->numberBetween(1,$userMax),
        "post_id" => $faker->numberBetween(1,$postMax),
        "content" => $faker->text(100),
        "is_revisioned" => $faker->boolean,
    ];
});
