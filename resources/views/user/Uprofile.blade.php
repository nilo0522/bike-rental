@extends('layouts.rentbike')
@section('title','Profile')
@section('content')


            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">About Me</h3>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Full Name </label>
                                        <p> {{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</p>
                                    </div>
                                    <div class="media">
                                        <label>gender</label>
                                        <p>{{ Auth::user()->gender }}</p>
                                    </div>
                                    <div class="media">
                                        <label>street</label>
                                        <p>{{ Auth::user()->street }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p> {{ Auth::user()->city }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p> {{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p> {{ Auth::user()->number }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <p>skype.0404</p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">2</h6>
                                <p class="m-0px font-w-600">Posted Bikes</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Rented Bikes</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection