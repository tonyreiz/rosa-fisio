<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model{

    protected $table = 'tbl_avaliacao';
    protected $primaryKey = 'id_avaliacao';

    public $timstamps = false;

    protected $fillable = [
        'id_cliente',
        'estrela_avaliacao',
        'descricao_avaliacao',
        'status_avaliacao'
    ];

   public function AvaliacaoCliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }

}