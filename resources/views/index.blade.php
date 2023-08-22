@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h3 text-center py-4">Quiz - O que você sabe sobre One Piece</p>
</div>
<div class="row">
    <div class="col-md-6 col -sm 6 text-center imagem">
        <a href="#" class="img-thumbnail logo">
            <img class="img-fluid" src="{{assets('storage/images/logo.jpg')}}" />
        </a>
    </div>
    <div class="col -md 6 col -sm-6 text-center py-4">
        <p class="texto">
            <h4>Este quiz é para saber o quanto você sabe sobre o ONE PIECE <br>
                <strong>ONE PIECE!</strong> </h4>
        </p>
        <div class="card-footer py-4 text-center">
            <a href="/iniciar" class="btn bnt-primary" role="button">Começar</a>
        </div>
    </div>
</div>

@endsection