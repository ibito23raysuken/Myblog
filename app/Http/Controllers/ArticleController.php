<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Utilities\ArticleManager;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    private $articleManager="1";

    public function __construct(ArticleManager $articleManager){
         $this->articleManager = $articleManager;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::paginate('8');
        return view('article.index',[
            'articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $article=new Article();
        $validate=$request->validated();
        $this->articleManager->build($article,$request);
        return redirect()->route('articles.admin')->with('success',"l'article est save");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edite',[
            'article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $validate=$request->validated();
        $this->articleManager->build($article,$request);
        return redirect()->route('articles.admin')->with('success',"l'article modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.admin')->with('success',"l'article deletet");

    }
}
