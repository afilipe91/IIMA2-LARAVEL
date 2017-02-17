@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier le commentaire</div>

                    <div class="panel-body">
                        <form method="POST" action="{{route('comment.update', [$comments->id])}}">
                            {{csrf_field()}}
                            <fieldset>
                                <div class="form-group">
                                    <label for="inputContent" class="col-lg-2 control-label">Commentaire</label>
                                    <div class="col-lg-10">
                                        <input type="hidden" name="_method" value="PUT">
                                        <textarea name="body" class="form-control">{{$comments->body}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-default">Modifié</button>
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
