<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Resource;

class ResourceController extends Controller
{
    public function usefulLinks()
    {
        $links = Resource::where('type', 'Link')->where('status', 1)->oldest('order')->get();
        return view('frontend.resource.links', compact('links'));
    }

    public function usefulDocuments()
    {
        $documents = Resource::where('type', 'Document')->where('status', 1)->oldest('order')->get();
        return view('frontend.resource.documents', compact('documents'));
    }
}
