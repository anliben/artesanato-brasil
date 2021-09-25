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
content="">
<meta property="og:locale" content="pt_BR">
<link rel="shortcut icon"
            href=""
            type="image/x-icon">
<title>{{$title}}</title>
<meta name="description"
    content="{{$descricao}}">
<meta name="keywords"
    content="artesanato brasil, brasil, arte em maranhao, love, artesanato, arte em pano, croche">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="manifest" href="icons/manifest.json">
<meta name="msapplication-TileColor" content="#EE6E73">
<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
<meta name="theme-color" content="##EE6E73">
@stop
@section('content')

    {!! $logout ?? '' !!}

    <div class="row">
        @foreach($profiles as $profile)
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img width="350" height="350" alt="{{$profile->descricao}}" title="{{$profile->nome}}" src="data:image/jpeg;base64,{{$profile->image}}">
                        <span class="card-title darken-1">{{$profile->nome}}</span>
                        <a href="/profile/{{$profile->ID}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>
                            {{$profile->descricao}}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@stop
