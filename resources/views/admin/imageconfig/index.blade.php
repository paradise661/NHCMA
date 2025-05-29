@extends('layouts.admin.master')
@section('title', 'Image Configures')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Image Configures ({{ $imageconfigures->total() }})</h5>
            <small class="text-muted float-end">
                {{-- <a href="{{ route('admin.imageconfigures.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>
                    Create</a> --}}
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if (!$imageconfigures->isEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($imageconfigures as $key => $configure)
                            <tr>
                                <td><strong>{{ $key + $imageconfigures->firstItem() }}</strong></td>
                                <td class="">
                                    <a href="{{ asset('admin/images') }}/{{ $configure->image ?: 'avatar.png' }}"
                                        data-fancybox="demo" class="fancybox">
                                        <img src="{{ asset('admin/images') }}/{{ $configure->image ?: 'avatar.png' }}"
                                            alt="{{ $configure->title }}" width="80px">
                                    </a>
                                </td>
                                <td><strong>{{ $configure->title ?? '' }}</strong></td>
                                <td>{{ $configure->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('admin.imageconfigures.edit', $configure->id) }}"
                                        style="float: left;margin-right: 5px;" class="btn btn-sm btn-primary"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>


                                    {{-- <form class="delete-form"
                                        action="{{ route('admin.imageconfigures.destroy', $configure->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger delete_image_configure mr-2"
                                            id="" title="Delete" data-type="confirm"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $imageconfigures->links() }}
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
        $('.delete_image_configure').click(function(e) {
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
