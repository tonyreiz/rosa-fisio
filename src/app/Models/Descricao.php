<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descricao extends Model{

    protected $table ='tbl_descricao_servico';
    protected $primaryKey ='id_descricao_servico';
    public $timestamps = false;

    protected $fillable = [
        'titulo_descricao_servico',
        'descricao_longa_descricao_servico',
        'icon_topico_descricao_servico',
        'descricao_topico_descricao_servico',
        'status_descricao_servico',
    ];
}