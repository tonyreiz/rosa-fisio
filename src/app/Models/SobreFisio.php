<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SobreFisio extends Model{

    protected $table = 'tbl_sobre_fisio';
    protected $primarykey = 'id_sobre_fisio';
    public $timestamps = false;

    protected $fillabel = [
        'titulo_sobre_fisio',
        'texto_topico_sobre_fisio',
        'status_sobre_fisio'
    ];
}


