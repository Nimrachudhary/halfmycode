@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Edit Coupon</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a class="btn btn-primary waves-effect waves-float waves-light"
                            href="{{ route('admin.coupon.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Fields</h4>
                                    </div>
                                    <div class="card-body">
                                        {{-- <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias magni eius autem veniam alias, odit adipisci vitae voluptas quos fugiat eveniet, quis aliquid officia.
                                    </p> --}}
                                        <hr />
                                        <div class="form-group mt-3">
                                            {{-- <img id="preview-image-before-upload" src="{{ $category->getFirstMediaUrl('images', 'image500') }}" width="250px" alt="your image" /> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">

                                    <div class="card-body">
                                        <form action="{{ route('admin.coupon.update', $coupon) }}" class="needs-validation"
                                            method="post" novalidate enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon-name">Title</label>
                                                <input type="text" name="coupon_title" id="basic-addon-name"
                                                    value="{{ $coupon->coupon_title }}" class="form-control"
                                                    placeholder="Title" aria-label="Name"
                                                    aria-describedby="basic-addon-name" required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>


                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon-name">Coupon Code</label>
                                                <input type="text" name="coupon_code" id="basic-addon-name"
                                                    class="form-control"value="{{ $coupon->coupon_code }}"
                                                    placeholder="Coupon Code" aria-label="title"
                                                    aria-describedby="basic-addon-name" required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon-name">Affilate Link </label>
                                                <input type="text" name="Affilate_Link" id="basic-addon-name"
                                                    class="form-control"value="{{ $coupon->Affilate_Link }}"
                                                    placeholder="Affilate Link" aria-label="title"
                                                    aria-describedby="basic-addon-name" required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>

                                            <div class="form-group">
                                                <label for="customFile1">Image</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input"
                                                        id="customFile1" />
                                                    <label class="custom-file-label" for="customFile1">Choose image</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="catgory_id">Categories </label>
                                                <select class="form-control" name="catgory_id">
                                                    <option value="" hidden>Select Categories</option>
                                                    @foreach ($category as $val)
                                                        <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="store_id">Store </label>
                                                <select class="form-control" name="store_id">
                                                    <option value="" hidden>Select Store</option>
                                                    @foreach ($store as $val)
                                                        <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon-name">Expiry Date</label>
                                                <input type="date" name="expiry_date" id="basic-addon-name"
                                                    class="form-control"
                                                    value="{{ $coupon->expiry_date }}"aria-label="title"
                                                    aria-describedby="basic-addon-name" required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your Expiry Date.</div>
                                            </div>

                                            <div class="form-group">
                                                <label class="d-block" for="validationBioBootstrap">Description</label>
                                                <textarea class="form-control" name="description" id="validationBioBootstrap" rows="3" required>{{ $coupon->description }}</textarea>
                                            </div>

                                            {{-- <div class="form-group">
                                            <input type="checkbox" id="is_featured" name="is_featured" />
                                            <label for="is_featured">Featured</label><br>
                                        </div> --}}

                                            <div class="form-group">
                                                <input type="checkbox" id="deal_week" name="deal_week" />
                                                <label for="deal_week">Deals of the week</label><br>
                                            </div>

                                            <div class="form-group">
                                                <label class="d-block">Status</label>
                                                <div class="custom-control custom-radio my-50">
                                                    <input type="radio" id="validationRadio3" value="getdeal"
                                                        name="Cupon_type" class="custom-control-input" />
                                                    <label class="custom-control-label" for="validationRadio3">Get
                                                        Deal</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="validationRadio4" value="getcode"
                                                        name="Cupon_type" class="custom-control-input" />
                                                    <label class="custom-control-label" for="validationRadio4">Get
                                                        Code</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="top_voucher" value="0">
                                                <input type="checkbox"value="1" id="top_voucher"
                                                    name="top_voucher" />
                                                <label for="top_voucher">Top Vouchers</label><br>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('backend-script')
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#customFile1').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
