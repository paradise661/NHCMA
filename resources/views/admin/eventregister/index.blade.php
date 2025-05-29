@extends('layouts.admin.master')
@section('title', 'EventsRegister')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Events ({{ $eventsregister->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.eventsregister.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($eventsregister->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($eventsregister as $key => $eventregister)
                            <tr>
                                <td><strong>{{ $key + $eventsregister->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('admin/images') }}/{{ $eventregister->image ?: 'avatar.png' }}">
                                        <img src="{{ asset('admin/images') }}/{{ $eventregister->image ?: 'avatar.png' }}"
                                            alt="{{ $eventregister->name }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $eventregister->name ?? '' }}</strong></td>
                                <td>{{ $eventregister->location ?? '' }}</td>
                                <td>{{ $eventregister->date ?? '' }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.eventsregister.edit', $eventregister->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form"
                                        action="{{ route('admin.eventsregister.destroy', $eventregister->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_eventregister mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $eventsregister->links() }}
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete_eventregister').click(function(e) {
            e.preventDefault();
            var form = $(this).closest("form"); // store form reference here

            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit(); // use stored form reference here
                    }
                });
        });
    </script>
@endsection
