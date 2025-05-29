@extends('layouts.admin.master')
@section('title', 'Applicants | Lists')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <livewire:filter-applicant />
    </div>
@endsection

@section('scripts')
    <script>
        $('.delete_applicant').click(function(e) {
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
