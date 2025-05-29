@extends('layouts.frontend.master')
@section('seo')
    <title>{{ $settings['homepage_seo_title'] ?? 'Nepal Health Care Manager Association' }}</title>
    <meta name="keywords" content="{{ $settings['homepage_seo_keywords'] ?? 'Nepal Health Care Manager Association' }}">
    <meta name="description" content="{{ $settings['homepage_seo_description'] ?? 'Nepal Health Care Manager Association' }}">
@endsection
@section('content')
    <section class="contact">
        <div class="container">
            <div class="text-center">
                <h4 class="fw-bolder mt-5">
                    <span class=""><i>Nepal Health Care Manager's Association Membership Form</i></span>
                </h4>
            </div>
            <div>
                <form class="gap-16-row px-12 py-24 mt-3 registration" id="myForm" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 step-one">
                        <span><i>(Note: <span class="text-secondary">*</span>Denotes Mandatory field)</i></span>
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white p-2">APPLICANT DETAILS </div>
                            <div class="card-body">
                                <div class="row gap-24-row mt-8 mx-0">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="membership_type">Types of Member<span
                                                    class="text-secondary">*</span></label>
                                            <select class="form-select" id="" name="membership_type">
                                                <option value="">-- Select Type --</option>
                                                <option {{ old('membership_type') == 'General' ? 'selected' : '' }}
                                                    value="General">General</option>
                                                <option {{ old('membership_type') == 'Lifetime' ? 'selected' : '' }}
                                                    value="Lifetime">Lifetime</option>
                                            </select>
                                            <div class="invalid-feedback text-secondary" id="membership_type_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="applicant_name">Applicant Name <span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" name="applicant_name" type="text"
                                                value="{{ old('applicant_name') }}">
                                            <div class="invalid-feedback text-secondary" id="applicant_name_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="gender">Gender <span
                                                    class="text-secondary">*</span></label>
                                            <select class="form-select" id="" name="gender">
                                                <option value="">-- Select Gender --</option>
                                                <option {{ old('gender') == 'Male' ? 'selected' : '' }} value="Male">Male
                                                </option>
                                                <option {{ old('gender') == 'Female' ? 'selected' : '' }} value="Female">
                                                    Female</option>
                                                <option {{ old('gender') == 'Other' ? 'selected' : '' }} value="Other">
                                                    Other</option>
                                            </select>
                                            <div class="invalid-feedback text-secondary" id="gender_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="dob">Date of Birth <span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md flatpicker" type="text"
                                                name="dob" value="{{ old('dob') }}">
                                            <div class="invalid-feedback text-secondary" id="dob_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="mobile">Mobile <span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="text" name="mobile"
                                                value="{{ old('mobile') }}">
                                            <div class="invalid-feedback text-secondary" id="mobile_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="phone">Telephone</label>
                                            <input class="form-control form-control-md" type="text" name="phone"
                                                value="{{ old('phone') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="email">Email <span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="text" name="email"
                                                value="{{ old('email') }}">
                                            <div class="invalid-feedback text-secondary" id="email_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="citizenship_no">Citizenship Number <span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="text"
                                                name="citizenship_no" value="{{ old('citizenship_no') }}">
                                            <div class="invalid-feedback text-secondary" id="citizenship_no_error"
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
                            <div class="card-header bg-primary text-white p-2">APPLICANT ADDRESS</div>
                            <div class="card-body">
                                <fieldset class="form-group px-3">
                                    <legend class="w-auto px-2 legend-design">Permanent Address</legend>
                                    <div class="row mx-0">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_province">Province<span
                                                        class="text-secondary">*</span></label>
                                                <select class="form-select" id="perprovince_dropdown"
                                                    name="per_province">
                                                    <option value="">-- Select Province --</option>
                                                    @foreach ($provinces as $province)
                                                        <option
                                                            {{ old('per_province') == $province->name ? 'selected' : '' }}
                                                            myid="{{ $province->id }}" value="{{ $province->name }}">
                                                            {{ $province->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback text-secondary" id="per_province_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_district">District<span
                                                        class="text-secondary">*</span></label>
                                                <select class="form-select" id="perdistrict_dropdown"
                                                    name="per_district">
                                                </select>
                                                <div class="invalid-feedback text-secondary" id="per_district_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_municipality">Municipality<span
                                                        class="text-secondary">*</span></label>
                                                <select class="form-select" id="permunicipality_dropdown"
                                                    name="per_municipality">
                                                </select>
                                                <div class="invalid-feedback text-secondary" id="per_municipality_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_ward">Ward<span
                                                        class="text-secondary">*</span></label>
                                                <input class="form-control form-control-md" name="per_ward"
                                                    type="text" value="{{ old('per_ward') }}">
                                                <div class="invalid-feedback text-secondary" id="per_ward_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="per_tole">Tole/Street<span
                                                        class="text-secondary">*</span></label>
                                                <input class="form-control form-control-md" name="per_tole"
                                                    type="text" value="{{ old('per_tole') }}">
                                                <div class="invalid-feedback text-secondary" id="per_tole_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <legend class="w-auto px-2 legend-design">Temporary Address</legend>
                                    {{-- <div class="form-check">
                                        <div class="px-2 py-2">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox"
                                                value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Same as Permanent
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="row mx-0">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_province">Province</label>
                                                <select class="form-select" id="temprovince_dropdown"
                                                    name="tem_province">
                                                    <option value="">-- Select Province --</option>
                                                    @foreach ($provinces as $province)
                                                        <option
                                                            {{ old('tem_province') == $province->name ? 'selected' : '' }}
                                                            myid="{{ $province->id }}" value="{{ $province->name }}">
                                                            {{ $province->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback text-secondary" id="tem_province_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_district">District</label>
                                                <select class="form-select" id="temdistrict_dropdown"
                                                    name="tem_district">
                                                </select>
                                                <div class="invalid-feedback text-secondary" id="tem_district_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_municipality">Municipality</label>
                                                <select class="form-select" id="temmunicipality_dropdown"
                                                    name="tem_municipality">
                                                </select>
                                                <div class="invalid-feedback text-secondary" id="tem_municipality_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_ward">Ward</label>
                                                <input class="form-control form-control-md" name="tem_ward"
                                                    type="text" value="{{ old('tem_ward') }}">
                                                <div class="invalid-feedback text-secondary" id="tem_ward_error"
                                                    style="display: block;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tem_tole">Tole/Street</label>
                                                <input class="form-control form-control-md" name="tem_tole"
                                                    type="text" value="{{ old('tem_tole') }}">
                                                <div class="invalid-feedback text-secondary" id="tem_tole_error"
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
                            <div class="card-header bg-primary text-white p-2">ACADEMIC QUALIFICATION</div>
                            <div class="card-body">
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="academic_qualification">Academic
                                                Qualification<span class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" name="academic_qualification"
                                                type="text" value="{{ old('academic_qualification') }}">

                                            <div class="invalid-feedback text-secondary" id="academic_qualification_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="year_of_completion">Year of Completion<span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md flatpicker"
                                                name="year_of_completion" type="text"
                                                value="{{ old('year_of_completion') }}">

                                            <div class="invalid-feedback text-secondary" id="year_of_completion_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="institute">Institute/College<span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" name="institute" type="text"
                                                value="{{ old('institute') }}">
                                            <div class="invalid-feedback text-secondary" id="institute_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="university">University<span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" name="university" type="text"
                                                value="{{ old('university') }}">

                                            <div class="invalid-feedback text-secondary" id="university_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="occupation">Occupation</label>
                                            <input class="form-control form-control-md" name="occupation" type="text"
                                                value="{{ old('occupation') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="experience">Experience/Expertise</label>
                                            <input class="form-control form-control-md" name="experience" type="text"
                                                value="{{ old('experience') }}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-four mt-24">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white p-2">RECOMMENDATION DETAILS</div>
                            <div class="card-body">
                                <div class="row mx-0">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="recommendor_name">Recommender Name</label>
                                            <input class="form-control form-control-md" name="recommendor_name"
                                                type="text" value="{{ old('recommendor_name') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="recommendor_membership_no">Membership
                                                Number</label>
                                            <input class="form-control form-control-md" name="recommendor_membership_no"
                                                type="text" value="{{ old('recommendor_membership_no') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-five mt-24">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white p-2">DOCUMENTS</div>
                            <div class="card-body">
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="photo">Passport Size Photo
                                                <span class="size">(MAX 1MB) </span> <span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="file" name="photo"
                                                value="{{ old('photo') }}">

                                            <div class="invalid-feedback text-secondary" id="photo_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="citizenship">Citizenship Copy <span
                                                    class="size">(MAX 1MB) </span><span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="file" name="citizenship"
                                                value="{{ old('citizenship') }}">

                                            <div class="invalid-feedback text-secondary" id="citizenship_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="transcript">Transcript <span
                                                    class="size">(MAX 1MB) </span><span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="file" name="transcript"
                                                value="{{ old('transcript') }}">

                                            <div class="invalid-feedback text-secondary" id="transcript_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mt-3 mb-3">
                                            <label class="form-label" for="provisional_certificate">Provisional
                                                Certificate <span class="size">(MAX 1MB) </span></label>
                                            <input class="form-control form-control-md" type="file"
                                                name="provisional_certificate"
                                                value="{{ old('provisional_certificate') }}">

                                            <div class="invalid-feedback text-secondary"
                                                id="provisional_certificate_error" style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mt-3 mb-3">
                                            <label class="form-label" for="payment_receipt">Payment Receipt <span
                                                    class="size">(MAX 1MB) </span><span
                                                    class="text-secondary">*</span></label>
                                            <input class="form-control form-control-md" type="file"
                                                name="payment_receipt" value="{{ old('payment_receipt') }}">

                                            <div class="invalid-feedback text-secondary" id="payment_receipt_error"
                                                style="display: block;">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 step-six">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="form-check">
                                    <div class="px-2 py-2">
                                        <input class="form-check-input" id="flexCheckDefault" type="checkbox"
                                            value="1" name="terms" required>
                                        <p class="text-justify">I hereby declare that I wish to be a General/Life member of
                                            Nepal Health Care
                                            Manager's Association in accordance with the statute of the organization. I am
                                            abide by the rule
                                            and regulations and am committed to fulfill organizational vision by obeying
                                            existing norms and
                                            values of the organization.</p>
                                        <div class="invalid-feedback text-secondary" id="terms_error"
                                            style="display: block;">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mb-24">
                                    <button class="btn btn-primary text-white br-0 py-2" id="submitForm"
                                        type="submit"><i class="fa fa-refresh" aria-hidden="true"></i>
                                        SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
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
                url: '{{ route('registration.store') }}',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',

                success: function(response) {
                    if (response.success) {
                        toastr.success(response.success);
                        $('#myForm')[0].reset();
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
