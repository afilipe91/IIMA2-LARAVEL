@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mon profil</div>
                        <div class="panel-body">
                            <h1><strong>Mes infos</strong></h1>
                            <hr>
                            @if(Auth::check())
                                <p>Nom/Prénom : {{Auth::user()->name}}</p>
                                <p>E-mail : {{Auth::user()->email}}</p>
                                <p>Inscrit depuis le : {{Auth::user()->created_at}}</p>
                                <h3><strong>Mes articles :</strong></h3>
                                <div class="list-group">

                                        @forelse(Auth::user()->articles as $article)
                                        <a href="{{route('article.show', ['id' => $article->id])}}" class="list-group-item">
                                            <h4 class="list-group-item-heading">{{$article->title}}</h4>
                                        </a>
                                        @empty
                                            <p>Vous n'avez rédiger aucun article.</p>
                                        @endforelse
                                </div>
                            @else
                                <p>Pas d'info sur vous</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
