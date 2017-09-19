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
                            <h3 class="modal-title">LOGIN</h3>
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="control-label">Email</label>
                                            <input id="email" type="email" class="form-control input-md" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="email" class="control-label">Password</label>
                                            <input id="password" type="password" class="form-control input-md" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn custom-btn-primary custom-btn">
                                                Login
                                            </button>
                                            <p>
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
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
