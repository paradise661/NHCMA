<?php

namespace App\Exports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisterExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Register::select(
            'name',
            'email',
            'number',
            'desigination',
            'organization',
            'province',
            'participation',
            'dietary_restriction',
            'accommodation',
            'membership',
            'member_num',
            'lifeMember_num',
            'generalMember_num',
            'remarks',
            'hear',
            'created_at'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone Number',
            'Designation',
            'Organization',
            'Province',
            'Participation',
            'Dietary Restriction',
            'Accommodation',
            'Membership',
            'Member No',
            'Life Member No',
            'General Member No',
            'Remarks',
            'How did you hear',
            'Created At',
        ];
    }
}

