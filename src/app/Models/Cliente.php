<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    protected $table = 'tbl_cliente';
    protected $primarykey = 'id_cliente';
    public $timestamps = false;

    protected $fillabel = [
        'nome_cliente',
        'email_cliente',
        'idade_cliente',
        'telefone_cliente',
        'foto_cliente',
        'status_cliente'
    ];

    public function ClienteAvaliacao(){
        return $this->hasMany(Avaliacao::class, 'id_cliente', 'id_cliente');
    }
}