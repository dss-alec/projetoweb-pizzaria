<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MensagemController;
use Illuminate\Support\Facades\Route;

//rotas do usuario, apenas com view
Route::view('/', 'welcome')->name('welcome');
Route::view('sobre-nos', 'sobre-nos')->name('sobre-nos');
Route::view('servicos', 'servicos')->name('servicos');
Route::view('fale-conosco', 'fale-conosco')->name('fale-conosco');

// Rotas com lógica de controller
Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::post('fale-conosco', [MensagemController::class, 'store'])->name('fale-conosco.store');

//usuario admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas de Perfil (Geradas pelo Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', function () {
        return redirect()->route('admin.cadastro.produtos');
    })->name('dashboard');

    Route::get('/cadastro-produtos', [ProdutoController::class, 'paginaDeCadastro'])->name('cadastro.produtos');
    Route::get('/visualizar-mensagens', [MensagemController::class, 'visualizacaoMensagens'])->name('mensagens');

    //subtituicao das rotas do CRUD por uma unica
    Route::resource('produtos', ProdutoController::class)->except(['index', 'show']);

});

require __DIR__.'/auth.php';
