<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class home extends Controller
{
    public function show(){

       $profile = DB::select('select * from profile');
       $logged = Cache::get('logged');

        return view('components.home', [
           'logged' => $logged,
           'posted'=>'<p class="teal white-text">Peça postada com sucesso!</p>'
       ])->with('profiles', $profile);

    }
}
