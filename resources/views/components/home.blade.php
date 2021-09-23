@extends('layout.layout')

@section('content')

    {!! $logout ?? '' !!}

    <div class="row">
        @foreach($profiles as $profile)
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img width="350" height="350" src="{{$profile->image}}">
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
