<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fale-conosco', function () {
    return view('fale-conosco');
}) ->name('fale-conosco');

Route::get('/sobre-nos', function () {
    return view('sobre-nos');
}) ->name('sobre-nos');

Route::get('/produtos', function () {
    return view('produtos');
}) ->name('produtos');

Route::get('/servicos', function () {
    return view('servicos');
}) ->name('servicos');
