@extends('layout.layout')
@section('header')
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/materialize/css/materialize.min.css">
        <meta charset="utf-8">
        <title>Artesa Brasil - Minha Area</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo center ">Artesã Brasil</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a><i class="material-icons">search</i></a></li>
                    <li><a  href="{{url('/product')}}">Postar Peça</a></li>
                    <li><a href="/area">Minhas Peças</a></li>
                    <li><a href="/account/edit">Minha Conta</a></li>
                    <li><a class="red lighten-3" href="account/logout"><i class="material-icons">person_pin</i></a></li>
                </ul>
        </div>
    </nav>

    @endsection
@section('content')


    <div class="row">

        <div class="col s12 m6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img width="350" height="350" class="activator" src="https://img.elo7.com.br/product/zoom/33B37BF/prateleira-de-canto-em-macrame-macrame.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Prateleira De Canto Em Macramê<i class="material-icons right">more_vert</i></span>
                    <p class="" style="text-align: center"><a href="https://api.whatsapp.com/send?phone=5598983135506&text=Ol%C3%A1%20senhor%20Jo%C3%A3o%20Vcitor%2C%20eu%20gostaria%20de%20saber%20sobre%20a%20Prateleira%20De%20Canto%20Em%20Macram%C3%AA">whatsapp</a>  <a style="margin-left: 20px;" href="tel:+5598983135506">ligar</a></p>
                    <p></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Prateleira De Canto Em Macramê<i class="material-icons right">close</i></span>
                    <p>Vocês aaamam essa prateleira! Nosso modelo de canto, mais singelo. Essa peça possui 2 níveis e as cordas são feitas em macramê.

                        *Informações:
                        Feita de madeira maciça, tratada e encerada
                        Macrame na cor verde musgo
                        Kit instalação incluso (ganchos, parafusos e buchas)

                        *Dimensões:
                        Tabuas com a lateral medindo cerca de 26cm
                        Profundidade medindo cerca de 20cm
                        Base do triângulo medindo cerca de 32cm
                        Altura da peça em torno de 60cm

                        Altura: 60.00 cm
                        Largura: 20.00 cm
                        Comprimento: 34.00 cm
                        Peso: 1200 g
                        Código do produto: 141C65F
                        Adicionado em: 13/10/2020</p>
                </div>
            </div>
        </div>

    </div>

@stop
