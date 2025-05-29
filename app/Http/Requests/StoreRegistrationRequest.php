<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'membership_type' => 'required',
            'applicant_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'citizenship_no' => 'required',
            'email' => 'required',
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

            'photo' => 'required|max:1024',
            'citizenship' => 'required|max:1024',
            'transcript' => 'required|max:1024',
            'provisional_certificate' => 'max:1024',
            'payment_receipt' => 'required|max:1024',
        ];
    }
}
