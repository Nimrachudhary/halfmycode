@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Edit Special Event</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('admin.event.index') }}">Back</a>
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
                                    <form action="{{ route('admin.event.update', $event) }}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Name</label>
                                            <input type="text" name="name" id="basic-addon-name" value="{{ $event->name }}" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name"  />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Title</label>
                                            <input type="text" name="title" id="basic-addon-name" value="{{ $event->title }}" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon-name"  />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="customFile1">Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="customFile1"  />
                                                <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="d-block" for="validationBioBootstrap">Description</label>
                                            <textarea class="form-control" name="description" id="validationBioBootstrap" rows="3" >{{ $event->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="is_featured"  name="is_featured" value="1" {{  ($event->is_featured == 1 ? ' checked' : '') }} />
                                            <label for="is_featured">Featured</label><br>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="d-block">Status</label>
                                            <div class="custom-control custom-radio my-50">
                                                <input type="radio" id="validationRadio3" value="1" {{ $category->status == 1 ? 'checked' : '' }}  name="status" class="custom-control-input"  />
                                                <label class="custom-control-label" for="validationRadio3">Active</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="validationRadio4" value="0" {{ $category->status == 0 ? 'checked' : '' }}  name="status" class="custom-control-input" required />
                                                <label class="custom-control-label" for="validationRadio4">Inactive</label>
                                            </div>
                                        </div> --}}
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
