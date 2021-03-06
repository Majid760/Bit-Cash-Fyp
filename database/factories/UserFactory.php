<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'address' => $faker->address,
        'image_link' => $faker->address,
        'about' => $faker->text,
        'city' => $faker->city,
        'country' => $faker->country,
        'email' => $faker->unique()->safeEmail,
        'status' => '1',
        'is_checked' => 0,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
