<?php

use App\Models\Configure;
use App\Models\ImageConfigure;
use App\Models\MediaCoverage;
use App\Models\Member;
use App\Models\Page;
use App\Models\Setting;
use App\Models\SocialMedia;

function getConfigures()
{
    return Configure::first();
}

function getAllPages()
{
    return Page::latest()->get();
}

function getPage($slug)
{
    return Page::where('slug', $slug)->first();
}

function getSocialmedia()
{
    return SocialMedia::get();
}


function getMediaCoverages()
{
    return MediaCoverage::latest()->get();
}

function getImageConfigure($title)
{
    return ImageConfigure::where('title', $title)->first();
}

function getSettings()
{
    return Setting::pluck('value', 'key')->toArray();
}
