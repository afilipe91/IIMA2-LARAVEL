 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Espace commentaire</div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{route('comment.store', ['article_id' => $article->id])}}">
                                {{csrf_field()}}
                                <fieldset>
                                    <legend>Un commentaire ?</legend>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea class="form-control" name="body" rows="3" placeholder="Votre commentaire..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10">
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
