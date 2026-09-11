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

use App\Http\Controllers\Site\AdminController;

use App\Http\Controllers\Site\BannerController;

use App\Http\Controllers\Site\ClienteController;

use App\Http\Controllers\Site\FaqController;

use App\Http\Controllers\Site\AvaliacaoController;

use App\Http\Controllers\Site\AdminservicoController;

use App\Http\Controllers\Site\AdminsobreFisioController;

use App\Http\Controllers\Site\AdminsobreController;

use App\Http\Controllers\Site\UsuarioController;

use App\Http\Controllers\Site\DescricaoController;

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

//ÁREA ADMINISTRATIVA


Route::prefix('admin')->group(function(){
    Route::get('/dash', [AdminController::class, 'dash'])->name('dash');

    //============= CRUD BANNER =============

    // ADIÇÃO DE DADOS DO DASH NA TABELA BANNER
    Route::get('/banners', [BannerController::class, 'index'])->name('admin.banner.index');
    
    //STORE = CADASTRAR O NOVO BANNER NO BANCO DE DADOS
    Route::post('/banners', [BannerController::class, 'store'])->name('admin.banner.store');

    //EDITAR AS INFORMAÇÕES DO BANNER
    Route::get('/banners/{id}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit');

    //ATUALIZAR AS INFORMAÇÕES DO BANNER
    Route::put('/banners/{id}', [BannerController::class, 'update'])->name('admin.banner.update');

    //STATUS DO BANNER
    Route::get('/banners/{id}/status', [BannerController::class, 'status'])->name('admin.banner.status');

});




Route::get('/clientes', [ClienteController::class, 'cliente'])->name('admin.cliente.index');

Route::get('/faqs', [FaqController::class, 'faq'])->name('admin.faq.index');

Route::get('/avaliacoes', [AvaliacaoController::class, 'avaliacao'])->name('admin.avaliacao.index');

Route::get('/servicos', [AdminservicoController::class, 'servicos'])->name('admin.servico.index');

Route::get('/sobrefisio', [AdminsobreFisioController::class, 'sobre'])->name('admin.sobreFisio.index');

Route::get('/sobres', [AdminsobreController::class, 'sobre'])->name('admin.sobre.index');

Route::get('/usuarios', [UsuarioController::class, 'usuario'])->name('admin.usuario.index');

Route::get('/descricoes', [DescricaoController::class, 'descricao'])->name('admin.descricao.index');