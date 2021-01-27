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
        $paniers = Panier::orderByDesc('created_at')->limit(5)->get();;
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
        //
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
        //
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
}
