@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <form class="col-sm-6" enctype="multipart/form-data" action="{{ url('/admin/showstorecoupon') }}" method="get"
                name="add_coupon" id="add_coupon"> {{ csrf_field() }}
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonlist">
                                <a class="btn btn-primary " href="{{ url('/viewcategories') }}">
                                    <i class="fa fa-eye"></i> Sort Store Coupons </a>
                            </div>
                            {{-- <div class="form-group">
                       <label>Stores</label> --}}
                            <div class="form-group">
                                <label class="control-label" for="store_id">Stores</label>
                                <div class="mb-2">
                                    <select name="store_id" id="parent_id" class="form-control">
                                        <option value="" hidden>Select stores</option>
                                        @foreach ($coup as $val)
                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                        @endforeach

                                        {{-- <option>red</option>
                              <option>blue</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="reset-button">
                                <input type="submit" class="btn btn-success" value="Submit"
                                    href="{{ url('/couponstores') }}">
                            </div>
                        </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection
