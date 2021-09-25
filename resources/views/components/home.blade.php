@extends('welcome')
@section('meta_tags')

<title>Home - Artesanato Brasil</title>
<meta name="generator" content="Visual Studio Code">
<meta name="HandheldFriendly" content="true">
<meta property="og:title" content="Artesanato Brasil">
<meta property="og:url" content="https://artesanato-brasil.herokuapp.com">
<meta property="og:artesanatobrasil"
    content="Amigurinhos chegou o meio de você aumentar sua renda vendendo sua arte ou artesanato para pessoas de todo o Brasil">
<meta property="og:type" content="website">
<meta property="og:description" content="Amigurinhos chegou o meio de você aumentar sua renda vendendo sua arte ou artesanato para pessoas de todo o Brasil">
<meta property="og:image"
content="favicon.ico">
<meta property="og:locale" content="pt_BR">
<link rel="shortcut icon"
            href="favicon.ico"
            type="image/x-icon">
<meta name="description"
    content="Amigurinhos chegou o meio de você aumentar sua renda vendendo sua arte ou artesanato para pessoas de todo o Brasil">
<meta name="keywords"
    content="artesanato brasil, brasil, arte em maranhao, love, artesanato, arte em pano, croche">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M1BG239SQC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M1BG239SQC');
</script>
@stop
@section('content')

    {!! $logout ?? '' !!}

    <div class="row">
        @foreach($profiles as $profile)
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img width="350" height="350" alt="{{$profile->descricao}}" title="{{$profile->nome}}" src="data:image/jpeg;base64,{{$profile->image}}">
                        <span class="card-title darken-1 blue-text">{{$profile->nome}}</span>
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
