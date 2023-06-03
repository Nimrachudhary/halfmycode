@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Edit Store</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('admin.stores.index') }}">Back</a>
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
                                        <img id="preview-image-before-upload" src="{{ asset('images') . '/' . $store->image }}" width="250px" alt="your image" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">

                                <div class="card-body">
                                    <form action="{{ route('admin.stores.update', $store) }}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Name</label>
                                            <input type="text" name="name" id="basic-addon-name" value="{{ $store->name }}" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name"  />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>

                                        {{-- <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Title</label>
                                            <input type="text" name="title" id="basic-addon-name" value="{{ $store->title }}" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon-name"  />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="customFile1">Logo</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="customFile1"  />
                                                <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="customFile1">logo</label>
                                            <div class="custom-file">
                                                <input type="file" name="logo" class="custom-file-input" id="customFile1"  />
                                                <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Affilite Link</label>
                                            <input type="text" name="affilite_link" id="basic-addon-name" value="{{ $store->affilite_link }}" class="form-control" placeholder="Affilite Link" aria-label="title" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block" for="validationBioBootstrap">Description</label>
                                            <textarea class="form-control ckeditor" name="description" id="validationBioBootstrap" rows="3" >{{ $store->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="is_featured"  name="recently_update" value="1" {{  ($store->recently_update == 1 ? ' checked' : '') }} />
                                            <label for="is_featured">Popular brands</label><br>
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
<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
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
