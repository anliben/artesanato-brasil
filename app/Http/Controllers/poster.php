<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

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
        $file = fopen($upload, "rb");
        $contents = fread($file, filesize($upload));
        $base = base64_encode($contents);
        fclose($file);

        if ( !$upload ) return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();

        $id = Cache::get('id');

        DB::table('pecas')->insert(["author" => $id,
            "nome" => $nome,
            "categoria" => $categoria,
            "descricao" => $descricao,
            "foto" => $base, "star" => "1"]);
            return redirect("profile/$id");
    }
}
