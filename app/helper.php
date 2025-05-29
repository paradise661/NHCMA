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
if (!function_exists('removeFile')) {
    function removeFile($file)
    {
        if (File::exists(public_path($file))) {
            File::delete(public_path($file));
        }
    }
}
if (!function_exists('fileUpload')) {
    function fileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

            $image = '/storage/' . $foldername . '/' . $image_new_name;

            return $image;
        }
    }
}

if (!function_exists('galleryfileUpload')) {
    function galleryfileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalName();
            $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

            $image = '/storage/' . $foldername . '/' . $image_new_name;

            return $image;
        }
    }
}