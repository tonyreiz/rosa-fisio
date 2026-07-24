<?php

use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Site\SobreController;

use App\Http\Controllers\Site\ServicoController;

use App\Http\Controllers\Site\DetalhefisioController;

use App\Http\Controllers\Site\DetalhearomaController;

use App\Http\Controllers\Site\DetalheacunputuraController;

use App\Http\Controllers\Site\DetalheyogaController;

use App\Http\Controllers\Site\DetalhealternativaController;

use App\Http\Controllers\Site\DetalhefloralController;

use App\Http\Controllers\Site\ContatoController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('sobre', [SobreController::class, 'sobre'])->name('sobre');

Route::get('servico', [ServicoController::class, 'servico'])->name('servico');

Route::get('detalheFisio', [DetalhefisioController::class, 'detalheFisio'])->name('detalheFisio');

Route::get('detalheAroma', [DetalhearomaController::class, 'detalheAroma'])->name('detalheAroma');

Route::get('detalheAcunputura', [DetalheacunputuraController::class, 'detalheAcunputura'])->name('detalheAcunputura');

Route::get('detalheYoga', [DetalheyogaController::class, 'detalheYoga'])->name('detalheYoga');

Route::get('detalheAlternativa', [DetalhealternativaController::class, 'detalheAlternativa'])->name('detalheAlternativa');

Route::get('detalheFloral', [ DetalhefloralController::class, 'detalheFloral'])->name('detalheFloral');

Route::get('contato', [ContatoController::class, 'contato'])->name('contato');