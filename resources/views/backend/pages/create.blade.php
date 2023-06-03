@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Create Pages</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('admin.pages.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Validation -->
        <section class="bs-validation">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="card-header">
                                    <h4 class="card-title">Enter Category Detail Here.</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias magni eius autem veniam alias, odit adipisci vitae voluptas quos fugiat eveniet, quis aliquid officia.
                                    </p>
                                    <hr />
                                    <div class="form-group mt-3 d-none" id="img-div">
                                        <img id="preview-image-before-upload" src="" width="250px" alt="your image" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">

                                <div class="card-body">
                                    <form action="{{ route('admin.pages.store') }}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')



                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Name</label>
                                            <input type="text" name="name" id="basic-addon-name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Slug</label>
                                            <input type="text" name="slug" id="basic-addon-name" class="form-control" placeholder="slug" aria-label="slug" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your Slug.</div>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="customFile1">Content</label>
                                            <textarea id="editor" class="form-control" name="content" rows="5"></textarea>
                                        </div>

                                        <div class="form-group">
                                        <label for="showon">Show On</label>
                                            <select class="form-control" id=""  name="show_on">
                                                <option value="">Select</option>
                                                {{-- <option value="Header">Header</option> --}}
                                                <option value="Footer">Footer</option>
                                                {{-- <option value="Both">Both</option>
                                                <option value="None">None</option> --}}
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label class="d-block">Status</label>
                                            <div class="custom-control custom-radio my-50">
                                                <input type="radio" id="validationRadio3" value="1" name="status" class="custom-control-input" required />
                                                <label class="custom-control-label" for="validationRadio3">Active</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="validationRadio4" value="0" name="status" class="custom-control-input" required />
                                                <label class="custom-control-label" for="validationRadio4">Inactive</label>
                                            </div>
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
        <!-- /Validation -->

    </div>
</div>

@endsection
@section('backend-script')

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>


<!-- <script type="text/javascript">
    $(document).ready(function(e) {
        $('#customFile1').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $("#img-div").removeClass('d-none');
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
    </script> -->

@endsection
