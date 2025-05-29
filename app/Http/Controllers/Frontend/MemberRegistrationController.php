<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationRequest;
use App\Models\Province;
use App\Models\Registration;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;


class MemberRegistrationController extends Controller
{
    public function registration()
    {
        $provinces = Province::get();
        return view('frontend.registration', compact('provinces'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'membership_type' => 'required',
            'applicant_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'citizenship_no' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'mobile' => 'required',

            'per_province' => 'required',
            'per_district' => 'required',
            'per_municipality' => 'required',
            'per_ward' => 'required',
            'per_tole' => 'required',

            'academic_qualification' => 'required',
            'year_of_completion' => 'required',
            'institute' => 'required',
            'university' => 'required',
            'occupation' => 'required',
            'experience' => 'required',

            'recommendor_name' => 'required',
            'recommendor_membership_no' => 'required',

            'photo' => 'required|max:1024',
            'citizenship' => 'required|max:1024',
            'transcript' => 'required|max:1024',
            'provisional_certificate' => 'max:1024',
            'payment_receipt' => 'required|max:1024',

            'terms' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        if ($validator->passes()) {
            $input = $request->except('terms');
            $input['photo'] = $this->fileUpload($request, 'photo');
            $input['citizenship'] = $this->fileUpload($request, 'citizenship');
            $input['transcript'] = $this->fileUpload($request, 'transcript');
            $input['provisional_certificate'] = $this->fileUpload($request, 'provisional_certificate');
            $input['payment_receipt'] = $this->fileUpload($request, 'payment_receipt');

            Registration::create($input);
            return response()->json(['success' => 'Registration Successful. Thank you for registering']);
        }
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/applicant';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/applicant/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
