<?php 

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\SobreFisio;

class AdminsobreFisioController extends Controller{

    public function sobre(){
        $listaSobre = SobreFisio::orderBydesc('id_sobre_fisio')
        ->get();
    return view('admin.sobreFisio.index', compact('listaSobre'));
    }
}