@extends('layouts.admin.master')
@section('title', 'Image Configures')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Image Configures "{{ $imageconfigure->title }}"</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('admin.imageconfigures.index') }}" class="btn btn-primary"><i
                            class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.imageconfigures.update', $imageconfigure->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $imageconfigure->title) }}" name="title" id="" placeholder="" readonly>
                        @error('title')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Description</label>
                        <textarea id="" class="form-control ckeditor @error('description') is-invalid @enderror" name="description"
                            rows="8" placeholder="">{{ old('description', $imageconfigure->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror image" name="image"
                            id="">
                        <img src="" height="60" alt="" class="view-image mt-2">
                        @if ($imageconfigure->image)
                            <img src="{{ asset('admin/images/' . $imageconfigure->image) }}" width="100" class="mt-2 old-image">
                        @endif
                        @error('image')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
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
