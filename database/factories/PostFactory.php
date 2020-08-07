<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,2),
        'category_id' => rand(4,8),
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'preview_text' => $faker->sentence($nbWords = 9, $variableNbWords = true),
        'image' => rand(1,5),
        'body' => $faker->paragraph($nbSentences = 12, $variableNbSentences = true),
        //'saw' => 0,
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
