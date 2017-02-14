@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron">
                    <h1>Bienvenue</h1>
                    <p>Vous êtes administrateur !</p>
                    <a class="btn btn-primary" href="{{ url('/article') }}">Administrer les articles</a>
                    <a class="btn btn-default" href="#">Administrer les commentaires</a>
                </div>
            </div>
        </div>
    </div>
@endsection
