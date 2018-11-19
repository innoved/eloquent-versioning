<?php

use Faker\Generator as Faker;
use Innoved\Versioning\Tests\Models\Post;

/*
|--------------------------------------------------------------------------
| Post Factories
|--------------------------------------------------------------------------
|
*/
$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'         => $faker->title,
        'content'          => $faker->text,
    ];
});