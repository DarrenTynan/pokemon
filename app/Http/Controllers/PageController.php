<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get ALL pokemon's.
        $url = 'https://pokeapi.co/api/v2/pokemon/';
        $pokemons = json_decode(file_get_contents($url), true);
        return view('pokemonSPA', compact('pokemons'));
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


    /**
     * Return json data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetails()
    {
        // Is there a id set?
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];

            // All pokemon's
            $url = 'https://pokeapi.co/api/v2/pokemon/';
            $pokemons = json_decode(file_get_contents($url), true);

            // Single Pokemon
            $url = 'https://pokeapi.co/api/v2/pokemon/' . $id;
            $pokemon = json_decode(file_get_contents($url), true);

            // Single pokemon - Species
            $url = $pokemon['species']['url'];
            $species = json_decode(file_get_contents($url), true);

            return view('pokemonSPA', compact('pokemon', 'pokemons', 'species'));
        }

        return 'Get details fail';
    }

}
