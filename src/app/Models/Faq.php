<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model{

    protected $table = 'tbl_faq';
    protected $primaryKey = 'id_faq';
    public $timestamps = false;

    protected $fillabel = [
        'titulo_faq',
        'resposta_faq',
        'status_faq'
    ];

}