@extends('welcome')
@section('meta_tags')
<title>{{ $title }}</title>
<meta name="generator" content="Visual Studio Code">
<meta name="HandheldFriendly" content="true">
<meta property="og:title" content="{{ $title ?? 'Artesanato Brasil' }}">
<meta property="og:url" content="{{ $title ?? 'Artesanato Brasil' }}">
<meta property="og:artesanatobrasil"
    content="{{$descricao}}">
<meta property="og:type" content="website">
<meta property="og:description" content="{{$descricao}}">
<meta property="og:image"
content="data:image/jpeg;base64,{{$favicon}}">
<meta property="og:locale" content="pt_BR">
<link rel="shortcut icon"
            href="data:image/jpeg;base64,{{$favicon}}"
            type="image/x-icon">
<title>{{$title}}</title>
<meta name="description"
    content="{{$descricao}}">
<meta name="keywords"
    content="artesanato brasil, brasil, arte em maranhao, love, artesanato, arte em pano, croche">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

<link rel="apple-touch-icon" sizes="57x57" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="60x60" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="72x72" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="76x76" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="114x114" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="120x120" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="144x144" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="152x152" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="apple-touch-icon" sizes="180x180" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="icon" type="image/png" sizes="192x192"  href="data:image/jpeg;base64,{{$favicon}}">
<link rel="icon" type="image/png" sizes="32x32" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="icon" type="image/png" sizes="96x96" href="data:image/jpeg;base64,{{$favicon}}">
<link rel="icon" type="image/png" sizes="16x16" href="data:image/jpeg;base64,{{$favicon}}">
<meta name="msapplication-TileImage" content="data:image/jpeg;base64,{{$favicon}}">


@stop
@section('content')

    @if($pecas)
        <div class="row">
            @foreach($pecas as $peca)
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img width="350" height="350" class="activator" src="data:image/jpeg;base64,{{$peca->foto}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{$peca->nome}}<i class="material-icons right">more_vert</i></span>
                            <p class="" style="text-align: center"><a href="https://api.whatsapp.com/send?phone=55{{$telefone}}&text=Olá%20{{$nome}}%20Eu%20gostaria%20de%20encomendar%20a%20peça%20{{$peca->nome}}">whatsapp</a>  <a style="margin-left: 20px;" href="tel:+55{{$telefone}}">ligar</a></p>
                            <p></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{$peca->nome}}<i class="material-icons right">close</i></span>
                            <p>{{ $peca->descricao }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    @else
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
        <h5 class="center-align card-panel teal white-text lighten-2">Não existe peças publicadas</h5>
        @endif

@stop
