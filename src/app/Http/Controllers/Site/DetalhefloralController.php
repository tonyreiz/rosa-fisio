<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class DetalhefloralController extends Controller{
    public function detalheFloral(){
        return view('site.detalhefloral.detalhefloral');
    }
}