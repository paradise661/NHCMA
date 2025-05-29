<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MemberInfo;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $memberinfos = MemberInfo::get();
        return view('frontend.member.list', compact('memberinfos'));
    }

    public function lifetimeMembers()
    {
        return view('frontend.member.lifetime-member');
    }

    public function generalMembers()
    {
        return view('frontend.member.general-member');
    }
}
