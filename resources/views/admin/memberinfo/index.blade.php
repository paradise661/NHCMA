@extends('layouts.admin.master')
@section('title', 'Member Information')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Member Information ({{ $memberinfos->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.memberinfos.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($memberinfos->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($memberinfos as $key => $member)
                            <tr>
                                <td><strong>{{ $key + $memberinfos->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('admin/images') }}/{{ $member->image ?: 'avatar.png' }}">
                                        <img src="{{ asset('admin/images') }}/{{ $member->image ?: 'avatar.png' }}"
                                            alt="{{ $member->name }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $member->title ?? '' }}</strong></td>
                                <td>{{ $member->type ?? '' }}</td>
                                <td>{{ $member->order ?? '-' }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.memberinfos.edit', $member->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form"
                                        action="{{ route('admin.memberinfos.destroy', $member->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_member_info mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $memberinfos->links() }}
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
        $('.delete_member_info').click(function(e) {
            e.preventDefault();
            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(this).closest("form").submit();
                    }
                });

        });
    </script>
@endsection
