@extends('layouts.admin.master')
@section('title', 'Media Coverages')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Media Coverages</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('admin.mediacoverages.index') }}" class="btn btn-primary"><i
                            class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.mediacoverages.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            id="" value="{{ old('title') }}" placeholder="">
                        @error('title')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Date</label>
                        <input type="text" class="form-control datepicker @error('date') is-invalid @enderror" name="date"
                            id="" value="{{ old('date') }}" placeholder="" autocomplete="off">
                        @error('date')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                            id="" value="{{ old('link') }}" placeholder="">
                        @error('link')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Description</label>
                        <textarea id="" class="form-control @error('description') is-invalid @enderror ckeditor" name="description"
                            rows="8" placeholder="">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
