<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;
use App\Tailles;
use App\Couleurs;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        $arrivages = Articles::orderByDesc('created_at')->limit(3)->get();
        $recents = Articles::orderByDesc('created_at')->get();
        $hommes = Articles::where('categories_id', '=', 1)->get();
        $femmes = Articles::where('categories_id', '=', 2)->get();
        $enfants = Articles::where('categories_id', '=', 3)->get();
        $mixte_enfants = Articles::where('categories_id', '=', 4)->get();
        $mixte_adultes = Articles::where('categories_id', '=', 5)->get();
        $accessoires = Articles::where('categories_id', '=', 6)->get();
        $reduction = Articles::where('reduction', '>', 0)->get();
        $categories = Categories::all();
        //$tailles = Tailles::all();
        //$couleurs = Couleurs::all();
        return view('welcome', compact('hommes', 'femmes', 'enfants', 'accessoires', 'articles', 'mixte_adultes', 'mixte_enfants', 'arrivages', 'recents', 'tailles', 'couleurs'));
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
        //
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
}
