<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_type',
        'applicant_name',
        'dob',
        'gender',
        'citizenship_no',

        'per_province',
        'per_district',
        'per_municipality',
        'per_ward',
        'per_tole',

        'tem_province',
        'tem_district',
        'tem_municipality',
        'tem_ward',
        'tem_tole',

        'email',
        'phone',
        'mobile',

        'academic_qualification',
        'year_of_completion',
        'institute',
        'university',
        'occupation',
        'experience',

        'recommendor_name',
        'recommendor_membership_no',

        'photo',
        'citizenship',
        'transcript',
        'provisional_certificate',
        'payment_receipt'
    ];
}
