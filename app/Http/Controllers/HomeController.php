<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();

        return view('home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $home = Home::create([

            'typology' => $request->typology,
            'size' => $request->size,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->file('image')->store('public/photoHome'),
        ]);

        return redirect(route('home.index'))->with('HomeCreated', 'Hai creato con successo l\'annuncio della casa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
