<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('created');
    }    

    public function index(){

        return view('articoli');
    }

    public function store(ArticleRequest $request){

        // $article = new Article();

        // $article->article = $request->article;
        // $article->category = $request->category;
        // $article->price = $request->price;

        // $article->save();

        $article = Article::create([

            'article' => $request->article,
            'category' => $request->category,
            'price' => $request->price,
            'image'=>$request->file('image')->store('public/images'),

        ]);

        return redirect(route('homePage'))->with('articleCreated', 'Hai inserito correttamente il tuo articolo! Vai nella sezione lista articoli inseriti per visualizzarlo!');

    }

    public function created(){

        $articles = Article::all();

        return view('articoli-creati', compact('articles'));
    }    

}
