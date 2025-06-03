@extends('layouts.frontend.master')
@section('content')
    <section class="mt-5 about-missions">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-4">
                    <h2 class="text-primary">Registration</h2>
                    <div class="text-grey-300 paragraph mb-0">
                        {!! strlen($eventregister->description) > 2000
                            ? substr($eventregister->description, 0, 2000) . '...'
                            : $eventregister->description !!}
                    </div>

                    <!-- Responsive and styled image -->
                    <div class="image-container-small text-center mt-0">
                        <img class="img-fluid rounded shadow-sm"
                            src="{{ asset('admin/images/setting/' . $settings['faq_image']) }}" alt="QR"
                            style="object-fit: cover;">
                    </div>

                    <div class="text-grey-300 my-3 align-items-center paragraph">
                        {!! strlen($eventregister->short_description) > 2000
                            ? substr($eventregister->short_description, 0, 2000) . '...'
                            : $eventregister->short_description !!}
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 mb-4 media-wrapper text-center">
                    <img class="img-fluid rounded shadow-sm" src="{{ asset('admin/images/' . $eventregister->image) }}"
                        alt="{{ $eventregister->title ?? '' }}"
                        style="object-fit: contain; max-height: 400px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <style>
        .image-container-small {
            width: 80%;
            max-width: 400px;
            height: auto;
            margin: 0 auto;
        }

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

        /* Red border on invalid input */
        .is-invalid {
            border-color: #dc3545 !important;
            padding-right: calc(1.5em + 0.75rem) !important;
            background-repeat: no-repeat !important;
            background-position: right calc(0.375em + 0.1875rem) center !important;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) !important;
        }
    </style>

    <div class="page-wrapper">

        <!-- Your existing form HTML unchanged -->

        <div class="form-wrapper">
            <div class="form-container">
                <h2 class="form-title text-center mb-4">Registration Form</h2>
                <form id="registrationForm" enctype="multipart/form-data" action="{{ route('frontend.register.store') }}"
                    method="POST">
                    @csrf

                    {{-- Full Name --}}
                    <div class="form-floating form-section">
                        <input class="form-control @error('name') is-invalid @enderror" id="fullName" name="name"
                            type="text" placeholder="Full Name" value="{{ old('name') }}">
                        <label for="fullName">Full Name <span class="text-danger">*</span></label>
                        @error('name')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Designation --}}
                    <div class="form-floating form-section">
                        <input class="form-control @error('desigination') is-invalid @enderror" id="designation"
                            name="desigination" type="text" placeholder="Designation" value="{{ old('desigination') }}">
                        <label for="designation">Designation/Title</label>
                        @error('desigination')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Organization --}}
                    <div class="form-floating form-section">
                        <input class="form-control @error('organization') is-invalid @enderror" id="organization"
                            name="organization" type="text" placeholder="Organization" value="{{ old('organization') }}">
                        <label for="organization">Name of Hospital/Organization</label>
                        @error('organization')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Org Type --}}
                    <div class="form-floating form-section">
                        <select class="form-select @error('org_type') is-invalid @enderror" id="orgType" name="org_type">
                            <option selected disabled>Select</option>
                            <option value="Private Hospital" {{ old('org_type') == 'Private Hospital' ? 'selected' : '' }}>
                                Private
                                Hospital
                            </option>
                            <option value="Public Hospital" {{ old('org_type') == 'Public Hospital' ? 'selected' : '' }}>
                                Public Hospital
                            </option>
                            <option value="NGO/INGO" {{ old('org_type') == 'NGO/INGO' ? 'selected' : '' }}>NGO/INGO
                            </option>
                            <option value="Academic Institution"
                                {{ old('org_type') == 'Academic Institution' ? 'selected' : '' }}>Academic
                                Institution
                            </option>
                            <option value="Government Body" {{ old('org_type') == 'Government Body' ? 'selected' : '' }}>
                                Government Body
                            </option>
                            <option value="Other" {{ old('org_type') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        <label for="orgType">Type of Organization</label>
                        @error('org_type')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Org Type Other --}}
                    <div class="form-floating form-section d-none" id="orgTypeOtherWrapper">
                        <input class="form-control @error('org_type_other') is-invalid @enderror" id="orgTypeOther"
                            name="org_type_other" type="text" placeholder="Please specify"
                            value="{{ old('org_type_other') }}">
                        <label for="orgTypeOther">Please specify</label>
                        @error('org_type_other')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Mobile --}}
                    <div class="form-floating form-section">
                        <input class="form-control @error('number') is-invalid @enderror" id="mobile" name="number"
                            type="text" placeholder="Mobile" value="{{ old('number') }}">
                        <label for="mobile">Mobile Number <span class="text-danger">*</span></label>
                        @error('number')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-floating form-section">
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                            type="email" placeholder="Email" value="{{ old('email') }}">
                        <label for="email">Email Address <span class="text-danger">*</span></label>
                        @error('email')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Province --}}
                    <div class="form-floating form-section">
                        <select class="form-select @error('province') is-invalid @enderror" id="province" name="province">
                            <option selected disabled>Select</option>
                            @foreach (['Koshi', 'Madhesh', 'Bagmati', 'Gandaki', 'Lumbini', 'Karnali', 'Sudurpashchim'] as $province)
                                <option value="{{ $province }}" {{ old('province') == $province ? 'selected' : '' }}>
                                    {{ $province }}</option>
                            @endforeach
                        </select>
                        <label for="province">Province</label>
                        @error('province')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Participation Type --}}
                    <div class="form-floating form-section">
                        <select class="form-select @error('participation') is-invalid @enderror" id="participationType"
                            name="participation">
                            <option selected disabled>Select</option>
                            @foreach (['Board Member', 'CEO/Director', 'Hospital Manager', 'Medical Superintendent', 'Quality Officer', 'Other'] as $role)
                                <option value="{{ $role }}"
                                    {{ old('participation') == $role ? 'selected' : '' }}>{{ $role }}</option>
                            @endforeach
                        </select>
                        <label for="participationType">Participation Type</label>
                        @error('participation')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Participation Other --}}
                    <div class="form-floating form-section d-none" id="participationOtherWrapper">
                        <input class="form-control @error('participation_other') is-invalid @enderror"
                            id="participationOther" name="participation_other" type="text"
                            placeholder="Please specify" value="{{ old('participation_other') }}">
                        <label for="participationOther">Please specify</label>
                        @error('participation_other')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Dietary Restriction --}}
                    <div class="form-floating form-section">
                        <input class="form-control @error('dietary_restriction') is-invalid @enderror" id="dietary"
                            name="dietary_restriction" type="text" placeholder="Dietary Restrictions"
                            value="{{ old('dietary_restriction') }}">
                        <label for="dietary">Do you have any dietary restrictions?</label>
                        @error('dietary_restriction')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Accommodation --}}
                    <div class="form-section">
                        <label class="form-label">Do you require an accommodation recommendation?</label><br>
                        @foreach (['Yes', 'No'] as $value)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('accommodation') is-invalid @enderror"
                                    id="acc{{ $value }}" type="radio" name="accommodation"
                                    value="{{ $value }}" {{ old('accommodation') == $value ? 'checked' : '' }}>
                                <label class="form-check-label" for="acc{{ $value }}">{{ $value }}</label>
                            </div>
                        @endforeach
                        @error('accommodation')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Membership --}}
                    <div class="form-section">
                        <label class="form-label">Do you have NHCMA Membership?</label><br>
                        @foreach (['Yes', 'No'] as $value)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('membership') is-invalid @enderror"
                                    id="mem{{ $value }}" type="radio" name="membership"
                                    value="{{ $value }}" {{ old('membership') == $value ? 'checked' : '' }}>
                                <label class="form-check-label" for="mem{{ $value }}">{{ $value }}</label>
                            </div>
                        @endforeach
                        @error('membership')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Membership Details --}}
                    <div class="d-none" id="membershipDetails">
                        <div class="form-floating form-section">
                            <input class="form-control @error('lifeMember_num') is-invalid @enderror" id="lifeMember"
                                name="lifeMember_num" type="text" placeholder="Life Member Number"
                                value="{{ old('lifeMember_num') }}">
                            <label for="lifeMember">Life Member Number</label>
                            @error('lifeMember_num')
                                <div class="text-danger mt-1 small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating form-section">
                            <input class="form-control @error('generalMember_num') is-invalid @enderror"
                                id="generalMember" name="generalMember_num" type="text"
                                placeholder="General Member Number" value="{{ old('generalMember_num') }}">
                            <label for="generalMember">General Member Number</label>
                            @error('generalMember_num')
                                <div class="text-danger mt-1 small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Heard From --}}
                    <div class="form-floating form-section">
                        <select class="form-select @error('hear') is-invalid @enderror" id="heardFrom" name="hear">
                            <option selected disabled>Select</option>
                            @foreach (['APHIN', 'NHCMA', 'Email Invitation', 'Social Media', 'Word of Mouth', 'Other'] as $source)
                                <option value="{{ $source }}" {{ old('hear') == $source ? 'selected' : '' }}>
                                    {{ $source }}</option>
                            @endforeach
                        </select>
                        <label for="heardFrom">How did you hear about the event?</label>
                        @error('hear')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Heard From Other --}}
                    <div class="form-floating form-section d-none" id="heardFromOtherWrapper">
                        <input class="form-control @error('hear_other') is-invalid @enderror" id="heardFromOther"
                            name="hear_other" type="text" placeholder="Please specify"
                            value="{{ old('hear_other') }}">
                        <label for="heardFromOther">Please specify</label>
                        @error('hear_other')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Remarks --}}
                    <div class="form-floating form-section">
                        <textarea class="form-control @error('remarks') is-invalid @enderror" id="remarks" name="remarks"
                            placeholder="Remarks or Questions" style="height: 100px">{{ old('remarks') }}</textarea>
                        <label for="remarks">Remarks or Questions</label>
                        @error('remarks')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Voucher --}}
                    <div class="mb-4">
                        <label class="form-label" for="voucher">Payment Voucher <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('image') is-invalid @enderror" id="voucher" name="image"
                            type="file">
                        @error('image')
                            <div class="text-danger mt-1 small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="alert d-none" id="formAlert" role="alert"></div>

                    <button class="btn btn-primary w-100" type="submit">Submit Registration</button>
                </form>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Please Confirm Your Details</h5>
                        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="confirmModalBody" style="max-height: 60vh; overflow-y:auto;">
                        <!-- Filled dynamically -->
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" id="editBtn" data-bs-dismiss="modal"
                            type="button">Edit</button>
                        <button class="btn btn-primary" id="confirmBtn" type="button">Confirm & Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS and JS (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Axios & Toastr (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Show/hide "Other" fields on select change
        document.getElementById('orgType').addEventListener('change', function() {
            document.getElementById('orgTypeOtherWrapper').classList.toggle('d-none', this.value !== 'Other');
        });
        document.getElementById('participationType').addEventListener('change', function() {
            document.getElementById('participationOtherWrapper').classList.toggle('d-none', this.value !== 'Other');
        });
        document.getElementById('heardFrom').addEventListener('change', function() {
            document.getElementById('heardFromOtherWrapper').classList.toggle('d-none', this.value !== 'Other');
        });
        // Membership radio buttons to show/hide details
        document.querySelectorAll('input[name="membership"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.getElementById('membershipDetails').classList.toggle('d-none', this.value !==
                    'Yes');
            });
        });

        let formDataGlobal = null;
        let confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

        function createRow(label, value) {
            return `
    <tr>
      <th style="width: 35%; padding: 8px; vertical-align: top; text-align: left; font-weight: 600; color:#333;">${label}</th>
      <td style="padding: 8px; vertical-align: top; text-align: left; color:#555;">${value}</td>
    </tr>
  `;
        }
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = e.target;
            formDataGlobal = new FormData(form);

            // Map input IDs to their human-readable labels
            const requiredFields = [{
                    id: 'fullName',
                    label: 'Full Name'
                },
                {
                    id: 'mobile',
                    label: 'Mobile Number'
                },
                {
                    id: 'email',
                    label: 'Email Address'
                },
                {
                    id: 'voucher',
                    label: 'Payment Voucher'
                }
            ];

            let missing = [];

            requiredFields.forEach(({
                id,
                label
            }) => {
                let el = document.getElementById(id);
                if (!el) return; // just in case element doesn't exist
                if (el.type === 'file') {
                    if (el.files.length === 0) missing.push(label);
                } else if (!el.value.trim()) {
                    missing.push(label);
                }
            });

            let alertBox = document.getElementById('formAlert');
            if (missing.length) {
                alertBox.classList.remove('d-none', 'alert-success');
                alertBox.classList.add('alert-danger');
                alertBox.innerText = 'Please fill out the required fields *: ' + missing.join(', ');
                return;
            }
            alertBox.classList.add('d-none');

            const getVal = key => formDataGlobal.get(key) || '';
            let membership = getVal('membership');
            let voucherFile = formDataGlobal.get('image');
            let voucherPreview = '';

            if (voucherFile && voucherFile.name) {
                let fileName = voucherFile.name.toLowerCase();
                if (/\.(jpg|jpeg|png|gif)$/i.test(fileName)) {
                    // Create image preview
                    let url = URL.createObjectURL(voucherFile);
                    voucherPreview =
                        `<img src="${url}" alt="Voucher Image" style="max-width: 100%; max-height: 150px; border: 1px solid #ddd; border-radius: 4px;">`;
                } else if (/\.pdf$/i.test(fileName)) {
                    voucherPreview =
                        `<a href="${URL.createObjectURL(voucherFile)}" target="_blank" rel="noopener noreferrer">View PDF Voucher</a>`;
                } else {
                    voucherPreview = `<span>${voucherFile.name}</span>`;
                }
            } else {
                voucherPreview = 'No file selected';
            }

            // Build table rows
            let rows = `
    ${createRow('Full Name', getVal('name'))}
    ${createRow('Designation', getVal('desigination'))}
    ${createRow('Organization', getVal('organization'))}
    ${createRow('Organization Type', getVal('org_type') + (getVal('org_type') === 'Other' ? ` (${getVal('org_type_other')})` : ''))}
    ${createRow('Mobile', getVal('number'))}
    ${createRow('Email', getVal('email'))}
    ${createRow('Province', getVal('province'))}
    ${createRow('Participation Type', getVal('participation') + (getVal('participation') === 'Other' ? ` (${getVal('participation_other')})` : ''))}
    ${createRow('Dietary Restrictions', getVal('dietary_restriction'))}
    ${createRow('Accommodation Required', getVal('accommodation'))}
    ${createRow('NHCMA Membership', membership)}
    ${membership === 'Yes' ? createRow('Life Member Number', getVal('lifeMember_num')) : ''}
    ${membership === 'Yes' ? createRow('General Member Number', getVal('generalMember_num')) : ''}
    ${createRow('Heard From', getVal('hear') + (getVal('hear') === 'Other' ? ` (${getVal('hear_other')})` : ''))}
    ${createRow('Remarks or Questions', getVal('remarks'))}
    ${createRow('Payment Voucher', voucherPreview)}
  `;

            document.getElementById('confirmModalBody').innerHTML = `
    <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">
      <tbody>
        ${rows}
      </tbody>
    </table>
  `;

            confirmModal.show();
        });


        document.getElementById('confirmBtn').addEventListener('click', function() {
            let form = document.getElementById('registrationForm');
            axios.post(form.action, formDataGlobal)
                .then(response => {
                    toastr.success(response.data.message || 'Registration successful!');
                    form.reset();
                    // Hide other/ membership sections after reset
                    ['orgTypeOtherWrapper', 'participationOtherWrapper', 'heardFromOtherWrapper',
                        'membershipDetails'
                    ]
                    .forEach(id => document.getElementById(id).classList.add('d-none'));
                    confirmModal.hide();
                })
                .catch(error => {
                    if (error.response && error.response.data && error.response.data.errors) {
                        Object.values(error.response.data.errors).forEach(msgs => {
                            toastr.error(msgs[0]);
                        });
                    } else {
                        toastr.error('Something went wrong! Please try again.');
                    }
                });
        });
    </script>
@endsection
