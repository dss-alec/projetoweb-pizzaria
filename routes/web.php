<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MensagemController;
use Illuminate\Support\Facades\Route;

//ROTAS DO USUARIO
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('sobre-nos', function() {
    return view('sobre-nos');
})->name('sobre-nos');

Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos');

Route::get('servicos', function() {
    return view('servicos');
})->name('servicos');

Route::get('fale-conosco', function() {
    return view('fale-conosco');
})->name('fale-conosco');

Route::post('fale-conosco', [MensagemController::class, 'store'])->name('fale-conosco.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//rota gerada pelo breezer
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//grupo de rotas do admin e parao CRUD
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin.cadastro.produtos');
    })->name('dashboard');

    //rota para pagina de cadastro
    Route::get('/cadastro-produtos', [ProdutoController::class, 'paginaDeCadastro'])->name('cadastro.produtos');

    //rota para criar 
    Route::get('/produtos/criar', [ProdutoController::class, 'create'])->name('produtos.criar');

    //salvar no banco de dados
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

    //rota para editar
    Route::get('/produtos/{produto}/editar', [ProdutoController::class, 'edit'])->name('produtos.editar');

    //salvar no banco de dados
    Route::put('/produtos/{produto}/atualizar', [ProdutoController::class, 'update'])->name('produtos.atualizar');

    //rota para remover
    Route::delete('/produtos/{produto}/remover', [ProdutoController::class, 'destroy'])->name('produtos.remover');

    //rota para visualizar mensagens
    Route::get('/visualizar-mensagens', [MensagemController::class, 'visualizacaoMensagens'])->name('mensagens');

});



require __DIR__.'/auth.php';