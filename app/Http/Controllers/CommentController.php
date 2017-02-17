<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(4);

        return view('comment.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $this->validate($request, [
            'body' => 'required',
        ],
            [
                'body.required' => 'Commentaire obligatoire'
            ]);

        $article = Article::find($id);
        $user = Auth::user()->id;

        Comment::create([
            'user_id' => $user,
            'article_id' =>$article->id,
            'body' => $request->body,
        ]);

        return redirect()->route('article.show',[$article->id])->with('success', 'Commentaire crée');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comments = Comment::find($id);

        if(!$comments) {
            return redirect()->route('comment.index');
        }

        return view('comment.edit', compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'body' => 'required',
        ],
            [
                'body.required' => 'Merci de renseigner le champ'
            ]);

        $comments = Comment::find($id);

        $comments->body = $request->body;
        $comments->save();

        return redirect()->route('comment.index', [$comments->id])->with('success', 'Commentaire modifié');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments = Comment::find($id);

        $comments->delete();

        return redirect()->route('comment.index')->with('success', 'Commentaire supprimé');
    }
}
