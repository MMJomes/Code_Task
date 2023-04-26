@extends('layouts.app')
@section('content')
    <div class="row page-titles">
        <div class="col-md-12">
            <h4 class="text-white">Banner Lists</h4>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('backend.dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('backend.banner.index') }}"> Banner List</a></li>
                <li class="breadcrumb-item active">Banner Lists</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="companyForm" action={{ route('backend.banner.store') }} method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div class="bg-primary" style="padding: 10px 3px 1px 10px; margin-bottom:10px;">
                                        <p>{{ $errors->first() }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <h6>Profile Photo</h6>
                        <hr>
                        <div class="media photo">
                            <div class="media-left m-r-15">
                                <img src="{{ url('/assets/images/default-user.png') }}" id="user-photo"
                                    class="rounded-circle user-photo media-object" alt="User" width="140px">
                            </div>
                            <div class="media-body">
                                <p>Upload your photo.
                                    <br> <em>Image should be at least 140px x 140px</em>
                                </p>
                                <button type="button" class="btn btn-default-dark" id="btn-upload-photo">Upload
                                    Photo</button>
                                <input type="file" name="image" value="{{ old('image') }}" id="filePhoto"
                                    class="sr-only" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group mt-5 row">
                            <label for="example-text-input" class="col-2 col-form-label">Title <span
                                    class="required">*</span></label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="title" placeholder="Please Enter Title"
                                    id="example-text-input" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group mt-5 row">
                            <label for="example-text-input" class="col-2 col-form-label">External Link</label>
                            <div class="col-10">
                                <input class="form-control" type="url" name="link"
                                    placeholder="Please Enter External Link" id="example-text-input"
                                    value="{{ old('link') }}">
                            </div>
                        </div>
                        <div class="form-group mt-5 row">
                            <label for="example-text-input" class="col-2 col-form-label">Short Text <span
                                    class="required">*</span></label>
                            <div class="col-10">
                                <textarea class="form-control" name="short_text" placeholder="Enter Your Short Text">{{ old('short_text') }}</textarea>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                            <a href="{{ route('backend.banner.index') }}" class="btn btn-danger"><i class="icon-logout"></i>
                                Back</a>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
