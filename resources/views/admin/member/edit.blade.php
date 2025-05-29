@extends('layouts.admin.master')
@section('title', 'Members')

@section('content')
    @include('admin.includes.message')

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Member "{{ $member->name }}"</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('admin.members.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.members.update', $member->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="" type="text"
                            value="{{ old('name', $member->name) }}" name="name" placeholder="">
                        @error('name')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Type</label>
                            <select class="form-select" id="" name="type">
                                <option value="General" {{ $member->type == 'General' ? 'selected' : '' }}>General</option>
                                <option value="Lifetime" {{ $member->type == 'Lifetime' ? 'selected' : '' }}>Lifetime
                                </option>

                            </select>

                            @error('type')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Membership ID</label>
                            <input class="form-control @error('membership_id') is-invalid @enderror" id=""
                                type="text" value="{{ old('membership_id', $member->membership_id) }}"
                                name="membership_id" placeholder="">
                            @error('membership_id')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Position</label>
                            <input class="form-control @error('position') is-invalid @enderror" id=""
                                type="text" value="{{ old('position', $member->position) }}" name="position"
                                placeholder="">
                            @error('position')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="basic-default-fullname">Order</label>
                            <input class="form-control @error('order') is-invalid @enderror" id="" type="number"
                                value="{{ old('order', $member->order) }}" name="order" placeholder="" min="1">
                            @error('order')
                                <div class="invalid-feedback" style="display: block;">
                                    <i>*{{ $message }}</i>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Description</label>
                        <textarea class="form-control ckeditor @error('description') is-invalid @enderror" id="" name="description"
                            rows="8" placeholder="">{{ old('description', $member->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror image" id="" type="file"
                            name="image">
                        <img class="view-image mt-2" src="" height="60" alt="">
                        @if ($member->image)
                            <img class="mt-2 old-image" src="{{ asset('admin/images/' . $member->image) }}" width="100">
                        @endif
                        @error('image')
                            <div class="invalid-feedback" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
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
