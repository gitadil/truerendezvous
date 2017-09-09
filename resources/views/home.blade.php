@extends('layouts.app')

@section('content')
    <div class="slider">
        <div class="custom-shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="shape-fill" d="M0,6V0h1000v100L0,6z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="col-md-5">
                <div class="slider-search-box">
                    <div class="search-box">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">I am a:</label>
                                        <div class="select">
                                            <select class="form-control" id="sel1">
                                                <option>Female looking for a male</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">I am here to:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Make new friends</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="name" class="form-control" id="fname" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="name" class="form-control" id="Email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="year-month-day">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group">

                                            <select class="form-control" id="sel1">
                                                <option>Day</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group">

                                            <select class="form-control" id="sel1">
                                                <option>Month</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group">

                                            <select class="form-control" id="sel1">
                                                <option>Year</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-btn text-center">

                                    <input type="button" class="btn custom-btn-primary custom-btn"
                                           value="Find Love Today!">
                                    <div class="box-text">
                                        <p> By continuing, you're confirming that you've read and agree to our </br>
                                            Terms and Conditions, Privacy Policy and Cookie Policy.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Column 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>
@endsection
