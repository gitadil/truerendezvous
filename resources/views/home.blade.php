@extends('layouts.app')

@section('register-content')
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
@endsection
@section('content')
   <section class="how-it-work">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <h1 class="hd-1">How it Works</h1>
                <p class="para-1">Get started on true rendezvous today in 3 simple steps:</p>
                <ul class="howitwork-list">
                    <li>
                        <div class="howitwork-icon"><i class="fa fa-vcard-o"></i></div>
                        <div class="howitwork-details">
                            <h2 class="hd-2">Create A Profile</h2>
                            <p>Create a personalized profile, add photos and describe your ideal partner.</p>
                        </div>

                    </li>
                    <li>
                        <div class="howitwork-icon"><i class="fa fa-search"></i></div>
                        <div class="howitwork-details">
                            <h2 class="hd-2">Browse Members</h2>
                            <p>Find members based on location, very special interests and lifestyle preferences.</p>
                        </div>

                    </li>
                    <li>
                        <div class="howitwork-icon"><i class="fa fa-comments"></i></div>
                        <div class="howitwork-details">
                            <h2 class="hd-2">Start Communicating</h2>
                            <p>Show interest in the members you like and let the journey begin.</p>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="how-it-work-photo">
                    <img src="https://meeting-room.progressionstudios.com/wp-content/uploads/2017/06/why-us-1.png" width="100%">
                </div>
            </div>
    </section>
    <section class="testiminials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="hd-1">They Found Love</h1>
                    <div class="content">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="thumbnail adjust1">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/100">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="caption">
                                                        <p class="text-info lead adjust2">I can't wait to test this out.</p>
                                                        <p>This is a testimonial window. Feedback of user can be displayed here.</p>
                                                        <blockquote class="adjust3">
                                                            <p>- Abhijit Goswami</p>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="thumbnail adjust1">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/100">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="caption">
                                                        <p class="text-info lead adjust2">I can't wait to test this out.</p>
                                                        <p>This is a testimonial window. Feedback of user can be displayed here.</p>
                                                        <blockquote class="adjust3">
                                                            <p>- Abhijit Goswami</p>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="thumbnail adjust1">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <img class="media-object img-rounded img-responsive" src="http://placehold.it/100">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="caption">
                                                        <p class="text-info lead adjust2">I can't wait to test this out.</p>
                                                        <p>This is a testimonial window. Feedback of user can be displayed here.</p>
                                                        <blockquote class="adjust3">
                                                            <p>- Abhijit Goswami</p>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="hd-1">Video Presentation</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="wwd-1">
                        <h2 class="hd-3">PERSONAL <br/>VIDEO CHATS</h2>
                        <p class="txt-1">Live video chat allows you to connect with your would-be partner much quicker.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wwd-2">
                        <h2 class="hd-3">100% FULLY
                            <br/>SECURED</h2>
                        <p class="txt-1">Live video chat allows you to connect with your would-be partner much quicker.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wwd-3">
                        <h2 class="hd-3">PERSONAL <br/>VIDEO CHATS</h2>
                        <p class="txt-1">Live video chat allows you to connect with your would-be partner much quicker.</p>
                    </div></div>
            </div>
        </div>
    </section>
@endsection
