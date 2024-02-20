@extends('layouts.app')

@section('main-section')
    <!-- HOME -->
    <link rel="stylesheet" href="{{ asset('assets/css/choose_radioButton_oprions.css') }}"> {{-- css for selection cart --}}
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('assets/images/hero_1.jpg') }} );" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Registration for find Jobs</h1>
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
                    <form action="#" class="p-4 border rounded">

                        {{-- selection cart
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Registration</h5>
                                            <p class="card-text">Choose an option:</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="registrationOption"
                                                    id="hireRadio" value="hire">
                                                <label class="form-check-label" for="hireRadio">
                                                    I want to hire
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="registrationOption"
                                                    id="jobRadio" value="job">
                                                <label class="form-check-label" for="jobRadio">
                                                    Find Job
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Username</label>
                                <input type="text" id="fname" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email</label>
                                <input type="text" id="fname" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Password</label>
                                <input type="password" id="fname" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Re-Type Password</label>
                                <input type="password" id="fname" class="form-control" placeholder="Re-type Password">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Image</label>
                                <input type="file" id="file" class="form-control" placeholder="Re-type Password">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
