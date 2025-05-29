@extends('layouts.admin.master')
@section('title', 'Documents')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Document</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.documents.index') }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.documents.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" id=""
                                    type="text" name="title" value="{{ old('title') }}" placeholder="">
                                @error('title')
                                    <div class="invalid-feedback" style="display: block;">
                                        <i>*{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Order</label>
                                <input class="form-control @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order') }}">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        <i>*{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Status</label>
                                <select class="form-select @error('status') is-invalid @enderror" id=""
                                    name="status">
                                    <option value="1">Published</option>
                                    <option value="0">Draft</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback" style="display: block;">
                                        <i>*{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">File</label>
                                <input class="form-control @error('file') is-invalid @enderror image" id=""
                                    type="file" name="file">
                                <img class="view-image mt-2" src="" height="100" alt="">
                                @error('file')
                                    <div class="invalid-feedback" style="display: block;">
                                        <i>*{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $(".image").change(function() {
                input = this;
                var nthis = $(this);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        nthis.siblings('.view-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        })
    </script>
@endsection
