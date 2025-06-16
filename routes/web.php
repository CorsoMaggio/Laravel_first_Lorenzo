<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chisono', function () {

    $services = [
        [
            'id' => 1,
            'title' => 'Gioco a Tekken',
            'description' => 'Utilizzo Claudio',
        ],
        [
            'id' => 2,
            'title' => 'Gioco a pokemon pocket',
            'description' => 'Gestisco il team esport italiano',
        ],
        [
            'id' => 3,
            'title' => 'Tik Tok',
            'description' => 'Vendo carte Pokemon',
        ]
    ];

    return view('about', ['services' => $services]);
});

Route::get('/anni', function () {
    return view('age');
});


Route::get('/somma/{num1}/{num2}', function ($num1, $num2) { //URI identico
    return $num1 - $num2;
});
