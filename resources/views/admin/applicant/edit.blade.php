@extends('layouts.admin.master')
@section('title', 'Applicant | Edit ')

@section('content')
    @include('admin.includes.message')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Applicant "{{ $applicant->applicant_name ?? 'N/A' }}"</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.applicants.index') }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form id="myForm" method="POST" action="{{ route('admin.applicants.update', $applicant->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-4 step-one">
                        <span><i>(Note: <span class="text-danger">*</span>Denotes Mandatory field)</i></span>
                        <div class="card shadow">
                            <div class="card-header bg-secondary text-white p-2">APPLICANT DETAILS </div>
                            <div class="card-body">
                                <div class="row gap-24-row mt-4 mx-0">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="membership_type">Types of Member<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="" name="membership_type">
                                                <option value="">-- Select Type --</option>
                                                <option
                                                    {{ old('membership_type', $applicant->membership_type) == 'General' ? 'selected' : '' }}
                                                    value="General">General</option>
                                                <option
                                                    {{ old('membership_type', $applicant->membership_type) == 'Lifetime' ? 'selected' : '' }}
                                                    value="Lifetime">Lifetime</option>
                                            </select>
                                            <div class="invalid-feedback text-danger" id="membership_type_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="applicant_name">Applicant Name <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="applicant_name" type="text"
                                                value="{{ old('applicant_name', $applicant->applicant_name) }}">
                                            <div class="invalid-feedback text-danger" id="applicant_name_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="gender">Gender <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="" name="gender">
                                                <option value="">-- Select Gender --</option>
                                                <option {{ old('gender', $applicant->gender) == 'Male' ? 'selected' : '' }}
                                                    value="Male">Male
                                                </option>
                                                <option
                                                    {{ old('gender', $applicant->gender) == 'Female' ? 'selected' : '' }}
                                                    value="Female">
                                                    Female</option>
                                                <option {{ old('gender', $applicant->gender) == 'Other' ? 'selected' : '' }}
                                                    value="Other">
                                                    Other</option>
                                            </select>
                                            <div class="invalid-feedback text-danger" id="gender_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="dob">Date of Birth <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md flatpicker" type="text"
                                                name="dob" value="{{ old('dob', $applicant->dob) }}">
                                            <div class="invalid-feedback text-danger" id="dob_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="mobile">Mobile <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="text" name="mobile"
                                                value="{{ old('mobile', $applicant->mobile) }}">
                                            <div class="invalid-feedback text-danger" id="mobile_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="phone">Telephone <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="text" name="phone"
                                                value="{{ old('phone', $applicant->phone) }}">
                                            <div class="invalid-feedback text-danger" id="phone_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="email">Email <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="text" name="email"
                                                value="{{ old('email', $applicant->email) }}">
                                            <div class="invalid-feedback text-danger" id="email_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="citizenship_no">Citizenship Number <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="text"
                                                name="citizenship_no"
                                                value="{{ old('citizenship_no', $applicant->citizenship_no) }}">
                                            <div class="invalid-feedback text-danger" id="citizenship_no_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-two mt-24">
                        <div class="card shadow">
                            <div class="card-header bg-secondary text-white p-2">APPLICANT ADDRESS</div>
                            <div class="card-body">
                                <fieldset class="form-group px-3 mt-3">
                                    <legend class="w-auto px-2 legend-design">Permanent Address</legend>
                                    <div class="row mx-0">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_province">Province<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="perprovince_dropdown"
                                                    name="per_province">
                                                    <option value="">-- Select Province --</option>
                                                    @if ($provinces)
                                                        @foreach ($provinces as $province)
                                                            <option
                                                                {{ old('per_province', $applicant->per_province) == $province->name ? 'selected' : '' }}
                                                                myid="{{ $province->id }}"
                                                                value="{{ $province->name }}">
                                                                {{ $province->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback text-danger" id="per_province_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_district">District<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="perdistrict_dropdown"
                                                    name="per_district">
                                                    @if ($perdistricts)
                                                        @foreach ($perdistricts as $perdistrict)
                                                            <option
                                                                {{ old('per_district', $applicant->per_district) == $perdistrict->name ? 'selected' : '' }}
                                                                myid="{{ $perdistrict->id }}"
                                                                value="{{ $perdistrict->name }}">
                                                                {{ $perdistrict->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback text-danger" id="per_district_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_municipality">Municipality<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="permunicipality_dropdown"
                                                    name="per_municipality">
                                                    @if ($permunicipalities)
                                                        @foreach ($permunicipalities as $permunicipality)
                                                            <option
                                                                {{ old('per_municipality', $applicant->per_municipality) == $permunicipality->name ? 'selected' : '' }}
                                                                myid="{{ $permunicipality->id }}"
                                                                value="{{ $permunicipality->name }}">
                                                                {{ $permunicipality->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback text-danger" id="per_municipality_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_ward">Ward<span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control form-control-md" name="per_ward"
                                                    type="text" value="{{ old('per_ward', $applicant->per_ward) }}">
                                                <div class="invalid-feedback text-danger" id="per_ward_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_tole">Tole/Street<span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control form-control-md" name="per_tole"
                                                    type="text" value="{{ old('per_tole', $applicant->per_tole) }}">
                                                <div class="invalid-feedback text-danger" id="per_tole_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <legend class="w-auto px-2 legend-design">Temporary Address</legend>
                                    <div class="row mx-0">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_province">Province</label>
                                                <select class="form-select" id="temprovince_dropdown"
                                                    name="tem_province">
                                                    <option value="">-- Select Province --</option>
                                                    @if ($provinces)
                                                        @foreach ($provinces as $province)
                                                            <option
                                                                {{ old('tem_province', $applicant->tem_province) == $province->name ? 'selected' : '' }}
                                                                myid="{{ $province->id }}"
                                                                value="{{ $province->name }}">
                                                                {{ $province->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback text-danger" id="tem_province_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_district">District</label>
                                                <select class="form-select" id="temdistrict_dropdown"
                                                    name="tem_district">
                                                    @if ($temdistricts)
                                                        @foreach ($temdistricts as $temdistrict)
                                                            <option
                                                                {{ old('tem_district', $applicant->tem_district) == $temdistrict->name ? 'selected' : '' }}
                                                                myid="{{ $temdistrict->id }}"
                                                                value="{{ $temdistrict->name }}">
                                                                {{ $temdistrict->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback text-danger" id="tem_district_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_municipality">Municipality</label>
                                                <select class="form-select" id="temmunicipality_dropdown"
                                                    name="tem_municipality">
                                                    @if ($temmunicipalities)
                                                        @foreach ($temmunicipalities as $temmunicipality)
                                                            <option
                                                                {{ old('tem_municipality', $applicant->tem_municipality) == $temmunicipality->name ? 'selected' : '' }}
                                                                myid="{{ $temmunicipality->id }}"
                                                                value="{{ $temmunicipality->name }}">
                                                                {{ $temmunicipality->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback text-danger" id="tem_municipality_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_ward">Ward</label>
                                                <input class="form-control form-control-md" name="tem_ward"
                                                    type="text" value="{{ old('tem_ward', $applicant->tem_ward) }}">
                                                <div class="invalid-feedback text-danger" id="tem_ward_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_tole">Tole/Street</label>
                                                <input class="form-control form-control-md" name="tem_tole"
                                                    type="text" value="{{ old('tem_tole', $applicant->tem_tole) }}">
                                                <div class="invalid-feedback text-danger" id="tem_tole_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-three mt-24">
                        <div class="card shadow">
                            <div class="card-header bg-secondary text-white p-2">ACADEMIC QUALIFICATION</div>
                            <div class="card-body">
                                <div class="row mx-0 mt-4">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="academic_qualification">Academic
                                                Qualification<span class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="academic_qualification"
                                                type="text"
                                                value="{{ old('academic_qualification', $applicant->academic_qualification) }}">

                                            <div class="invalid-feedback text-danger" id="academic_qualification_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="year_of_completion">Year of Completion<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md flatpicker"
                                                name="year_of_completion" type="text"
                                                value="{{ old('year_of_completion', $applicant->year_of_completion) }}">

                                            <div class="invalid-feedback text-danger" id="year_of_completion_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="institute">Institute/College<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="institute" type="text"
                                                value="{{ old('institute', $applicant->institute) }}">
                                            <div class="invalid-feedback text-danger" id="institute_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="university">University<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="university" type="text"
                                                value="{{ old('university', $applicant->university) }}">

                                            <div class="invalid-feedback text-danger" id="university_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="occupation">Occupation<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="occupation" type="text"
                                                value="{{ old('occupation', $applicant->occupation) }}">
                                            <div class="invalid-feedback text-danger" id="occupation_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="experience">Experience/Expertise<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="experience" type="text"
                                                value="{{ old('experience', $applicant->experience) }}">
                                            <div class="invalid-feedback text-danger" id="experience_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-four mt-24">
                        <div class="card shadow">
                            <div class="card-header bg-secondary text-white p-2">RECOMMENDATION DETAILS</div>
                            <div class="card-body">
                                <div class="row mt-4 mx-0">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="recommendor_name">Recommender Name<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="recommendor_name"
                                                type="text"
                                                value="{{ old('recommendor_name', $applicant->recommendor_name) }}">

                                            <div class="invalid-feedback text-danger" id="recommendor_name_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="recommendor_membership_no">Membership
                                                Number<span class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" name="recommendor_membership_no"
                                                type="text"
                                                value="{{ old('recommendor_membership_no', $applicant->recommendor_membership_no) }}">
                                            <div class="invalid-feedback text-danger" id="recommendor_membership_no_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-five mt-24">
                        <div class="card shadow">
                            <div class="card-header bg-secondary text-white p-2">DOCUMENTS</div>
                            <div class="card-body">
                                <div class="row mt-4 mx-0">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="photo">Passport Size Photo
                                                <span class="size">(MAX 1MB) </span> <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="file" name="photo"
                                                value="{{ old('photo') }}">

                                            <div class="invalid-feedback text-danger" id="photo_error"
                                                style="display: block;">
                                            </div>

                                            @if ($applicant->photo)
                                                <a class="text-primary"
                                                    href="{{ asset('admin/applicant/' . $applicant->photo) }}"
                                                    target="_blank">View File</a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="citizenship">Citizenship Copy <span
                                                    class="size">(MAX 1MB) </span><span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="file" name="citizenship"
                                                value="{{ old('citizenship') }}">

                                            <div class="invalid-feedback text-danger" id="citizenship_error"
                                                style="display: block;">
                                            </div>

                                            @if ($applicant->citizenship)
                                                <a class="text-primary"
                                                    href="{{ asset('admin/applicant/' . $applicant->citizenship) }}"
                                                    target="_blank">View File</a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="transcript">Transcript <span
                                                    class="size">(MAX 1MB) </span><span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="file" name="transcript"
                                                value="{{ old('transcript') }}">

                                            <div class="invalid-feedback text-danger" id="transcript_error"
                                                style="display: block;">
                                            </div>

                                            @if ($applicant->transcript)
                                                <a class="text-primary"
                                                    href="{{ asset('admin/applicant/' . $applicant->transcript) }}"
                                                    target="_blank">View File</a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mt-3 mb-3">
                                            <label class="form-label" for="provisional_certificate">Provisional
                                                Certificate <span class="size">(MAX 1MB) </span></label>
                                            <input class="form-control form-control-md" type="file"
                                                name="provisional_certificate"
                                                value="{{ old('provisional_certificate') }}">

                                            <div class="invalid-feedback text-danger" id="provisional_certificate_error"
                                                style="display: block;">
                                            </div>

                                            @if ($applicant->provisional_certificate)
                                                <a class="text-primary"
                                                    href="{{ asset('admin/applicant/' . $applicant->provisional_certificate) }}"
                                                    target="_blank">View File</a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mt-3 mb-3">
                                            <label class="form-label" for="payment_receipt">Payment Receipt <span
                                                    class="size">(MAX 1MB) </span><span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control form-control-md" type="file"
                                                name="payment_receipt" value="{{ old('payment_receipt') }}">

                                            <div class="invalid-feedback text-danger" id="payment_receipt_error"
                                                style="display: block;">
                                            </div>

                                            @if ($applicant->payment_receipt)
                                                <a class="text-primary"
                                                    href="{{ asset('admin/applicant/' . $applicant->payment_receipt) }}"
                                                    target="_blank">View File</a>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary text-white br-0 py-2" id="submitForm" type="submit"><i
                            class="fa fa-refresh" aria-hidden="true"></i>
                        Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $('#perprovince_dropdown').on('change', function() {
                var provinceID = $('option:selected', this).attr('myid');

                $("#perdistrict_dropdown").html('');
                $.ajax({
                    url: "{{ url('fetch-district') }}",
                    type: "POST",
                    data: {
                        province_id: provinceID,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#perdistrict_dropdown').html(
                            '<option value="">-- Select District --</option>');
                        $.each(result, function(key, value) {
                            $("#perdistrict_dropdown").append('<option myid="' +
                                value.id + '" value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                        $('#permunicipality_dropdown').html(
                            '<option value="">-- Select Municipality --</option>');
                    }
                });
            });

            $('#perdistrict_dropdown').on('change', function() {
                var districtID = $('option:selected', this).attr('myid');
                $("#permunicipality_dropdown").html('');
                $.ajax({
                    url: "{{ url('fetch-municipality') }}",
                    type: "POST",
                    data: {
                        district_id: districtID,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#permunicipality_dropdown').html(
                            '<option value="">-- Select Municipality --</option>');
                        $.each(res, function(key, value) {
                            $("#permunicipality_dropdown").append('<option value="' +
                                value
                                .name + '">' + value.name + '</option>');
                        });
                    }
                });
            });

            $('#temprovince_dropdown').on('change', function() {
                var provinceID = $('option:selected', this).attr('myid');

                $("#temdistrict_dropdown").html('');
                $.ajax({
                    url: "{{ url('fetch-district') }}",
                    type: "POST",
                    data: {
                        province_id: provinceID,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#temdistrict_dropdown').html(
                            '<option value="">-- Select District --</option>');
                        $.each(result, function(key, value) {
                            $("#temdistrict_dropdown").append('<option myid="' +
                                value.id + '" value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                        $('#temmunicipality_dropdown').html(
                            '<option value="">-- Select Municipality --</option>');
                    }
                });
            });

            $('#temdistrict_dropdown').on('change', function() {
                var districtID = $('option:selected', this).attr('myid');
                $("#temmunicipality_dropdown").html('');
                $.ajax({
                    url: "{{ url('fetch-municipality') }}",
                    type: "POST",
                    data: {
                        district_id: districtID,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#temmunicipality_dropdown').html(
                            '<option value="">-- Select Municipality --</option>');
                        $.each(res, function(key, value) {
                            $("#temmunicipality_dropdown").append('<option value="' +
                                value
                                .name + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });

        $('#submitForm').click(function(e) {
            e.preventDefault();
            var formData = new FormData($('#myForm')[0]);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{ route('admin.applicants.update', $applicant->id) }}',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',

                success: function(response) {
                    if (response.success) {
                        toastr.success(response.success);
                        location.reload();
                        $('.invalid-feedback').text('');
                    } else {
                        toastr.error('Please Complete All Details');
                        $('.invalid-feedback').text('');
                        var errors = response.errors;
                        for (var field in errors) {
                            $('#' + field + '_error').text('*' + errors[field][0]);
                        }
                    }
                }
            });
        });
    </script>
@endsection
