@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                        <div class="panel-heading">Article n° {{$article->id}}</div>

                                            <div class="panel-body">
                                                <div class="addthis_inline_share_toolbox"></div>

                                                    @if(session('success'))
                                                            <div class="alert alert-success">
                                                                    {{session('success')}}
                                                            </div>
                                                    @endif

                                                    <h1>{{$article->title}}</h1>
                                                    <p>{{$article->content}}</p>
                                                    <p>
                                                            @if($article->user)
                                                                    Utilisateur: {{$article->user->name}}
                                                            @else
                                                                    Pas d'utilisateur
                                                            @endif
                                                    </p>
                                                <a class="btn btn-default" href="{{ route('article.index') }}">Retour</a>

                                                @if(Auth::check() && Auth::user()->email == 'admin@admin.fr')
                                                    <a class="bottom-left btn btn-danger"href="{{route('article.edit', ['id' => $article->id])}}">Modifié</a>
                                                @endif

                                                @if ($article->isLiked)
                                                    <div class="col-sm-8 alert alert-dismissible alert-info">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        <p>Ton avis a bien été pris en compte</p>
                                                    </div>
                                                @elseif(!$article->isLiked)
                                                    <a href="{{ route('post.like', $article->id) }}"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i></a>
                                                    - <a href="{{ route('post.like', $article->id) }}"><i class="fa fa-thumbs-o-down fa-2x" aria-hidden="true"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                        </div>
                </div>
            <div>
        </div>


@endsection
