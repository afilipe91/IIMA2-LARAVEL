@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact</div>

                    <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{route('contact.store')}}">
                                {{csrf_field()}}
                                <fieldset>
                                    <legend>Besoin d'informations ?</legend>
                                      <div class="form-group">
                                         <label for="inputNom" class="col-lg-2 control-label">Nom</label>
                                         <div class="col-lg-10">
                                            <input type="text" name="name" class="form-control" placeholder="Nom">
                                        </div>
                                     </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="mail" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textArea" class="col-lg-2 control-label">Message</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Votre message..."></textarea>
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
