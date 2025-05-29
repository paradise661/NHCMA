<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInquiryRequest;
use App\Models\Blog;
use App\Models\District;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Inquiry;
use App\Models\MediaCoverage;
use App\Models\MemberInfo;
use App\Models\Municipality;
use App\Models\OurTeam;
use App\Models\Slider;
use App\Models\PopUp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::oldest('order')->get();
        $upcoming_events = Event::where('date', '>', date('Y-m-d'))->orderBy('date', 'Asc')->get();
        $media_coverages = MediaCoverage::orderBy('date', 'Asc')->take(7)->get();
        $blogs = Blog::latest()->take(3)->get();
        $memberinfos = MemberInfo::oldest('order')->get();
        $executive_member = MemberInfo::where('type', 'executive')->first();
        $popups = PopUp::all();
        return view('frontend.home', compact('sliders', 'upcoming_events', 'media_coverages', 'blogs', 'memberinfos', 'executive_member','popups'));
    }

    public function contact()
    {
        $faqs = Faq::latest()->get();
        return view('frontend.contact', compact('faqs'));
    }

    public function ourTeams()
    {
        $ourteams = OurTeam::oldest('order')->get();
        return view('frontend.ourteams', compact('ourteams'));
    }

    public function inquiry(StoreInquiryRequest $request)
    {
        Inquiry::create($request->all());
        return redirect()->back()->with('message', 'Thank you, your enquiry has been submitted successfully');
    }

    public function about()
    {
        $memberinfos = MemberInfo::get();
        $ourteams = OurTeam::oldest('order')->get();
        return view('frontend.about', compact('memberinfos', 'ourteams'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('frontend.gallery', compact('galleries'));
    }

    public function mediaCoverages()
    {
        $mediacoverages = MediaCoverage::orderBy('date', 'Asc')->get();
        return view('frontend.mediacoverage', compact('mediacoverages'));
    }

    public function fetchDistrict(Request $request)
    {
        $districts = District::select('name', 'id')->where("province_id", $request->province_id)->get();
        return response()->json($districts);
    }

    public function fetchMunicipality(Request $request)
    {
        $municipalities = Municipality::select('name', 'id')->where("district_id", $request->district_id)->get();
        return response()->json($municipalities);
    }
}
