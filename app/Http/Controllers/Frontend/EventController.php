<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'asc')->paginate(8);
        return view('frontend.events.index', compact('events'));
    }

    public function show($slug)
    {
        $eventdetails = Event::where('slug', $slug)->first();
        $moreevents = Event::where('slug', '!=', $slug)->get();
        return view('frontend.events.show', compact('eventdetails', 'moreevents'));
    }
}
