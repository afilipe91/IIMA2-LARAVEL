<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
            'mail' => 'required'
        ],
            [
                'name.required' => 'Merci de renseigner votre nom',
                'mail.required' => 'Merci de renseigner votre adresse e-mail',
                'message.required' => 'Message obligatoire'
            ]);

        Contact::create([
            'name' => $request->name,
            'mail' => $request->mail,
            'message' => $request->message,
        ]);

        return redirect()->route('article.index')->with('success', 'Votre demande a bien été envoyée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
