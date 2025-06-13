<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('welcome');
});
Route::get('/chiVaLa', function () {


    return 'Mi chiamo gama';
});

Route::get('/age', function () {
    return ('ho 30 anni purtroppo');
});

Route::get('/myFavoriteSong', function () {
    return ('A cruel angels thesis');
});
