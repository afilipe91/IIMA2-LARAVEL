@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron">
                    <h1>ACCES INTERDIT</h1>
                    <p>Vous n'êtes pas administrateur</p>
                    <a class="btn btn-primary" href="{{ url('/home') }}">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
@endsection
