<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function home() {
        return view('home');
    }
    function index() {
        $articles=Article::paginate('4');
        return view('article',[
            'articles'=>$articles]);
    }
    function show(Article $article) {
        return view('article_show',[
            'article'=>$article]);
    }
}
