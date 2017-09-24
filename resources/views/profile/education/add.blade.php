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
                                    <h1 class="login-hd">Educational<br /> <span>Info</span></h1>
                                </div>
                                <div class="col-md-8 wt-bg">
                                    <div class="col-md-12">
                                        <!-- content goes here -->
                                        <div class="modal-login">
                                            <h3 class="modal-title-1">EDUCATIONAL INFORMATION</h3>

                                            @if(Session::has('message'))
                                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                            @endif
                                            <form method="POST" enctype="multipart/form-data" action="/education/store">
                                                {{ csrf_field() }}

                                                @if(Auth::check())
                                                    <input name="id" type="hidden" value="{{$Model->id}}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('degree_title') ? ' has-error' : '' }}">
                                                            <label for="degree_title" class="control-label">Degree</label>
                                                            <input id="degree_title" type="text" class="form-control" name="degree_title"
                                                                   value="{{$Model->degree_title}}" required autofocus placeholder="Degree Title">

                                                            @if ($errors->has('degree_title'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('degree_title') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('institute') ? ' has-error' : '' }}">
                                                            <label for="institute" class="control-label">Institute</label>
                                                            <input id="institute" type="text" class="form-control" name="institute"
                                                                   value="{{$Model->institute}}" required autofocus>

                                                            @if ($errors->has('institute'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('institute') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('passing_year') ? ' has-error' : '' }}">
                                                            <label for="passing_year" class="control-label">Passing Year</label>
                                                            <input id="passing_year" type="text" class="form-control datepicker"
                                                                   name="passing_year" value="{{$Model->passing_year}}" required autofocus>

                                                            @if ($errors->has('passing_year'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('passing_year') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('country_id') ? ' has-error' : '' }}">
                                                            <label for="country_id" class="control-label">Country</label>
                                                            <select id="country_id" required name="country_id"
                                                                    class="form-control">
                                                                <option value="">Select Country</option>
                                                                @foreach($dropdowns->countries as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->country_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group {{ $errors->has('path') ? ' has-error' : '' }}">
                                                            <label for="address" class="control-label">Document</label>
                                                            <input id="path" type="file" class="form-control" name="path"
                                                                   value="{{$Model->path}}" required autofocus>

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
