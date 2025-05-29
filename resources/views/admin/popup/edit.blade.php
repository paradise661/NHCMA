@extends('layouts.admin.master')

@php
    $title = 'Popups';
    $name = 'popup';
@endphp

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-capitalize">Edit {{ $name }}</h5>
            <small class="text-muted float-end">
                <a class="btn btn-sm btn-primary d-flex justify-content-between align-items-center gap-2"
                    href="{{ route('admin.' . $name . '.index') }}">
                    <i class='ri-arrow-left-line ri-lg'></i>
                    Back
                </a>
            </small>
        </div>
    </div>

    <div>
        <form action="{{ route('admin.' . $name . '.update', ${$name}->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row justify-content-center g-4">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-4 col-md-8">
                                    <label class="form-label" for="title">Title</label>
                                    <input class="form-control" id="title" type="text" name="title"
                                        placeholder="Title" value="{{ old('title', ${$name}->title) }}" />
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4 col-md-4">
                                    <label class="form-label" for="link">Link</label>
                                    <input class="form-control" id="link" type="text" name="link"
                                        placeholder="Link" value="{{ old('link', ${$name}->link) }}" />
                                    @error('link')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control ckeditor" id="description" name="description" rows="4" placeholder="Description">{{ old('description', ${$name}->description) }}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label" for="image">Image</label>
                                <input class="form-control dropify" id="image"
                                    data-default-file="{{ asset(${$name}->image) }}" type="file" name="image" />
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-4">
                                <label class="form-label" for="status">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="1" @if (old('status', ${$name}->status) == 1) selected @endif>Published
                                    </option>
                                    <option value="0" @if (old('status', ${$name}->status) == 0) selected @endif>Draft</option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="order">Order</label>
                                <input class="form-control" id="order" type="number" name="order" placeholder="1"
                                    value="{{ old('order', ${$name}->order) }}" />
                                @error('order')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button class="btn btn-sm btn-primary mt-4" type="submit">
                                <i class='bx bx-refresh'></i>
                                Update
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
