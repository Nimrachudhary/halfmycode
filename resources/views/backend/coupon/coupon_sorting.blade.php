@extends('layouts.app')
@section('content')
    <!-- begin app-main -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            {{-- <h1>Validation</h1> --}}
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <nav>

                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- start Validation row -->
            <div class="row formavlidation-wrapper">
                <div class="col-xl-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <div class="card-heading">
                                <h4 class="card-title">Coupon</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <section class="content">
                                <div class="row">
                                    <!-- Form controls -->
                                    <div class="col-sm-12">
                                        <div class="panel panel-bd lobidrag">
                                            <div class="panel-heading">
                                                <div class="btn-group" id="buttonlist">
                                                    <a class="btn btn-primary " href="{{ url('admin/storecoupon') }}">
                                                        <i class="fa fa-eye"></i> Sort Store Coupons </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>

            </div>
            <!-- end Validation row  -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
    </div>
    <!-- end app-container -->

<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection
