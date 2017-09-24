@extends('layouts.app')

@section('register-content')
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="board">

                    @include('includes.profile_nav')

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">

                            <div class="form-box-login">
                                <div class="col-md-4">
                                    <h1 class="login-hd">Professional<br /> <span>Info</span></h1>
                                </div>
                                <div class="col-md-8 wt-bg">
                                    <div class="col-md-12">
                                        <!-- content goes here -->
                                        <div class="modal-login">
                                            <h3 class="modal-title-1">PROFESSIONAL INFORMATION</h3>

                                            @if(Session::has('message'))
                                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                            @endif
                                            <form method="POST" enctype="multipart/form-data" action="/profession/store">
                                                {{ csrf_field() }}
                                                @if($errors->all())
                                                    <div class="form-group">

                                                        <div class="alert alert-danger">

                                                            @foreach($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif

                                                @if(Auth::check())
                                                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('designation') ? ' has-error' : '' }}">
                                                            <label for="designation" class="control-label">Designation</label>
                                                            <input id="designation" type="text" class="form-control" name="designation"
                                                                   value="{{ old('designation') }}" autofocus placeholder="Designation">

                                                            @if ($errors->has('designation'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('designation') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('organizaiton_name') ? ' has-error' : '' }}">
                                                            <label for="organizaiton_name" class="control-label">Organizaiton</label>
                                                            <input id="organizaiton_name" type="text" class="form-control"
                                                                   name="organizaiton_name" value="{{ old('organizaiton_name') }}" autofocus placeholder="Organization">

                                                            @if ($errors->has('organizaiton_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('organizaiton_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('country_id') ? ' has-error' : '' }}">
                                                            <label for="country_id" class="control-label">Country</label>
                                                            <select id="country_id" name="country_id" class="form-control">
                                                                <option value="">Select Country</option>
                                                                @foreach($dropdowns->countries as $key =>$value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('path') ? ' has-error' : '' }}">
                                                            <label for="address" class="control-label">Document</label>
                                                            <input id="path" type="file" class="form-control" name="path"
                                                                   value="{{ old('path') }}" autofocus>

                                                            @if ($errors->has('path'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('path') }}</strong>
                                    </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn custom-btn-primary custom-btn">
                                                                Add
                                                            </button>
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

                </div>
            </div>
        </div>
    </div>
@endsection
