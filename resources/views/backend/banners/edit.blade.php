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
                <li class="breadcrumb-item active">Banner Edit</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="companyForm" action="{{ route('backend.banner.update', [$banner->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                <label for="example-text-input" class="col-2 col-form-label">Image <span class="required">*</span></label>
                                <div class="col-10">
                                    <input type="file" data-default-file="{{ url($banner->image) }}" id="input-file-now"
                                        data-name="image_cropper_picker" accept="image/*" class="dropify" />
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Title <span class="required">*</span></label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="title"
                                        placeholder="Please Enter Title" id="example-text-input"
                                        value="{{ old('title', $banner->title) }}">
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
                                <label for="example-text-input" class="col-2 col-form-label">Short Text <span class="required">*</span></label>
                                <div class="col-10">
                                    <textarea class="summernote" name="short_text" placeholder="Enter Your Short Text">{{ old('short_text', $banner->short_text) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label">Status</label>
                                <div class="col-10">
                                    <div class="toggle-class_true checked custom-control custom-switch"><input
                                            type="checkbox" name="status" class="custom-control-input" id="status"
                                            {{ $banner->status == ON ? 'checked' : '' }}><label class="custom-control-label"
                                            for="status"></label></div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                                <a href="{{ route('backend.banner.index') }}" class="btn btn-danger"><i
                                        class="icon-logout"></i> Back</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cropper-modal" data-backdrop="static">
        <div class="modal-dialog">
            <div style="pointer-events: auto;">
                <div style="width: 230px;" class="bg-white p-3 m-3 rounded">
                    <div>
                        <img src="" id="image" alt="Image Crop">
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn btn-secondary" id="close">Close</button>
                        <button type="button" class="btn btn-success" id="image_cropper_save">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var $image = $('#image');
        $(document).ready(function() {
            $image.on({
                'crop.cropper': function(e) {
                    let image_height = parseInt(e.height);
                    let image_width = parseInt(e.width);
                    $("#image_height").text("height=" + image_height);
                    $("#image_width").text("width=" + image_width);
                },
            });
            $("#close").on("click", function() {
                $("#cropper-modal").modal("hide");
            });

            $("#companyForm").on("submit", function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('logos', window.cropped_image_file);
                formData.append('_method', 'PUT');

                console.log(formData);
                $.ajax({
                    url: "{{ route('backend.banner.update', $banner->id) }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $(this).prop('disabled', true);
                    },
                    complete: function() {
                        $(this).prop('disabled', false);
                    },
                    success: function(response) {
                       new swal({
                                title: "Success!",
                                text: response.message,
                                type: "success",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    window.location.href =
                                        "{{ route('backend.banner.index') }}";
                                }
                            }).then(function() {
                            window.location.href =
                            "{{ route('backend.banner.index') }}";
                        });
                    },
                    error: function(data) {
                        let errors = data.responseJSON.errors;
                        // show swal error message from {"message" : "", errors: { "key" : [ "error message" ] } }
                        if (errors) {
                            let firstErrorMsg = errors[Object.keys(errors)[0]][0];
                           new swal({
                                title: "Error!",
                                type: "error",
                                text: firstErrorMsg,
                                confirmButtonClass: "btn-danger"
                            });
                        }
                    }
                });
            })
        });
    </script>
@endpush
