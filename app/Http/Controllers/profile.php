<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class profile extends Controller
{
    public function profile($id){

        $pecas = DB::select('select * from pecas where author = :id', ['id'=> $id]);
        $user = DB::table('profile')->where('id', $id)->first();
        $logged = Cache::get('logged');


        return view('components.single', [
            'favicon' => $user->image,
            'title'=> $user->nome ." - Artesanato Brasil",
            'descricao'=>$user->descricao,
            'telefone'=>$user->telefone,
            'nome'=>$user->nome,
            'logged'=>$logged
            ])->with('pecas', $pecas);
    }
}
