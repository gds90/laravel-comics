@extends('layout.app')

@section('content')
    <div class="container-fluid  p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="splitter">
                    <div class="thumb">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="border border-light">
                    </div>
                </div>
            </div>
            <div class="col-12 py-5 details ">
                <div class="row">
                    <div class="col-9">
                        <h4 class="text-uppercase ">{{ $comic['title'] }}</h4>
                        <div class="green-banner bg-success text-white my-3">
                            <div class="row">
                                <div class="col-9 px-5 py-2">
                                    <span class="opacity-75 ">U.S. Price:</span><span> {{ $comic['price'] }}</span>
                                    <span class="float-end opacity-75">AVAILABLE</span>
                                </div>
                                <div class="col-3 px-3 py-2">
                                    <span>Check Availability</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary py-1">
                            {{ $comic['description'] }}
                        </p>
                    </div>
                    <div class="col-3 adv">
                        <span class="float-end text-secondary py-1">ADVERTISMENT</span>
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="/">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 bg-body-secondary border border-secondary-subtle sub-details">
        <div class="row sub-details-content">
            <div class="col-6 p-4">
                <strong>Talent</strong>
                <div class="row mt-3 fs_10">
                    <div class="col-12 border-top border-bottom py-1 d-flex">
                        <div class="col-4">
                            <span>Art by:</span>
                        </div>
                        <div class="col-8">
                            <p>José Luis Garcià-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe
                                Shuster,
                                Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</p>

                        </div>
                    </div>
                    <div class="col-12 border-bottom py-1 d-flex">
                        <div class="col-4">
                            <span>Written by:</span>
                        </div>
                        <div class="col-8">

                            <p>Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louse
                                Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul
                                Levitz
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 p-4">
                <strong>Specs</strong>
                <div class="row mt-3 fs_10">
                    <div class="col-12 border-top border-bottom py-1 d-flex">
                        <div class="col-4">
                            <span>Series:</span>
                        </div>
                        <div class="col-8">
                            <span class="text-uppercase text-primary">{{ $comic['series'] }}</span>
                        </div>
                    </div>
                    <div class="col-12 border-bottom py-1 d-flex">
                        <div class="col-4">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="col-8">
                            <span>{{ $comic['price'] }}</span>
                        </div>
                    </div>
                    <div class="col-12 border-bottom py-1 d-flex">
                        <div class="col-4">
                            <span>On sale date:</span>
                        </div>
                        <div class="col-8">
                            <span>{{ date('M d Y', strtotime($comic['sale_date'])) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
