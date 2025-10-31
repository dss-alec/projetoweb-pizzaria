<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('sobre-nos', function() {
    return view('sobre-nos');
})->name('sobre-nos');

Route::get('produtos', function() {
    return view('produtos');
})->name('produtos');

Route::get('servicos', function() {
    return view('servicos');
})->name('servicos');

Route::get('fale-conosco', function() {
    return view('fale-conosco');
})->name('fale-conosco');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('mensagens', function() {
    return view('mensagens');
})->name('mensagens');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//grupo de rotas do admin
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin.cadastro.produtos');
    })->name('dashboard');

    Route::get('/cadastro-produtos', [ProdutoController::class, 'paginaDeCadastro'])->name('cadastro.produtos');
});

require __DIR__.'/auth.php';