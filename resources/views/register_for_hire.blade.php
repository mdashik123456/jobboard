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

                    {{-- alert --}}
                    @if (session()->has('create_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('create_success') }}
                        </div>
                    @endif

                    <form action="{{ url('/register-hire') }}" class="p-4 border rounded" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Company Name</label>
                                <input  name="company_name" type="text" id="company_name" class="form-control"
                                    placeholder="Company Name">
                                @error('company_name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Email</label>
                                <input  type="text" name="email" id="email" class="form-control"
                                placeholder="Email address">
                                @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Password</label>
                                <input  type="password" name="pass" id="pass" class="form-control" placeholder="Password">

                                <span class="text-danger"></span>

                                @error('pass')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Re-Type Password</label>
                                <input  type="password" name="retype_pass" id="retype_pass" class="form-control"
                                placeholder="Re-type Password">
                                <span id="password_not_matched"></span>
                                <script src="{{ asset('assets/js/password_not_matched.js') }}"></script>
                                @error('retype_pass')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black">Company Logo</label>
                                <input  type="file" name="logo" id="logo" class="form-control">
                                @error('logo')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" name="submit" id="submit" value="Sign Up"
                                    class="btn px-4 btn-primary text-white">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
