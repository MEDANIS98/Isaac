<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, fn (Faker $faker) => [
    'cover_pic' => 'slides/'.$faker->image(
        $dir = storage_path().'/app/public/slides',
        $width = 1200,
        $height = 363,
        $category = 'cats',
        $fullPath = false,
        $randomize = true,
    ),
    'title' => $faker->realText(50),
]);
