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
            <li class="breadcrumb-item active">Banner Detail</li>
        </ol>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div class="bg-primary" style="padding: 10px 3px 1px 10px; margin-bottom:10px;">
                                        <p>{{ $errors->first() }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="body mt-5">
                            <h6>Basic Information</h6>
                            <hr>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Image</label>
                                <div class="col-10">
                                <img src="{{ url($banner->image ?? '/assets/images/default-user.png') }}" id="user-photo"
                                class=" user-photo media-object" alt="User" width="140px">
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="title" placeholder="Please Enter Title"
                                        id="example-text-input" value="{{old('title', $banner->title) }}">
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">External Link</label>
                                <div class="col-10">
                                    <input class="form-control" type="url" name="link"
                                        placeholder="Please Enter External Link" value="{{ old('link', $banner->link) }}">
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Short Text</label>
                                <div class="col-10">
                                    <textarea class="summernote" name="short_text" placeholder="Enter Your Short Text">{{ old('short_text',$banner->short_text) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Link</label>
                                <div class="col-10">
                                    <textarea class="summernote" name="link" placeholder="Enter Your Link">{{ old('link',$banner->link) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Status</label>
                                <div class="col-10">
                                    <div class="toggle-class_true checked custom-control custom-switch"><input
                                            type="checkbox" name="status" class="custom-control-input" id="status"
                                            {{ $banner->status == ON ? 'checked' : '' }}><label
                                            class="custom-control-label" for="status"></label></div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <a href="{{ route('backend.banner.index') }}" class="btn btn-danger"><i
                                        class="icon-logout"></i> Back</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
