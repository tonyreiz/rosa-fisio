<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class DetalhealternativaController extends Controller{
    public function detalheAlternativa(){
        return view('site.detalhealternativa.detalhealternativa');
    }
}