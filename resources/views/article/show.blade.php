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
                                                <a class="btn btn-default" href="{{ URL::previous() }}">Retour</a>

                                                @if(Auth::check() && Auth::user()->email == 'admin@admin.fr')
                                                    <a class="btn btn-danger"href="{{route('article.edit', ['id' => $article->id])}}">Modifié</a>
                                                @endif
                                            </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection
