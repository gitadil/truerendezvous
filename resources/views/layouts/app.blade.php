<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
    <div id="app">
        <div class="layout">
            <header>
                <div class="container">
                    <div class="login-register">
                        <div class="box-log-reg">
                            <!-- Authentication Links -->
                            <ul class="list-inline">
                                @if (Auth::guest())
                                <li><a href="{{ route('login') }}" ><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                                {{--data-toggle="modal" data-target="#LoginModal"--}}
                                <span>/</span>
                                <li><a href="{{ route('register') }}" >Register </a></li>
                                    {{--data-toggle="modal" data-target="#RegisterModal"--}}
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->first_name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Login modal -->
                        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-6">
                                            <!-- content goes here -->
                                            <div class="modal-login">
                                                <h3 class="modal-title" id="lineModalLabel">Members Login</h3>
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <p class="forgot-password text-right"><em><a href="#">Forgot Password </a></em> </p>
                                                    <div class="form-group">
                                                        <div class="checkbox keep-login">
                                                            <label><input type="checkbox" value="">Keep me logged in <span>Don't check this box if you're at public or shared computer </span></label>
                                                        </div> </div>
                                                    <div class="sub-btn text-center">
                                                        <button type="submit" class="btn btn-block custom-btn-primary custom-btn">Login to my account</button>
                                                    </div>
                                                </form>
                                                <div class="text-center other-account-login">
                                                    <h2>Or </h2>
                                                    <a href="#" class="btn btn-primary btn-block custom-btn">Login with Facebook </a>
                                                    <p>Not a member <a href="">Join Free Now! </a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="popup-banner">
                                                <img class="img-responsive" src="images/loginpopup.jpg"/>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Register modal -->
                        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-6">
                                            <!-- content goes here -->
                                            <div class="modal-login">
                                                <h3 class="modal-title" >Members Register</h3>
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

                                                            <input type="button" class="btn custom-btn-primary custom-btn" value="Find Love Today!">
                                                            <div class="box-text">
                                                                <p> By continuing, you're confirming that you've read and agree to our </br>Terms and Conditions, Privacy Policy and Cookie Policy.</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </form>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="popup-banner">
                                                <img class="img-responsive" src="images/loginpopup.jpg"/>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo ">
                        <img src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/themes/meeting-room-progression/images/logo.png" alt="Meeting Room" class="progression-studios-default-logo	">
                    </div>
                    <div class="navigation ">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#"><img src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/themes/meeting-room-progression/images/logo.png" alt="Meeting Room" class="progression-studios-default-logo	"></a>
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">Find Love</a></li>
                                        <li><a href="#">Match Profile</a></li>
                                        <li><a href="#">Why Us?</a></li>
                                        <li><a href="#">Love Blog</a></li>
                                        <li><a href="#">True Stories</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                @yield('register-content');
            </header>
            @yield('content')
            @include('includes.footer')
        </div>
    </div>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script>

        $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
                }
        );

        $(function(){
            $('a[title]').tooltip();
        });

    </script>
</body>
</html>
