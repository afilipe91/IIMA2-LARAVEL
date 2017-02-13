@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact</div>

                    <div class="panel-body">
                        <form method="POST" action="{{route('contact.store')}}">
                            {{csrf_field()}}
                            <input type="text" name="name" placeholder="Nom">
                            <input type="text" name="mail" placeholder="E-mail">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message..."></textarea>
                            <input type="submit" value="Envoyer">

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
