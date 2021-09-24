<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
class poster extends Controller
{
    public function area(){
        $logged = Cache::get('logged');
        return view('components.area', ['title' =>'Minhas Peças', 'logged'=>$logged]);
    }
    public function product(){
        $logged = Cache::get('logged');
        return view('components.poster', ['logged'=>$logged]);
    }

    public function create(){
        $nome = request()->input('nome');
        $categoria = request()->input('categoria');
        $descricao = request()->input('descricao');

        $upload = request()->file('image');
        $path = 'public/products';
        $image_name = $upload->getClientOriginalName();
        $p = request()->file('image')->storeAs($path, $image_name);
        echo $p;

        if ( !$upload ) return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();

        $id = Cache::get('id');

        DB::table('pecas')->insert(["author" => $id,
            "nome" => $nome,
            "categoria" => $categoria,
            "descricao" => $descricao,
            "foto" => $image_name, "star" => "1"]);
        dd($p);
            #return redirect("profile/$id");
    }
}
