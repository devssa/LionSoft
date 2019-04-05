<?php

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Felipe Martins',
        'email' => 'felipe@lionsoft.com.br',
        'email_verified_at' => now(),
        'cpf' => '123.456.789-78',
        'perfil' => 'Administrador',
        'status' => 1,
        'password' => bcrypt('123456'), // password
        'remember_token' => Str::random(10),
    ];
});