<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EventRegister;
use Illuminate\Http\Request;

class EventRegisterController extends Controller
{
    public function index()
{
    // For example, get the latest event:
    $eventregister = EventRegister::orderBy('date', 'asc')->first();

    return view('frontend.eventsregister.index', compact('eventregister'));
}


    
}
