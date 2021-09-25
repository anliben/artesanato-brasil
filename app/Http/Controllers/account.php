<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class account extends Controller
{
    public function login(){
        return view('components.login');
    }
    public function create(){
        $logged = Cache::get('logged');
        return view('components.create', ['logged' => $logged]);
    }
    public function store(){

        $nome = request()->input('nome');
        $sobrenome = request()->input('sobrenome');
        $email = request()->input('email');
        $password = request()->input('password');
        $telefone = request()->input('telefone');
        $descricao = request()->input('descricao');

        $upload = request()->file('image');
        $file = fopen($upload, "rb");
        $contents = fread($file, filesize($upload));
        $base = base64_encode($contents);
        fclose($file);

        $user = DB::table('profile')->where('email', $email)->first();

        if($user) return redirect()->back()->with('error', 'Usuário já cadastrado')->withInput();

        if ( !$upload ) return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();


        DB::table('profile')->insert(["nome" => $nome .' ' .$sobrenome,
  "email" => $email,
  "password" => $password,
  "telefone" => $telefone,
  "descricao" => $descricao,
            "image" => $base,
            "star" => 1]);
        return view('components.home');
    }
    public function logout(){
        Cache::forget('user');
        Cache::forget('logged');
        Cache::forget('id');
        return redirect('/');
    }
    public function auth(){
        $email = request()->input('email');
        $password = request()->input('password');
        $user = DB::table('profile')->where('email', $email)->first();
        $password = DB::table('profile')->where('password', $password)->first();

        if($user and $password){
            Cache::put('user', $user);
            Cache::put('id', $user->ID);
            Cache::put('logged', true);
            return redirect('/');
        }else{
            return view('components.login', ['auth'=>'<p class="red-text white">Usuário ou Senha inválido</p>']);
        }
    }
}
