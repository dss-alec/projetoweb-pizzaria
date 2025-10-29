<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Rotas
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

//Rota protegida do administrador
Route::get('/admin', function () {
    return "Bem-vindo à área administrativa";
})->middleware('admin');