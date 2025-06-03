<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Models\EventRegister;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Show the registration form
    public function register()
    {
        $eventregister = EventRegister::orderBy('date', 'asc')->first();
        return view("frontend.register.index", compact('eventregister'));
    }

    // Store the registration form submission
    public function registerStore(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'number' => 'nullable|string|max:20',
        'desigination' => 'nullable|string|max:255',
        'organization' => 'nullable|string|max:255',
        'province' => 'nullable|string|max:100',
        'participation' => 'nullable|string|max:255',
        'dietary_restriction' => 'nullable|string|max:255',
        'accommodation' => 'nullable|string|max:10',
        'membership' => 'nullable|string|max:10',
        'member_num' => 'nullable|string|max:255',
        'lifeMember_num' => 'nullable|string|max:255',
        'generalMember_num' => 'nullable|string|max:255',
        'remarks' => 'nullable|string',
        'hear' => 'nullable|string|max:255',
        'image' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $filename = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/vouchers'), $filename);
        $validated['image'] = 'uploads/vouchers/' . $filename;
    }

    Register::create($validated);

    if ($request->ajax()) {
        return response()->json(['message' => 'Registration successful.']);
    }

    return redirect()->back()->with('message', 'Your registration has been submitted successfully.');
}

}
