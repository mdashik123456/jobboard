@extends('layouts.app')

@section('main-section')
    <!-- HOME -->
    <link rel="stylesheet" href="{{ asset('assets/css/choose_radioButton_oprions.css') }}"> {{-- css for selection cart --}}
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('assets/images/hero_1.jpg') }} );" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Registration for hire</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ url('/') }}">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Register</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <form action="#" class="p-4 border rounded"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Company Name</label>
                                <input required type="text" id="company_name" class="form-control" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Email</label>
                                <input required type="text" id="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Password</label>
                                <input required type="password" id="pass" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Re-Type Password</label>
                                <input required type="password" id="retype_pass" class="form-control" placeholder="Re-type Password">
                                <span id="password_not_matched"></span>
                                <script src="{{ asset('assets/js/password_not_matched.js') }}"></script>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Company Logo</label>
                                <input required type="file" id="logo" class="form-control" placeholder="Re-type Password">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" id="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
