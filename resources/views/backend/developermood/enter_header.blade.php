@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Create Blog</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('admin.blog.index') }}">Back</a>
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
                                <h4 class="card-title">Enter Blog Detail Here.</h4>
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
                                <form action="{{ route('admin.herder.store') }}" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label class="d-block" for="">Header</label>
                                        <textarea class="form-control" name="header_description" id="header_description" rows="3" required>
                                            @if (count($header)>0)
                                            {{$header[0]->header_description}}
                                             @endif
                                        </textarea>
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
<script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
@endsection

