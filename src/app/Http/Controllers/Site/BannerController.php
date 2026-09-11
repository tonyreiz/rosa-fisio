<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller{

    public function index(){
        $listaBanner = Banner::orderByDesc('id_banner')
        ->get();
    return view('admin.banner.index', compact('listaBanner'));
    }

    public function store(Request $request){
        
    // 1- VALIDAR OS DADOS
        $request->validate([
            'titulo_banner' => 'required|max:50',
            'subtitulo_banner' => 'required|max:30',
            'imagem_banner' => 'required|assets',
            'status_banner' => 'required'
        ]);

    // 2- RECEBER A IMAGEM ENVIADA PELO FORM
        $imagem = $request->file('img_banner');

    // 3- CRIAR UM NOME PARA A IMAGEM
        $titulo = $request->titulo_banner;
        $nomeImg = time() . '_' .$imagem->getClientOriginalName();

    // 4- SALVAR A IMAGEM NA PASTA PUBLIC
        $imagem->move(public_path('rosa/image/banner'), $nomeImg);

    // 5- CADASTRAT NO BANCO
        Banner::create([
            'titulo_banner  ' => $request->titulo_banner,           
            'subtitulo_banner  ' => $request->subtitulo_banner,            
            'imagem_banner  ' => 'banner/' . $nomeImg,            
            'status_banner  ' => $request->status_banner,            
        ]);

    // 6- VOLTAR E ENVIAR A MENSAGEM DE SUCESSO
        return redirect()->route('admin.banner.index')->with('successo', 'Banner cadastrado com sucesso!');    
    }
}