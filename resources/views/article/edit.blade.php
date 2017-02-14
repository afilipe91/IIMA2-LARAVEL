@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier ou supprimer l'article</div>

                    <div class="panel-body">
                        <form method="POST" action="{{route('article.update', [$article->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input required type="text" value="{{$article->title}}" name="title">
                            <textarea name="content" id="" cols="30" rows="10">
                                {{$article->content}}
                            </textarea>
                            <input class="btn btn-default" type="submit" value="Modifier">
                        </form>
                        <hr>
                        <form method="POST" action="{{route('article.destroy', [$article->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <input class="btn btn-primary" type="submit" value="Supprimer l'article">
                        </form>

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
