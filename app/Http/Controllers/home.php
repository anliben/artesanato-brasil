<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Psr\Http\Client\NetworkExceptionInterface;
use Illuminate\Database\QueryException;

class home extends Controller
{
    public function show(){

        try {
            $profile = DB::select('select * from profile');
            $logged = Cache::get('logged');
            $descricao = 'Amigurinhos chegou o meio de você aumentar sua renda vendendo sua arte ou artesanato para pessoas de todo o Brasil';
             return view('components.home', [
                 'title' => 'Artesanato Brasil',
                 'descricao' =>$descricao,
                'logged' => $logged,
                'posted' =>'<p class="teal white-text">Peça postada com sucesso!</p>'
            ])->with('profiles', $profile);
        } catch (\Throwable $th) {
            return redirect('/offline');
        }
    }
    public function offline(){
        return view('components.offline');
    }
}
