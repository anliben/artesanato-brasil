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

            $profile = DB::select('select * from profile order by star desc');
            $logged = Cache::get('logged');
            Cache::set('image_user', $profile);
             return view('components.home', [
                'logged' => $logged,
                'posted' =>'<p class="teal white-text">Peça postada com sucesso!</p>'
                ])->with('profiles', $profile);
    }
    public function offline(){
        return view('components.offline');
    }
}
