@extends('layouts.admin.master')
@section('title', 'Links')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Link</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.links.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.links.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="" type="text"
                            name="title" value="{{ old('title') }}" placeholder="">
                        @error('title')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Link</label>
                        <input class="form-control @error('link') is-invalid @enderror" id="" type="text"
                            name="link" value="{{ old('link') }}" placeholder="">
                        @error('link')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Order</label>
                        <input class="form-control  @error('order') is-invalid @enderror" id="" type="number"
                            name="order" value="{{ old('order') }}" placeholder="" autocomplete="off" min="1">
                        @error('order')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="" name="status">
                            <option value="1">Published</option>
                            <option value="0">Draft</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback" style="display: block;">
                                <i>*{{ $message }}</i>
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
