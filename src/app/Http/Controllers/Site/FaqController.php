<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller{

    public function faq(){
        $listaFaq = Faq::orderByDesc('id_faq')
        ->get();
    return view('admin.faq.index', compact('listaFaq'));
    }
}