@extends('layout.layout')
@section('content')

    {{ $error ?? '' }}

    <div class="row">
        <form style="margin-top: 3%;" action="/account/create/new" enctype="multipart/form-data" method="POST" class="col s12"> @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input id="nome" name="nome" type="text" class="validate" required>
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="sobrenome" name="sobrenome" type="text" class="validate" required>
                    <label for="sobrenome">Sobrenome</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="email" type="email" name="email" class="validate" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" name="password" min="4" type="password" class="validate" required>
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input maxlength="15" minlength="15" id="telefone" name="telefone" type="tel" class="validate"  required>
                    <label for="telefone">Telefone Ex.: (98) 91234-1234</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="descricao" maxlength="600" name="descricao" class="materialize-textarea" data-length="120" required></textarea>
                    <label for="descricao">Descreva você e o seu talento, com até 600 letras</label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image" accept="image/png, image/gif, image/jpeg, image/webp, image/jpg" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="image" accept="image/png, image/gif, image/jpeg, image/webp, image/jpg" type="text" required>
                    </div>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit">Criar Conta
                <i class="material-icons right">send</i>
            </button>
            <a href="/account/login">Login</a>

        </form>
    </div>
    <script>
        /* Máscaras ER */
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('telefone').onkeyup = function(){
                mascara( this, mtel );
            }
        }
    </script>
@stop
