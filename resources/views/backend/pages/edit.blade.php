@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Edit Page</h2>
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
                                    <h4 class="card-title">Update Page Details</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias magni eius autem veniam alias, odit adipisci vitae voluptas quos fugiat eveniet, quis aliquid officia.
                                    </p>
                                    <hr />


                                </div>
                            </div>
                            <div class="col-md-8 col-12">

                                <div class="card-body">
                                    <form action="{{ route('admin.pages.update',$page) }}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Name</label>
                                            <input type="text" name="name" id="basic-addon-name" value="{{ $page->name }}" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name"  />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>


                                        <div class="form-group">
                                            <label for="customFile1">Content</label>
                                            <textarea id="editor" class="form-control" name="content" rows="5">{{ $page->content }}</textarea>
                                        </div>

                                        <div class="form-group">
                                        <label for="showon">Show On</label>
                                            <select class="form-control" name="show_on">
                                                <!-- <option value="">Select</option> -->
                                                {{-- <option value="Header">Header</option> --}}
                                                <option value="Footer">Footer</option>
                                                {{-- <option value="Both">Both</option>
                                                <option value="None">None</option> --}}
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="d-block">Status</label>
                                        <div class="custom-control custom-radio my-50">
                                            <input type="radio" id="validationRadio3" value="1" {{ $page->status == 1 ? 'checked' : '' }} name="status" class="custom-control-input"  />
                                            <label class="custom-control-label" for="validationRadio3">Active</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="validationRadio4" value="0" name="status" {{ $page->status == 0 ? 'checked' : '' }} class="custom-control-input"  />
                                            <label class="custom-control-label" for="validationRadio4">Inactive</label>
                                        </div>
                                    </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Update</button>
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


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
