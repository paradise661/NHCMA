<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(12);
        return view('frontend.news.index', compact('news'));
    }

    public function show($slug)
    {
        $newsdetails = News::where('slug', $slug)->first();
        $morenews = News::where('slug', '!=', $slug)->get();
        return view('frontend.news.show', compact('newsdetails', 'morenews'));
    }
}
