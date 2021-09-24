@extends('layout.layout')
@section('content')

    {!! $posted ?? '' !!}

    <form class="col s12" action="/product/new" method="POST" enctype="multipart/form-data"> @csrf
        <div class="row">
            <div class="input-field col s6">
                <input id="nome" name="nome" type="text" class="validate" required>
                <label for="nome">Nome</label>
                <span class="helper-text" data-error="wrong" data-success="right">Nome</span>
            </div>
            <div class="input-field col s6">
                <input id="categoria" name="categoria" type="text" class="validate" required>
                <label for="categoria">Categoria</label>
                <span class="helper-text" data-error="wrong" data-success="right">Categorias</span>
            </div>
            <div class="input-field col s12">
                <textarea id="descricao" maxlength="600" name="descricao" class="materialize-textarea" data-length="120" required></textarea>
                <label for="descricao">Descreva sua peça artesanal em até 600 letras</label>
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
            <div class="center-align">

            <button class="btn waves-effect waves-light " type="submit">postar
                    <i class="material-icons right">add</i>
                </button>
            <a href="/">Cancelar</a>
        </div>
        </div>

    </form>

@stop
