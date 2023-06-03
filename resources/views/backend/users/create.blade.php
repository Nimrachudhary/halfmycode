@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Create User</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a class="btn btn-primary waves-effect waves-float waves-light"
                            href="{{ route('admin.users.index') }}">Back</a>
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
                                        <h4 class="card-title">Enter User Detail Here.</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias magni eius
                                            autem veniam alias, odit adipisci vitae voluptas quos fugiat eveniet, quis
                                            aliquid officia.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">

                                    <div class="card-body">
                                        <form action="{{ route('admin.users.store') }}" class="needs-validation"
                                            method="post" novalidate enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-addon-name">Name</label>
                                                        <input type="text" name="name" id="basic-addon-name"
                                                            class="form-control" placeholder="Name" aria-label="Name"
                                                            aria-describedby="basic-addon-name" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter your name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-addon-name">Email</label>
                                                        <input type="email" name="email" id="basic-addon-name"
                                                            class="form-control" placeholder="Email" aria-label="Email"
                                                            aria-describedby="basic-addon-name" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter your email.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon-name">Password</label>

                                                <input type="password" name="password" id="basic-addon-name"
                                                    class="form-control" placeholder="Password" aria-label="Password"
                                                    aria-describedby="basic-addon-name" required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your password.</div>
                                            </div>
                                            {{-- <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Confirm Password</label>

                                            <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter confirm password.</div>
                                        </div> --}}

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
@endsection
