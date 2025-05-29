@extends('layouts.admin.master')
@section('title', 'Documents')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Document "{{ $document->title }}"</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.documents.index') }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.documents.update', $document->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" id=""
                                    type="text" value="{{ old('title', $document->title) }}" name="title"
                                    placeholder="">
                                @error('title')
                                    <div class="invalid-feedback" style="display: block;">
                                        <i>*{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Order</label>
                                <input class="form-control @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $document->order) }}">
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
                                    <option {{ $document->status == 1 ? 'selected' : '' }} value="1">
                                        Published
                                    </option>
                                    <option {{ $document->status == 0 ? 'selected' : '' }} value="0">Draft
                                    </option>
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
                                <img class="view-image mt-2" src="" height="60" alt="">
                                @if ($document->file)
                                    <img class="mt-2 old-image" src="{{ asset('admin/document/' . $document->file) }}"
                                        width="100">

                                    <a href="{{ asset('admin/document/' . $document->file) }}" target="_blank">View
                                        File</a>
                                @endif
                                @error('file')
                                    <div class="invalid-feedback" style="display: block;">
                                        <i>*{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-rotate"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".image").change(function() {
            input = this;
            var nthis = $(this);

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    nthis.siblings('.old-image').hide();
                    nthis.siblings('.view-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endsection
