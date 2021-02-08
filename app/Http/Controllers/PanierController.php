<?php

namespace App\Http\Controllers;

use App\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paniers = Panier::orderByDesc('created_at')->get();;
        return view('vente.cart', compact('paniers'));
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
        $paniers = Panier::create($this->validateur());
        return view('vente.cart', compact('paniers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function edit(Panier $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panier $panier)
    {
        $paniers = Panier::create($this->validateur());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panier $panier)
    {
        //
    }

    private function validateur()
    {
        return request()->validate([
            'designation' => 'required|min:3',
            'description_article' => 'required|min:3',
            'quantite' => 'required|integer',
            'prix_unitaire' => 'required|integer',
            'taille' => 'required|min:1',
            'couleur' => 'required|min:3',
            'etat' => 'required|integer',
            'users_id' => 'required|integer'
        ]);
    }
}
