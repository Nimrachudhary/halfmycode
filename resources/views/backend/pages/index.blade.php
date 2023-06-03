@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Pages</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a class="btn btn-success" href="{{ route('admin.pages.create') }}">Create Pages</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic table -->
        <section id="basic-datatable p-2 ml-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mt-3">
                            <table class="table table-bordered mt-3" id="datatable-crud">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <!-- <th>Content</th> -->
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
@section('backend-script')
<script>
$(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#datatable-crud').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.pages.index') }}",
            columns: [
                    // {
                    //     data: 'logo',
                    //     name: 'logo',
                    //     "render": function (data, type, full, meta) {
                    //         return "<img src=\"storage/" + data + "\" height=\"50\"/>";
                    //     },
                    // },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    // {
                    //     data: 'content',
                    //     name: 'content'
                    // },
                    // {
                    //     data: 'show_on',
                    //     name: 'show_on'
                    // },
                    {
                        data: 'status',
                        render: function(data) {
                        if (data == true) {
                            return '<span class="badge badge-success text-center">Active</span>';
                        } else {
                            return '<span class="badge badge-danger  text-center">Inactive</span>';
                        }
                    },
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },
                ],
            order: [
                [0, 'desc']
            ]
        });
    });
</script>
@endsection
