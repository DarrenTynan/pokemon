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
        $url = 'https://pokeapi.co/api/v2/pokemon/';
        $data = json_decode(file_get_contents($url), true);
        return view('pokemon')->withData($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $url = 'https://pokeapi.co/api/v2/pokemon/';
        $data = json_decode(file_get_contents($url), true);
        return view('pokemon2')->withData($data);
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

    public function details($id)
    {
        // Pokemon
        $url = 'https://pokeapi.co/api/v2/pokemon/' . $id;
        $data = json_decode(file_get_contents($url), true);

//        dd($data['species']['url']);

        // Species
        $url_1 = $data['species']['url'];
//        $url_1 = 'https://pokeapi.co/api/v2/pokemon/' . $id;
        $species = json_decode(file_get_contents($url_1), true);

//        ['data' => $data]
//        compact('data')
//        ['data' => $data, 'data_1' => $data_1]
//        compact('data', 'data_1')

//        dd('debug');
        return view('details', compact('data', 'species'));
    }


    /**
     * Display the details of the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details2($id)
    {
        // Pokemon
        $url = 'https://pokeapi.co/api/v2/pokemon/' . $id;
        $pokemon = json_decode(file_get_contents($url), true);

        // Species
        $url_1 = $pokemon['species']['url'];
        $species = json_decode(file_get_contents($url_1), true);

        return view('details2', compact('pokemon', 'species'));
    }

    public function compact()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            // Pokemon
            $url = 'https://pokeapi.co/api/v2/pokemon/' . $id;
            $pokemon = json_decode(file_get_contents($url), true);

            // Species
            $url_1 = $pokemon['species']['url'];
            $species = json_decode(file_get_contents($url_1), true);

            return view('details2', compact('pokemon', 'species'));
//            return 'Compact success: ' . $_GET['id'];
        }
        return 'Compact fail';
    }
}
