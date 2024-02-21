@extends('layouts.app')

@section('main-section')
    <!-- HOME -->
    <link rel="stylesheet" href="{{ asset('assets/css/choose_radioButton_oprions.css') }}"> {{-- css for selection cart --}}
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('assets/images/hero_1.jpg') }} );" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Log In</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ url('/') }}">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Log In</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" class="p-4 border rounded">
                        @csrf
                        
                        {{-- Select user type --}}
                        <div class="text-center">
                            <label class="radio-button" id="option1-label">
                                <input type="radio" name="option" value="looking_emps" id="option1">
                                I am looking for epmloyees
                            </label>

                            <label class="radio-button" id="option2-label">
                                <input type="radio" name="option" value="looking_jobs" id="option2">
                                I am looking for jobs
                            </label>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email</label>
                                <input type="text" id="fname" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Password</label>
                                <input type="password" id="fname" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
