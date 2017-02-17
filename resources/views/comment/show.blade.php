<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Commentaire sur cette article</div>
                <div class="panel-body">
                    @forelse($comments as $comment)
                        <p><strong>Auteur :</strong> {{$comment->user->name}}</p>
                        <p>{{$comment->body}}</p>
                    @empty
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Attention</h3>
                            </div>
                            <div class="panel-body">
                                Aucun commentaire concernant cette article
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
