@extends('layouts.admin.master')
@section('title', 'Media Coverages')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Media Coverages ({{ $mediacoverages->total() }})</h5>
            <small class="text-muted float-end">
                <a class="btn btn-primary" href="{{ route('admin.mediacoverages.create') }}"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap">
            @if ($mediacoverages->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($mediacoverages as $key => $mediacoverage)
                            <tr>
                                <td><strong>{{ $key + $mediacoverages->firstItem() }}</strong></td>
                                <td><strong>{{ $mediacoverage->title ?? '' }}</strong></td>
                                <td>{{ $mediacoverage->date ?? '' }}</td>
                                <td>{{ $mediacoverage->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('admin.mediacoverages.edit', $mediacoverage->id) }}"
                                        style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>

                                    <form class="delete-form"
                                        action="{{ route('admin.mediacoverages.destroy', $mediacoverage->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete_mediacoverage mr-2" id=""
                                            data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $mediacoverages->links() }}
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
        $('.delete_mediacoverage').click(function(e) {
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
