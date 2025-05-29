@extends('layouts.admin.master')
@section('title', 'Applicant | Show')

@section('content')
    @include('admin.includes.message')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Applicant ({{ $applicant->applicant_name ?? '' }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.applicants.index') }}"><i class="fa-solid fa-arrow-left"></i>
                    Back</a>
            </small>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-secondary text-white p-2">APPLICANT DETAILS </div>
                    <div class="card-body">
                        <table class="table table-bordered mt-2">
                            <tr>
                                <th>Member Type</th>
                                <td>{{ $applicant->membership_type ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Applicant Name</th>
                                <td>{{ $applicant->applicant_name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $applicant->gender ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $applicant->dob ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $applicant->mobile ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>{{ $applicant->phone ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $applicant->email ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Citizenship Number</th>
                                <td>{{ $applicant->citizenship_no ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card shadow mt-4">
                    <div class="card-header bg-secondary text-white p-2">APPLICANT ADDRESS </div>
                    <div class="card-body row">
                        <div class="col-md-6">
                            <fieldset class="form-group px-3">
                                <legend class="w-auto legend-design mt-2">Permanent Address</legend>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Province</th>
                                        <td>{{ $applicant->per_province ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>District</th>
                                        <td>{{ $applicant->per_district ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</th>
                                        <td>{{ $applicant->per_municipality ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ward</th>
                                        <td>{{ $applicant->per_ward ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tole/Street</th>
                                        <td>{{ $applicant->per_tole ?? 'N/A' }}</td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group px-3">
                                <legend class="w-auto mt-2 legend-design">Temporary Address</legend>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Province</th>
                                        <td>{{ $applicant->tem_province ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>District</th>
                                        <td>{{ $applicant->tem_district ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</th>
                                        <td>{{ $applicant->tem_municipality ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ward</th>
                                        <td>{{ $applicant->tem_ward ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tole/Street</th>
                                        <td>{{ $applicant->tem_tole ?? 'N/A' }}</td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>

                    </div>
                </div>

                <div class="card shadow mt-4">
                    <div class="card-header bg-secondary text-white p-2">ACADEMIC QUALIFICATION </div>
                    <div class="card-body">
                        <table class="table table-bordered mt-3">
                            <tr>
                                <th>Academic Qualification</th>
                                <td>{{ $applicant->academic_qualification ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Year of Completion</th>
                                <td>{{ $applicant->year_of_completion ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Institute/College</th>
                                <td>{{ $applicant->institute ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>University</th>
                                <td>{{ $applicant->university ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Occupation</th>
                                <td>{{ $applicant->occupation ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Experience/Expertise</th>
                                <td>{{ $applicant->experience ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card shadow mt-4">
                    <div class="card-header bg-secondary text-white p-2">RECOMMENDATION DETAILS </div>
                    <div class="card-body">
                        <table class="table table-bordered mt-3">
                            <tr>
                                <th>Recommender Name</th>
                                <td>{{ $applicant->recommendor_name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Membership Number</th>
                                <td>{{ $applicant->recommendor_membership_no ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card shadow mt-4">
                    <div class="card-header bg-secondary text-white p-2">DOCUMENTS</div>
                    <div class="card-body">
                        <table class="table table-bordered mt-3">
                            <tr>
                                <th>Password Size Photo</th>
                                <td>
                                    @if ($applicant->photo)
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ asset('admin/applicant/' . $applicant->photo) }}" target="_blank">View
                                            File</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Citizenship Copy</th>
                                <td>
                                    @if ($applicant->citizenship)
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ asset('admin/applicant/' . $applicant->citizenship) }}"
                                            target="_blank">View
                                            File</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Transcript</th>
                                <td>
                                    @if ($applicant->transcript)
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ asset('admin/applicant/' . $applicant->transcript) }}"
                                            target="_blank">View
                                            File</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Provisional Certificate</th>
                                <td>
                                    @if ($applicant->provisional_certificate)
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ asset('admin/applicant/' . $applicant->provisional_certificate) }}"
                                            target="_blank">View
                                            File</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Payment Receipt</th>
                                <td>
                                    @if ($applicant->payment_receipt)
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ asset('admin/applicant/' . $applicant->payment_receipt) }}"
                                            target="_blank">View
                                            File</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
