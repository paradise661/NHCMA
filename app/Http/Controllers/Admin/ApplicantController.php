<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Registration;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;


class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Registration::latest()->paginate(10);
        return view('admin.applicant.index', compact('applicants'));
    }

    public function show(Registration $applicant)
    {
        return view('admin.applicant.show', compact('applicant'));
    }

    public function edit(Registration $applicant)
    {
        $perprovince = Province::where('name', $applicant->per_province)->first();
        $perdistrict = District::where('name', $applicant->per_district)->first();
        $permunicipality = Municipality::where('name', $applicant->per_municipality)->first();
        $provinces = Province::get();
        $perdistricts = $perprovince ? District::where('province_id', $perprovince->id)->get() : '';
        $permunicipalities = $perdistrict ? Municipality::where('district_id', $perdistrict->id)->get() : '';

        $temprovince = Province::where('name', $applicant->tem_province)->first();
        $temdistrict = District::where('name', $applicant->tem_district)->first();
        $temmunicipality = Municipality::where('name', $applicant->tem_municipality)->first();
        $temdistricts = $temprovince ? District::where('province_id', $temprovince->id)->get() : '';
        $temmunicipalities = $temdistricts ? Municipality::where('district_id', $temdistrict->id)->get() : '';
        return view('admin.applicant.edit', compact('applicant', 'provinces', 'perdistricts', 'permunicipalities', 'temdistricts', 'temmunicipalities'));
    }

    public function update(Request $request, Registration $applicant)
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

            'photo' => 'max:1024',
            'citizenship' => 'max:1024',
            'transcript' => 'max:1024',
            'provisional_certificate' => 'max:1024',
            'payment_receipt' => 'max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        if ($validator->passes()) {
            $old_photo = $applicant->photo;
            $old_citizenship = $applicant->citizenship;
            $old_transcript = $applicant->transcript;
            $old_provisional_certificate = $applicant->provisional_certificate;
            $old_payment_receipt = $applicant->payment_receipt;

            $input = $request->all();
            $photo = $this->fileUpload($request, 'photo');
            $citizenship = $this->fileUpload($request, 'citizenship');
            $transcript = $this->fileUpload($request, 'transcript');
            $provisional_certificate = $this->fileUpload($request, 'provisional_certificate');
            $payment_receipt = $this->fileUpload($request, 'payment_receipt');

            if ($photo) {
                $this->removeFile($old_photo);
                $input['photo'] = $photo;
            } else {
                unset($input['photo']);
            }

            if ($citizenship) {
                $this->removeFile($old_citizenship);
                $input['citizenship'] = $citizenship;
            } else {
                unset($input['citizenship']);
            }

            if ($transcript) {
                $this->removeFile($old_transcript);
                $input['transcript'] = $transcript;
            } else {
                unset($input['transcript']);
            }

            if ($provisional_certificate) {
                $this->removeFile($old_provisional_certificate);
                $input['provisional_certificate'] = $provisional_certificate;
            } else {
                unset($input['provisional_certificate']);
            }

            if ($payment_receipt) {
                $this->removeFile($old_payment_receipt);
                $input['payment_receipt'] = $payment_receipt;
            } else {
                unset($input['payment_receipt']);
            }

            $applicant->update($input);
            return response()->json(['success' => 'Updated Successfully']);
        }
    }


    public function destroy(Registration $applicant)
    {
        $this->removeFile($applicant->photo);
        $this->removeFile($applicant->citizenship);
        $this->removeFile($applicant->transcript);
        $this->removeFile($applicant->provisional_certificate);
        $this->removeFile($applicant->payment_receipt);

        $applicant->delete();
        return redirect()->route('admin.applicants.index')->with('message', 'Delete Successfully');
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
