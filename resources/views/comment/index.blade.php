@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tous les commentaires</div>

                    <div class="panel-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        @forelse($comments as $comment)
                                <div class="col-md-2">
                                    <form method="POST" action="{{route('comment.destroy', [$comment->id])}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input class="btn btn-primary" type="submit" value="Supprimer le commentaire">
                                    </form>
                                    <a class="bottom-left btn btn-danger" href="{{route('comment.edit', ['id' => $comment->id])}}">Modifié</a>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <h1>{{ $comment->body }}</h1>
                                    <p>Auteur : {{ $comment->user->name }}</p>
                                </div>
                            @empty
                            Rien du tout
                        @endforelse
                    </div>
                    <div class="text-center">
                        {{$comments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
