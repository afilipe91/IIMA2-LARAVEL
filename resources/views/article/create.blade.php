@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Créer un article</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('article.store')}}">
                            {{csrf_field()}}
                            <fieldset>
                                <legend>Besoin d'informations ?</legend>
                                <div class="form-group">
                                    <label for="inputTitre" class="col-lg-2 control-label">Titre</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="title" class="form-control" placeholder="Titre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">Article</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="content" rows="3" placeholder="Votre article..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
