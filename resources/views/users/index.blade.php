@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            <h1><strong>Mes infos</strong></h1>
                            @if(Auth::check())
                                <h2>{{Auth::user()->name}}</h2>
                                <h3>{{Auth::user()->email}}</h3>
                                <p>Inscrit depuis le : {{Auth::user()->created_at}}</p>
                                <strong>Mes articles :</strong>
                                <ul>
                                    @foreach(Auth::user()->articles as $article)
                                        <li>{{$article->title}}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Je n'ai pas d'info sur toi</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
