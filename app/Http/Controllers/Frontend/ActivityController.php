<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = News::latest()->paginate(12);
        return view('frontend.activity.index', compact('activities'));
    }

    public function show($slug)
    {
        $activitydetails = News::where('slug', $slug)->first();
        $moreactivities = News::where('slug', '!=', $slug)->get();
        return view('frontend.activity.show', compact('activitydetails', 'moreactivities'));
    }
}
