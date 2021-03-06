<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker){
    $title = $faker->realText(20);
    $slug = str_slug($title, '-');

    return[
        'title' =>$title,
        'subtitle' =>$faker->realText(20),
        'slug' =>$slug,
        'image' => $faker->imageUrl(1200,600, 'animals'),
        'content' => $faker->paragraphs(10, true),
        'premium' => rand(0, 1),
        'ssw' => rand(0, 40)
    ];
});
