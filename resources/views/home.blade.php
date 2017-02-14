@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <h1>Welcome</h1>
                <p>Vous êtes connecté !</p>
                <p>Merci d'être membre chez nous {{Auth::user()->name}}</p>
                <a class="btn btn-primary" href="{{ url('/article') }}">Voir les articles</a>
                <a class="btn btn-default" href="{{ url('/user') }}">Voir votre profil</a>
            </div>
        </div>
    </div>
</div>
@endsection
