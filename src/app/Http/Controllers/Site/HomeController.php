<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Banner;
class HomeController extends Controller{

    public function home(){
        
        $listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder->get();

        return view('site.home.home');
    }
}