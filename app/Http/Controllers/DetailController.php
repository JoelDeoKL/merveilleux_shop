<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Taille;
use App\Couleur;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        $tailles = Taille::all();
        $couleurs = Couleur::all();
        return view('adm.articleDetail', compact('tailles', 'couleurs', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Articles::all();
        return view('adm.couleurAdd', compact('articles'));
    }

    public function create2()
    {
        $articles = Articles::all();
        return view('adm.tailleAdd', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articles = Articles::all();
        $detail = Couleur::create($this->validateur());
        return view('adm.couleurAdd', compact('articles'));
    }

    public function store2(Request $request)
    {
        $articles = Articles::all();
        $detail = Taille::create($this->validator());
        return view('adm.tailleAdd', compact('articles'));
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function validateur()
    {
        return request()->validate([
            'couleur' => 'required|min:3',
            'etat' => 'required|integer',
            'articles_id' => 'required|integer'
        ]);
    }

    private function validator()
    {
        return request()->validate([
            'taille' => 'required',
            'etat' => 'required|integer',
            'articles_id' => 'required|integer'
        ]);
    }
}
