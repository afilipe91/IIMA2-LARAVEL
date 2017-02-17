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
                            <fieldset>
                                <div class="form-group">
                                    <label for="inputTitre" class="col-lg-2 control-label">Titre</label>
                                    <div class="col-lg-10">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="text" name="title" class="form-control" value="{{$article->title}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputContent" class="col-lg-2 control-label">Article</label>
                                    <div class="col-lg-10">
                                        <textarea name="content" class="form-control">{{$article->content}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-default">Modifié</button>
                                    </div>
                                </div>
                            </fieldset>
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
