<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model{

    protected $table = 'tbl_servico_resumo';
    protected $primaryKey = 'id__servico_resumo';

    public $timestamps = false;

    protected $fillable = [
        'imagem_servico_resumo',
        'titulo_servico_resumo',
        'descricao_curta_servico_resumo',
        'status_servico_resumo'
    ];
}