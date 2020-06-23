<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use App\Models\Category;
use App\Models\Skill;
use App\Models\ActualResult;
use App\Models\Development;
use App\Models\User;
use Faker\Generator as Faker;


$factory->define(Profile::class, function (Faker $faker) {
    return [
        'content' => $faker->realText(200),
        'picture' => $faker->text,
        'git_account' => $faker->userName,
        'git_url' => $faker->url,
        'twitter_account' => $faker->userName,
        'twitter_url' => $faker->url,
        'qiita_account' => $faker->userName,
        'qiita_url' => $faker->url
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'categorie' => $faker->jobTitle,
        'sort' => random_int(1, 6),
        'comment' => $faker->realText(30)
    ];
});

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'categorie_id' => random_int(1, 6),
        'technology' => $faker->jobTitle,
        'years' => random_int(1, 9)
    ];
});

$factory->define(ActualResult::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(30),
        'content' => $faker->realText(200),
        'job' => $faker->realText(200),
        'environment' => $faker->realText(200),
        'job_from' => $faker->dateTime,
        'job_to' => $faker->dateTime
    ];
});

$factory->define(Development::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(30),
        'reason' => $faker->realText(150),
        'content' => $faker->realText(200),
        'development' => $faker->realText(150),
        'git_url' => $faker->url,
        'demo' => $faker->realText(100),
        'comment' => $faker->realText(100)
    ];
});

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
