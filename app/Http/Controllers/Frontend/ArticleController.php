<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::oldest('order')->paginate(12);
        return view('frontend.article.index', compact('articles'));
    }

    public function show($slug)
    {
        $articledetails = Article::where('slug', $slug)->first();
        $morearticles = Article::where('slug', '!=', $slug)->get();
        return view('frontend.article.show', compact('articledetails', 'morearticles'));
    }
}
