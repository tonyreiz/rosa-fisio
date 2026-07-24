<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class ServicoController extends Controller{

    public function servico(){
        return view('site.servico.servico_pg');
    }
}