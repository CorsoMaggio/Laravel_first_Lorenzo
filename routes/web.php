<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chisono', function () {

    $services = ['Cani', 'gatti', 'serpenti', 'draghi', 'unicorni'];

    return view('about', ['services' => $services]);
});

Route::get('/anni', function () {
    return view('age');
});


Route::get('/somma/{num1}/{num2}', function ($num1, $num2) { //URI identico
    return $num1 - $num2;
});
