@extends('welcome')
@section('meta_tags')
<title> Sua pagina </title>


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
                            <p class="" style="text-align: center"><a href="/poster/delete/{{$peca->ID}}">Excluir</a>

                            </p>
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
