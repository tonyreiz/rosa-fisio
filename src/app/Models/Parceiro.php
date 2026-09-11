<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends model{

    protected $table = 'tbl_parceiro';
    protected $primaryKey = 'id__parceiro';
    public $timestamps = false;

    protected $fillable = [
        'foto_parceiro',
        'nome_parceiro',
        'funcao_parceiro',
        'icon_rede_social_parceiro',
        'link_rede_social_parceiro',
        'status_parceiro'
    ]; 
}