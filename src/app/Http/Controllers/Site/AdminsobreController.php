<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Sobre;

class AdminsobreController extends Controller{

    public function sobre(){
        $listaSobre =  Sobre::orderByDesc('id_sobre')
        ->get();
    return view('admin.sobre.index', compact('listaSobre'));
    }
}