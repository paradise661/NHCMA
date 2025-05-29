@extends('layouts.admin.master')
@section('title', 'Inquiry')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Resgister</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.register.index') }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                            <td>Event Name</td>
                            <td>{{ $register->event }}</td>

                        </tr> --}}

                        <tr>
                            <td>Name</td>
                            <td>{{ $register->name }}</td>

                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $register->number }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $register->email }}</td>
                        </tr>
                        @if (!empty($register->desigination))
                            <tr>
                                <td>Designation/Title</td>
                                <td>{!! $register->desigination !!}</td>
                            </tr>
                        @endif

                        @if (!empty($register->organization))
                            <tr>
                                <td>Name of Hospital/Organization</td>
                                <td>{!! $register->organization !!}</td>
                            </tr>
                        @endif
                        @if (!empty($register->provience))
                            <tr>
                                <td>Provience</td>
                                <td>{!! $register->provience !!}</td>
                            </tr>
                        @endif
                        {{-- <tr>
                            <td>University</td>
                            <td>{{ $register->university }}</td>

                        </tr> --}}
                        <tr>
                            <td>Dietary Restriction</td>
                            <td>{{ $register->dietary_restriction }}</td>

                        </tr>
                        <tr>
                            <td>Accommodation Recommendation</td>
                            <td>{{ $register->accommodation }}</td>

                        </tr>
                        <tr>
                            <td>Have Membership</td>
                            <td>{{ $register->membership }}</td>

                        </tr>
                        <tr>
                            <td>Membership Number</td>
                            <td>{{ $register->member_num }}</td>

                        </tr>
                        <tr>
                            <td>Life Member Number</td>
                            <td>{{ $register->lifeMember_num }}</td>

                        </tr>
                        <tr>
                            <td>General Member Number</td>
                            <td>{{ $register->generalMember_num }}</td>

                        </tr>
                        <tr>
                            <td>Remarks</td>
                            <td>{{ $register->remarks }}</td>

                        </tr>
                        <tr>
                            <td>Payment Voucher</td>
                            <td>
                                @if ($register->image)
                                    <!-- Thumbnail -->
                                    <img data-bs-toggle="modal" data-bs-target="#voucherModal"
                                        src="{{ asset($register->image) }}" alt="Payment Voucher"
                                        style="max-width: 150px; max-height: 150px; cursor: pointer;">
                                @else
                                    No image uploaded.
                                @endif
                            </td>
                        </tr>

                        <!-- Bootstrap Modal -->
                        @if ($register->image)
                            <div class="modal fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <img class="img-fluid w-100" src="{{ asset($register->image) }}"
                                                alt="Payment Voucher Full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <tr>
                            <td>Time</td>
                            <td>{{ $register->created_at->diffForHumans() }}</td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
