@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Stores</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a class="btn btn-success" href="{{ route('admin.stores.create') }}"> Create Store</a>
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
                                            {{-- <th>Title</th> --}}
                                            <th>Affilite link</th>
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
                ajax: "{{ route('admin.stores.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    // {
                    //     data: 'title',
                    //     name: 'title'
                    // },
                    {
                        data: 'affilite_link',
                        name: 'affilite_link'
                    },
                    {
                        data: 'status',
                        render: function(data, type, row, meta) {
                            var value = (row['status'] == '1') ? "checked" : '';
                            return '<div class="pretty p-switch p-fill"><input type="checkbox" data-id=' +
                                row['id'] + ' class="activeToggle" id="user_id" ' + value +'><div class="state p-success"><label>Active</label></div></div>';
                        }
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
    <script>
        $(document).ready(function() {
            $(document).on('click', '.activeToggle', function(e) {
                // alert('dsds');
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changestoreactive',
                    data: {
                        'user_id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            });
        });
    </script>
@endsection
