<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas adicionais (exemplo)
Route::get('/solucoes', function () {
    return view('solucoes');
})->name('solucoes');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');
