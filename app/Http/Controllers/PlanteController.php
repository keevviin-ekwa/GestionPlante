<?php

namespace App\Http\Controllers;

use App\Models\Plante;
use Illuminate\Http\Request;

class PlanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantes=Plante::all();
        return  $plantes;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $plante= new Plante();
        $plante->nom=$request->nom;
        $plante->espece=$request->espece;
        $plante->image=$request->image;
        $plante->created_at= new \DateTime();
        $plante->save();
        return $plante;
    }

    /**
     * Affiche une plante
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plante=Plante::find($id);
        return $plante;
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

        $plante= Plante::find($id);
        $plante->nom=$request->nom;
        $plante->espece=$request->espece;
        $plante->image=$request->image;
        $plante->update();
        return "Modification reussie";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit=Plante::find($id);
        $produit->delete();
        return "Suppression reussie";
    }
}
