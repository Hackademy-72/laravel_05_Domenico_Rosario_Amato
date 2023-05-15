<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $articles = Article::all();

        return view('home.create', compact('articles'));
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
            'user_id'=> Auth::user()->id,
        ]);

        if($request->image){

            $home->update([
                'image' => $request->file('image')->store('public/photoHome'),
            ]);
        }

        $home->articles()->attach($request->articles);

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
        $articles = Article::all();

        return view('home.edit', compact('home', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $home->update([

            'typology' => $request->typology,
            'size' => $request->size,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        
        if($request->image){

            $home->update([
                'image' => $request->file('image')->store('public/photoHome'),
            ]);
        }

        $home->articles()->attach($request->articles);

        return redirect(route('home.index'))->with('HomeUpdated', 'Hai correttamente aggiornato l\'annuncio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();

        return redirect(route('home.index'))->with('HomeDeleted', 'Hai cancellato correttamente l\'annuncio');
        
    }
}
