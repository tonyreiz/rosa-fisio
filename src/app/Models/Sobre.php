<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model{

    protected $table = 'tbl_sobre';
    protected $primaryKey = 'id_sobre';
    public $timestamps = false;

    protected $fillabel = [
        'titulo_sobre',
        'descricao_sobre',
        'icon_topico_sobre',
        'titulo__topico_sobre',
    ];
}