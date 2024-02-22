@extends('layouts.app')

@section('main-section')
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('assets/images/hero_1.jpg')}} );"
        id="home-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card p-3 py-4">

                        <div class="text-center">
                            <img src="{{ asset('uploads') }}/{{$users->pic}}" width="100" class="rounded-circle">
                        </div>

                        <div class="text-center mt-3">
                            <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> -->
                            <h5 class="mt-2 mb-0">{{ $users->name }}</h5>
                        <span>{!! $users->skill ?? $users->comType ?? "<div class='text-danger'>Pleasee Complete Profile setup</div>" !!}</span>
                    
                            <div class="px-4 mt-1">
                                <p class="fonts">{!! $users->about ?? "<div class='text-danger'>Pleasee Complete Profile setup</div>" !!}</p>
                            </div>

                            <div class="px-3">
                                @if ($users->facebook)
                                    <a href="{{$users->facebook}}" class="pt-3 pb-3 pr-3 pl-0 underline-none"><span class="icon-facebook"></span></a>
                                @endif
                                @if ($users->twitter)
                                    <a href="{{$users->twitter}}" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                                @endif
                                @if ($users->linkedin)
                                    <a href="{{$users->linkedin}}" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
