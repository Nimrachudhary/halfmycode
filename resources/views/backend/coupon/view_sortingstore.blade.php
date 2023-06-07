@extends('layouts.app')
@section('content')

    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            .parent-ul,
            .taxonomies-child-ul {
                list-style-type: none
            }

            .parent-ul {
                padding-left: 15px
            }

            .taxonomies-child-ul {
                padding-left: 20px
            }

            #sortable {
                list-style: none;
                padding: 0px
            }

            #sortable li {

                margin-top: 5px;
                padding: 5px 5px 5px 5px;
                cursor: all-scroll;
            }
        </style>
    </head>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">

            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">
                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="header-icon">
                                    {{-- <i class="fa fa-product-hunt"></i> --}}
                                </div>
                                <div class="header-title">
                                    <h1>Sorting stores</h1>
                                    {{-- <small>Add Category</small> --}}
                                </div>
                            </section>
                            @if (Session::has('flash_message_error'))
                                <div class="alert alert-sm alert-danger alert-block" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                                </div>
                            @endif

                            @if (Session::has('flash_message_success'))
                                <div class="alert alert-sm alert-success alert-block" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                                </div>
                            @endif
                            <!-- Main content -->
                            <section class="content">
                                <div class="row">
                                    <!-- Form controls -->
                                    <div class="box-body">
                                        <ul id="sortable">
                                            @foreach ($products as $product)
                                                <li class="ui-state-default grabbable" data-id="{{ $product->id }}">
                                                    <span class="ui-icon ui-icon-arrowthick-2-n-s">
                                                        {{ $product->coupon_title }}</span>
                                                    <span class="SortingCoupType pull-right">{{ $product->coupon_title }}----
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </section>
                </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('backend-script')
    <!-- /.content-wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#sortable").sortable();
        });
    </script>
        <script>
            $(document).ready(function() {
                $("#sortable").sortable({
                    update: function(event, ui) {
                        var ids = $('.grabbable').map(function() {
                            return $(this).attr('data-id');
                        }).get();
                        console.log(ids);
                        $.ajax({
                            url: "/admin/admin/coupons/sorting",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "ids": ids,
                            },
                            error: function() {
                                console.log("AJAX Request Error");
                            }
                        });

                    }

                });

            });
        </script>
        <script>
            $("ui-state-default").click(function() {

                var inputs = $(".ui-state-default");
                for (var i = 0; i < inputs.length; i++) {
                    alert($(inputs[i]).attr('data-id'));
                }
            });
        </script>
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection
