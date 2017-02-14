@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload</div>
                    @include('messages.errors')
                    @include('messages.success')

                    <div class="panel-body">
                        <form method="POST" action="{{route('upload.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="file" name="image">
                            <hr>
                            <input class="btn btn-primary" type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
