@extends('layouts.app')
@section('content')
    <div class="row page-titles">
        <div class="col-md-12">
            <h4 class="text-white">Banner Lists </h4>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('backend.dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Banner List</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="bg-primary" style="padding: 10px 3px 1px 10px; margin-bottom:10px;">
                            <p>{{ $errors->first() }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    <div class="table-responsive m-t-40">
                        <table id="dataTable" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%" id="existingRulesDataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <input type="checkbox" id="select-all" class="select-checkbox">
                                    </th>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Short Text</th>
                                    <th>Link</th>
                                    @canany(['banner.edit', 'banner.delete'])

                                    <th>Status</th>
                                        <th>Actions</th>
                                    @endcanany
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
@endsection

@section('delete_route')
    {{ route('backend.banner.destroy', 'id') }}
@endsection
@section('approve_route')
    {{ route('backend.banner.destroy', 'id') }}
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            var existingRuleTable;
            @can('banner.mass_destroy')
                window.route_mass_crud_entries_destroy = "{{ route('backend.banner.mass.destroy') }}";
            @endcan
            @can('banner.show')
                window.route_mass_crud_entries_show = "{{ route('backend.banner.show') }}";
            @endcan
            $.ajax({
                url: "{{ route('backend.banner.index') }}",
                cache: false,
            }).then(function(data, textStatus, jqXHR) {
                var response = JSON.parse(data);
                $('#dataTable').DataTable({
                    data: response["data"],
                    dom: 'Bfrtip',
                    buttons: [
                        @can('banner.create')
                            {
                                text: 'Create New',
                                className: "btn btn-primary",
                                action: function(e, dt, node, config) {
                                    window.location.href =
                                        '{{ route('backend.banner.create') }}';
                                }
                            },
                        @endcan
                        'copy', 'csv', 'excel', 'pdf', 'print', {
                            text: 'Delete Selected',
                            className: "btn btn-primary",
                            action: function(e, dt, node, config) {
                                deleteSelected();
                            }
                        },
                    ],
                    columns: [{
                            className: 'select-checkbox text-center',

                            orderable: false,
                            "render": function(data, type, full, meta) {
                                var id = full.id;
                                return '<input type="checkbox" class="checkbox-tick" data-entry-id=' +
                                    id + '>';
                            },
                        },
                        {
                            "render": function(data, type, full, meta) {
                                return meta.row + 1;
                            },
                        },
                        {
                            data: 'image',
                            name: 'image',
                            defaultContent: '-',
                            render: function(data) {
                                return '<img src="' + data + '" width="50" height="50">';
                            },
                        },
                        {
                            data: 'title',
                            defaultContent: '-',
                            render: function(data) {
                            return `<div style="width: 250px;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">${data}</div>`;
                        }
                        },
                        {
                            data: 'short_text',
                            defaultContent: '-',
                            render: function(data) {
                            return `<div style="width: 250px;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">${data}</div>`;
                        }
                        },
                        {
                            data: 'link',
                            defaultContent: '-',
                            render: function(data) {
                            return `<div style="width: 250px;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">${data}</div>`;
                        }
                        },

                        @canany(['banner.edit', 'banner.delete', 'banner.show'])
                        {
                            orderable: false,
                            "render": function(data, type, full, meta) {
                                var editButton = '';
                                if (response["can_edit"]) {
                                    if (full.status == 'on') {
                                        editButton =
                                            '<div class="toggle-class_true checked custom-control custom-switch"  data-id= "' +
                                            full.id +
                                            '"  ><input type="checkbox" checked  class="custom-control-input" id="' +
                                            full.id +
                                            '"><label class="custom-control-label" for="' +
                                            full.id + '" ></label></div>';
                                    } else {
                                        editButton =
                                            '<div class="toggle-class_false custom-control custom-switch" data-id= "' +
                                            full.id +
                                            '"><input type="checkbox" class="custom-control-input" id="' +
                                            full.id +
                                            '" data-id="' + full.id +
                                            '"><label class="custom-control-label" for="' +
                                            full.id + '" ></label></div>';
                                    }
                                }
                                return editButton;
                            }
                        },
                            {
                                orderable: false,
                                "render": function(data, type, full, meta) {
                                    var editURL =
                                        "{{ route('backend.banner.edit', ':id') }}";
                                    editURL = editURL.replace(':id', full.id);

                                    var showURL =
                                        "{{ route('backend.banner.show', ':id') }}";
                                    showURL = showURL.replace(':id', full.id);

                                    var editButton = '';
                                    var showButton = '';
                                    var deleteButton = '';
                                    var approveButton = '';
                                    if (response["can_edit"]) {
                                        editButton = '<a href="' + editURL +
                                            '" class="btn btn-info btn-sm mx-2"><i class="fa fa-edit"></i></a>';
                                    }
                                    if (response["can_show"]) {
                                        showButton = '<a href="' + showURL +
                                            '" class="btn btn-primary btn-sm mx-2"><i class="fa fa-info-circle"></i></a>';
                                    }
                                    if (response["can_delete"]) {
                                        deleteButton =
                                            '<a class="btn btn-danger btn-sm delete-btn" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal" data-id="' +
                                            full.id +
                                            '" data-container="body" data-togglePopover="popover" data-trigger="hover" data-placement="top" data-content="Delete" data-original-title="" title=""><i class="fa fa-trash"></i></a></form>';
                                    }
                                    return editButton + showButton + deleteButton;
                                }
                            },
                        @endcanany
                    ],
                });
                $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel')
                    .addClass(
                        'btn btn-primary mr-1');
                        $(function() {
                    $('.toggle-class_true').change(function() {
                        var myi = $(this).data('id');
                        var approveURL =
                            "{{ route('backend.banner.approve', ':id') }}";
                        approveURL = approveURL.replace(':id', myi);
                        $.ajax({
                            url: approveURL,
                            id: myi,
                            type: 'GET',
                            processData: false,

                        });
                    });
                    $('.toggle-class_false').change(function() {
                        var myi = $(this).data('id');
                        var approveURL =
                            "{{ route('backend.banner.approve', ':id') }}";
                        approveURL = approveURL.replace(':id', myi);
                        $.ajax({
                            url: approveURL,
                            id: myi,
                            type: 'GET',
                            processData: false,

                        });
                    });
                });
            });
        });
    </script>
@endpush
