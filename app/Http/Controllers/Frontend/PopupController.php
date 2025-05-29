<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\PopUp;

class PopupController extends Controller
{
    public function popup()
    {
        // Fetch all popups from the database
        $popups = PopUp::all();

        // Pass the $popup variable to the view
        return view('frontend.home', compact('popups'));
    }
}