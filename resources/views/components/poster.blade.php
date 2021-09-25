@extends('welcome')
@section('content')

    {!! $posted ?? '' !!}
@if ($state == 'new')

<form class="col s12" action="/product/new" method="POST" enctype="multipart/form-data"> @csrf
    <div class="row">
        <div class="input-field col s6">
            <input id="nome" name="nome" type="text" class="validate" required>
            <label for="nome">Nome</label>
            <span class="helper-text" data-error="wrong" data-success="right">Nome da sua peça</span>
        </div>
        <div class="input-field col s6">
            <input id="categoria" name="categoria" type="text" class="validate" required>
            <label for="categoria">Categoria</label>
            <span class="helper-text" data-error="wrong" data-success="right">Ex: croche, macramê, bordado....</span>
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
                    <input id="file" class="file-path validate" name="image" accept="image/png, image/gif, image/jpeg, image/webp, image/jpg" type="text" required>
                    <label for="file">Imagem da sua peça, somente uma ou gif</label>

                </div>
            </div>
        </div>
        <div class="center-align">

        <button class="btn waves-effect waves-light" type="submit">postar
                <i class="material-icons right">add</i>
            </button>
        <a href="{{url('/')}}">Cancelar</a>
    </div>
    </div>

</form>
@else
    <h1>alteração</h1>
@endif
@stop
