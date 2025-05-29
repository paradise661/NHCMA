@extends('layouts.admin.master')
@section('title', 'Configures')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Configures</h5>
        </div>

        <div class="table-responsive text-nowrap">
            @if (!$configures->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($configures as $key => $configure)
                            <tr>
                                <td><strong>{{ $configure->email ?? '' }}</strong></td>
                                <td>{{ $configure->phone ?? '' }}</td>
                                <td>{{ $configure->location ?? '' }}</td>
                                <td>
                                    <a href="{{ route('admin.configures.edit', $configure->id) }}" style="float: left;margin-right: 5px;"
                                        class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection
