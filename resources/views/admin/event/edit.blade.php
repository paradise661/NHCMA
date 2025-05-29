@extends('layouts.admin.master')
@section('title', 'Events')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Event "{{ $event->name }}"</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('admin.events.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.events.update', $event->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $event->name) }}" name="name" id="" placeholder="">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-fullname">Location</label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror"
                                        value="{{ old('location', $event->location) }}" name="location" id=""
                                        placeholder="">
                                    @error('location')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="basic-default-fullname">Date</label>
                                    <input type="text"
                                        class="form-control datepicker @error('date') is-invalid @enderror"
                                        value="{{ old('date', $event->date) }}" name="date" id=""
                                        placeholder="">
                                    @error('date')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="" class="form-control @error('description') is-invalid @enderror ckeditor" name="description"
                                    rows="8" placeholder="">{{ old('description', $event->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Short Description</label>
                                <textarea id="" class="form-control @error('short_description') is-invalid @enderror" name="short_description"
                                    rows="4" placeholder="">{{ old('short_description', $event->short_description) }}</textarea>
                                @error('short_description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror image"
                                    name="image" id="">
                                <img src="" height="60" alt="" class="view-image mt-2">
                                @if ($event->image)
                                    <img src="{{ asset('admin/images/' . $event->image) }}" width="100"
                                        class="mt-2 old-image">
                                @endif
                                @error('image')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-body seo my-3 shadow br-8 p-4">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Seo Title</label>
                                    <input type="text" class="form-control @error('seo_title') is-invalid @enderror"
                                        name="seo_title" id="" value="{{ old('seo_title', $event->seo_title) }}"
                                        placeholder="">
                                    @error('seo_title')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Meta Description</label>
                                    <textarea name="meta_description" id="" rows="8"
                                        class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description', $event->meta_description) }}</textarea>
                                    @error('meta_description')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Meta Keywords</label>
                                    <input type="text"
                                        class="form-control @error('meta_keywords') is-invalid @enderror"
                                        name="meta_keywords" id=""
                                        value="{{ old('meta_keywords', $event->meta_keywords) }}" placeholder="">
                                    @error('meta_keywords')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-rotate"></i> Update</button>
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
