<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;
use App\Couleur;
use App\Taille;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xindex()
    {
        $articles = Articles::all();
        return view('adm.articles', compact('articles'));
    }
    public function index()
    {
        $categories = Categories::all();
        return view('adm.categorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('adm.articleAdd', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Categories::all();
        $articles = Articles::create($this->validateur());
        $this->storeImage($articles);
        return view('adm.articleAdd', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        $id = $articles->id;
        $couleurs = Couleur::where('id', '=', $id);
        $tailles = Taille::where('id', '=', $id);
        return view('adm.articleDetail', compact('couleurs', 'tailles', 'articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        $articles = update($this->validateur());
        $this->storeImage($articles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        //
    }

    private function validateur()
    {
        return request()->validate([
            'designation' => 'required|min:3',
            'description_article' => 'required|min:3',
            'code' => 'required|min:3',
            'etat' => 'required|integer',
            'quantite' => 'required|integer',
            'prix_achat' => 'required|integer',
            'prix_unitaire' => 'required|integer',
            'reduction' => 'required|integer',
            'image' => 'sometimes|image|max:5000',
            'categories_id' => 'required|integer'
        ]);
    }

    protected function storeImage($articles)
    {
        if(request('image')){
            $articles->update([
                'image' => request('image')->store('images', 'public'),
            ]);
        }
    }
}
