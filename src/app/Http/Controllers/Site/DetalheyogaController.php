<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class DetalheyogaController extends Controller{
    public function detalheYoga(){
        return view('site.detalheyoga.detalheyoga');
    }
}