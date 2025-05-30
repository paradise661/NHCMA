@extends('layouts.frontend.master')
@section('content')
    <section class="mt-5 about-missions">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4">
                    <h2 class="text-primary">Registration</h2>
                    <div class="text-grey-300 my-3 align-items-center paragraph">
                        {!! strlen($eventregister->description) > 2000
                            ? substr($eventregister->description, 0, 2000) . '...'
                            : $eventregister->description !!}
                    </div>

                    <!-- Responsive and styled image -->
                    <div class="my-4 image-container text-center">
                        <img class="img-fluid rounded shadow-sm equal-image"
                            src="{{ asset('admin/images/setting/' . $settings['faq_image']) }}" alt="QR"
                            style="object-fit: cover;">
                    </div>

                    <div class="text-grey-300 my-3 align-items-center paragraph">
                        {!! strlen($eventregister->short_description) > 2000
                            ? substr($eventregister->short_description, 0, 2000) . '...'
                            : $eventregister->short_description !!}
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 mb-4 media-wrapper">
                    <img src="{{ asset('admin/images/' . $eventregister->image) }}" alt="{{ $eventregister->title ?? '' }}">

                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .page-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            padding: 40px 20px;
            position: relative;
        }

        .side-panel {
            position: sticky;
            top: 50px;
            width: 250px;
            height: 60vh;
            background-color: #fff;
            padding: 30px 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .side-panel img {
            max-width: 100%;
            max-height: 45%;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        /* Increase size specifically for QR code */
        .side-panel img.qr-code {
            max-height: 60%;
            /* bigger height */
            max-width: 90%;
            /* wider */
        }

        /* Normal hover for logo */
        .side-panel img.logo:hover {
            transform: scale(1.05);
        }

        /* Diagonal grow + move for QR code */
        .side-panel img.qr-code:hover {
            transform: scale(1.1) translate(10px, -10px);
        }

        .form-wrapper {
            flex-grow: 1;
            max-width: 960px;
        }

        .form-container {
            padding: 40px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            border-top: 6px solid #e50028;
        }

        .form-title {
            color: #e50028;
            font-weight: 600;
        }

        .form-section {
            margin-bottom: 24px;
        }

        .d-none {
            display: none !important;
        }

        @media (max-width: 992px) {
            .page-wrapper {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

    <div class="page-wrapper">
        <!-- Left Sticky Panel -->
        {{-- <div class="side-panel">
            <img class="logo" src="{{ asset('frontend/assets/images/loogo.jpg') }}" alt="Logo" />
            <img class="qr-code" src="{{ asset('frontend/assets/images/QR1.png') }}" alt="QR Code" />
        </div> --}}

        <!-- Main Form -->
        <div class="form-wrapper">
            <div class="form-container">
                <h2 class="form-title text-center mb-4">Registration Form</h2>
                <form id="registrationForm" enctype="multipart/form-data" method="post"
                    action="{{ route('frontend.register.store') }}">
                    @csrf

                    <div class="form-floating form-section">
                        <input class="form-control" id="fullName" name="name" type="text" placeholder="Full Name"
                            required>
                        <label for="fullName">Full Name</label>
                    </div>

                    <div class="form-floating form-section">
                        <input class="form-control" id="designation" name="desigination" type="text"
                            placeholder="Designation" required>
                        <label for="designation">Designation/Title</label>
                    </div>

                    <div class="form-floating form-section">
                        <input class="form-control" id="organization" name="organization" type="text"
                            placeholder="Organization" required>
                        <label for="organization">Name of Hospital/Organization</label>
                    </div>

                    <div class="form-floating form-section">
                        <select class="form-select" id="orgType" name="org_type">
                            <option selected disabled>Select</option>
                            <option value="Private Hospital">Private Hospital</option>
                            <option value="Public Hospital">Public Hospital</option>
                            <option value="NGO/INGO">NGO/INGO</option>
                            <option value="Academic Institution">Academic Institution</option>
                            <option value="Government Body">Government Body</option>
                            <option value="Other">Other</option>
                        </select>
                        <label for="orgType">Type of Organization</label>
                    </div>
                    <div class="form-floating form-section d-none" id="orgTypeOtherWrapper">
                        <input class="form-control" id="orgTypeOther" name="org_type_other" type="text"
                            placeholder="Please specify">
                        <label for="orgTypeOther">Please specify</label>
                    </div>

                    <div class="form-floating form-section">
                        <input class="form-control" id="mobile" name="number" type="text" placeholder="Mobile"
                            required>
                        <label for="mobile">Mobile Number</label>
                    </div>

                    <div class="form-floating form-section">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email"
                            required>
                        <label for="email">Email Address</label>
                    </div>

                    <div class="form-floating form-section">
                        <select class="form-select" id="province" name="province">
                            <option selected disabled>Select</option>
                            @foreach (['Koshi', 'Madhesh', 'Bagmati', 'Gandaki', 'Lumbini', 'Karnali', 'Sudurpashchim'] as $province)
                                <option value="{{ $province }}">{{ $province }}</option>
                            @endforeach
                        </select>
                        <label for="province">Province</label>
                    </div>

                    <div class="form-floating form-section">
                        <select class="form-select" id="participationType" name="participation">
                            <option selected disabled>Select</option>
                            <option value="Board Member">Board Member</option>
                            <option value="CEO/Director">CEO/Director</option>
                            <option value="Hospital Manager">Hospital Manager</option>
                            <option value="Medical Superintendent">Medical Superintendent</option>
                            <option value="Quality Officer">Quality Officer</option>
                            <option value="Other">Other</option>
                        </select>
                        <label for="participationType">Participation Type</label>
                    </div>
                    <div class="form-floating form-section d-none" id="participationOtherWrapper">
                        <input class="form-control" id="participationOther" name="participation_other" type="text"
                            placeholder="Please specify">
                        <label for="participationOther">Please specify</label>
                    </div>

                    <div class="form-floating form-section">
                        <input class="form-control" id="dietary" name="dietary_restriction" type="text"
                            placeholder="Dietary Restrictions">
                        <label for="dietary">Do you have any dietary restrictions?</label>
                    </div>

                    <div class="form-section">
                        <label class="form-label">Do you require an accommodation recommendation?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="accYes" type="radio" name="accommodation"
                                value="Yes">
                            <label class="form-check-label" for="accYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="accNo" type="radio" name="accommodation"
                                value="No">
                            <label class="form-check-label" for="accNo">No</label>
                        </div>
                    </div>

                    <div class="form-section">
                        <label class="form-label">Do you have NHCMA Membership?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="memYes" type="radio" name="membership"
                                value="Yes">
                            <label class="form-check-label" for="memYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="memNo" type="radio" name="membership"
                                value="No">
                            <label class="form-check-label" for="memNo">No</label>
                        </div>
                    </div>

                    <div class="d-none" id="membershipDetails">
                        <div class="form-floating form-section">
                            <input class="form-control" id="membershipNumber" name="member_num" type="text"
                                placeholder="Membership Number">
                            <label for="membershipNumber">Membership Number</label>
                        </div>
                        <div class="form-floating form-section">
                            <input class="form-control" id="lifeMember" name="lifeMember_num" type="text"
                                placeholder="Life Member Number">
                            <label for="lifeMember">Life Member Number</label>
                        </div>
                        <div class="form-floating form-section">
                            <input class="form-control" id="generalMember" name="generalMember_num" type="text"
                                placeholder="General Member Number">
                            <label for="generalMember">General Member Number</label>
                        </div>
                    </div>

                    <div class="form-floating form-section">
                        <select class="form-select" id="heardFrom" name="hear">
                            <option selected disabled>Select</option>
                            <option value="APHIN">APHIN</option>
                            <option value="NHCMA">NHCMA</option>
                            <option value="Email Invitation">Email Invitation</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Word of Mouth">Word of Mouth</option>
                            <option value="Other">Other</option>
                        </select>
                        <label for="heardFrom">How did you hear about the event?</label>
                    </div>
                    <div class="form-floating form-section d-none" id="heardFromOtherWrapper">
                        <input class="form-control" id="heardFromOther" name="hear_other" type="text"
                            placeholder="Please specify">
                        <label for="heardFromOther">Please specify</label>
                    </div>

                    <div class="form-floating form-section">
                        <textarea class="form-control" id="remarks" name="remarks" placeholder="Remarks or Questions"
                            style="height: 100px"></textarea>
                        <label for="remarks">Remarks or Questions</label>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="voucher">Payment Voucher</label>
                        <input class="form-control" id="voucher" name="image" type="file">
                    </div>

                    <div class="alert d-none" id="formAlert" role="alert"></div>

                    <button class="btn btn-primary w-100" type="submit">Submit Registration</button>
                </form>
            </div>
        </div>

        {{-- <!-- Right Sticky Panel -->
        <div class="side-panel">
            <img class="logo" src="{{ asset('frontend/assets/images/logo1.png') }}" alt="Logo" />
            <img class="qr-code" src="{{ asset('frontend/assets/images/QR.png') }}" alt="QR Code" />
        </div> --}}
    </div>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet" />

    <script>
        document.getElementById('orgType').addEventListener('change', function() {
            document.getElementById('orgTypeOtherWrapper').classList.toggle('d-none', this.value !== 'Other');
        });

        document.getElementById('participationType').addEventListener('change', function() {
            document.getElementById('participationOtherWrapper').classList.toggle('d-none', this.value !== 'Other');
        });

        document.getElementById('heardFrom').addEventListener('change', function() {
            document.getElementById('heardFromOtherWrapper').classList.toggle('d-none', this.value !== 'Other');
        });

        document.getElementById('memYes').addEventListener('change', () => {
            document.getElementById('membershipDetails').classList.remove('d-none');
        });

        document.getElementById('memNo').addEventListener('change', () => {
            document.getElementById('membershipDetails').classList.add('d-none');
        });

        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = e.target;
            let formData = new FormData(form);

            axios.post(form.action, formData)
                .then(response => {
                    toastr.success(response.data.message || 'Registration successful!');
                    form.reset();
                })
                .catch(error => {
                    if (error.response && error.response.data && error.response.data.errors) {
                        const errors = error.response.data.errors;
                        Object.values(errors).forEach(msgArray => {
                            toastr.error(msgArray[0]);
                        });
                    } else {
                        toastr.error('Something went wrong!');
                    }
                });
        });
    </script>
@endsection
