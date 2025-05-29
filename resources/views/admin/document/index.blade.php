@extends('layouts.admin.master')
@section('title', 'Documents')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Documents ({{ $documents->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.documents.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($documents->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>File</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Order</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($documents as $key => $document)
                            @php
                                $file_path = asset('admin/document/' . $document->file);
                                $ext = pathinfo($file_path, PATHINFO_EXTENSION);
                            @endphp
                            <tr>
                                <td><strong>{{ $key + $documents->firstItem() }}</strong></td>
                                <td class="">
                                    <a class="fancybox" data-fancybox="demo"
                                        href="{{ asset('admin/document/') }}/{{ $document->file ?: 'avatar.png' }}">

                                        @if ($ext == 'jpeg' || $ext == 'jpg' || $ext == 'png' || $ext == 'webp')
                                            <img src="{{ asset('admin/document/') }}/{{ $document->file ?: 'avatar.png' }}"
                                                alt="{{ $document->title }}" width="80px">
                                        @else
                                            <img src="{{ asset('admin/images/file.png') }}" alt="{{ $document->title }}"
                                                width="80px">
                                        @endif
                                    </a>
                                </td>
                                <td><strong>{{ $document->title ?? '' }}</strong></td>
                                <td><span
                                        class="badge {{ $document->status == 0 ? 'bg-label-danger' : 'bg-label-success' }}">{{ $document->status == 0 ? 'Draft' : 'Published' }}</span>
                                </td>
                                <td>{{ $document->order ?? '' }}</td>

                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.documents.edit', $document->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form"
                                        action="{{ route('admin.documents.destroy', $document->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_document mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $documents->links() }}
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
        $('.delete_document').click(function(e) {
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
