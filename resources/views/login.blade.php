@extends('layout.layout')
@section('content')

    {!! $auth ?? '' !!}

            <form class="col s12" action="/account/login" method="POST"> @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Digite seu email</span>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">password</i>
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Senha</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Digite sua senha</span>
                    </div>
                    <div class="input-field center-align col s12 m4 12">
                        <button class="btn waves-effect waves-light" type="submit">Login
                            <i class="material-icons right">login</i>
                        </button>
                        <a href="/account/create">Cadastrar</a>
                    </div>
                </div>
            </form>
@stop
