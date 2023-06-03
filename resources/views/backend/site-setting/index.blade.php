@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Site Setting</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a class="btn btn-success" href="{{ route('admin.sitesetting.create') }}"> Create Site Setting</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="basic-datatable p-2 ml-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mt-3">
                            <table class="table table-bordered mt-3" id="datatable-crud">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>key</th>
                                        <th>value</th>
                                        <th>category</th>
                                        <th>action</th>
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
            ajax: "{{ route('admin.sitesetting.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'key',
                    name: 'key'
                },
                {
                    data: 'value',
                    name: 'value'
                },
                {
                    data: 'category',
                    name: 'category'
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