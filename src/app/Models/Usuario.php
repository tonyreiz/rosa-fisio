<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{

    protected $table = 'tbl_usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'foto_usuario',
    ];
}