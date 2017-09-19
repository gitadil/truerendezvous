@extends('layouts.app')

@section('register-content')
    <div class="slider">
        <div class="container">
            <div class="form-box-login">
                <div class="col-md-6">
                    <h1 class="login-hd">Are you looking for <br /> <span>best match?</span></h1>
                </div>
                <div class="col-md-6 wt-bg">
                    <div class="col-md-12">
                        <!-- content goes here -->
                        <div class="modal-login">
                            <h3 class="modal-title">REGISTER</h3>
                            @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                            {{--<label for="first_name" class="control-label">First Name</label>--}}
                                            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required autofocus>
                                            @if ($errors->has('first_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                            {{--<label for="last_name" class="control-label">Last Name</label>--}}
                                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('phone_no') ? ' has-error' : '' }}">
                                            {{--<label for="phone_no" class="control-label">Phone Number</label>--}}
                                            <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ old('phone_no') }}" placeholder="Phone Number" required autofocus>
                                            @if ($errors->has('phone_no'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            {{--<label for="email" class="control-label">Email</label>--}}
                                            <input id="email" type="email" class="form-control input-md" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            {{--<label for="email" class="control-label">Password</label>--}}
                                            <input id="password" type="password" class="form-control input-md" name="password" placeholder="Password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{--<label for="password-confirm" class="control-label">Confirm Password</label>--}}
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn custom-btn-primary custom-btn">
                                                Register
                                            </button>
                                            <p>
                                                <a class="btn btn-link" href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </p>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>

@endsection
