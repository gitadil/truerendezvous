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
                                    <h1 class="login-hd">This will help us to find your<br /> <span>match</span></h1>
                                </div>
                                <div class="col-md-8 wt-bg">
                                    <div class="col-md-12">
                                        <!-- content goes here -->
                                        <div class="modal-login">
                                            <h3 class="modal-title-1">LOOKING FOR PARTNER</h3>

                                            @if(Session::has('message'))
                                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                            @endif
                                            <form method="POST" action="/partnerinformation/store">
                                                {{ csrf_field() }}

                                                @if(Auth::check())
                                                    <input name="id" type="hidden" value="{{$Model->id}}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('min_height_id') ? ' has-error' : '' }}">
                                                            <label for="min_height_id" class="control-label">Min Height</label>
                                                            <select id="min_height_id" required name="min_height"
                                                                    class="form-control">
                                                                <option value="">Select Min Height</option>
                                                                @foreach($dropdowns->height as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->min_height_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('max_height_id') ? ' has-error' : '' }}">
                                                            <label for="max_height_id" class="control-label">Max Height</label>
                                                            <select id="max_height_id" required name="max_height"
                                                                    class="form-control">
                                                                <option value="">Select Max Height</option>
                                                                @foreach($dropdowns->height as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->max_height_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
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
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('mother_tongue_id') ? ' has-error' : '' }}">
                                                            <label for="mother_tongue_id" class="control-label">Language</label>
                                                            <select id="mother_tongue_id" required name="mother_tongue_id"
                                                                    class="form-control">
                                                                <option value="">Select Language</option>
                                                                @foreach($dropdowns->mother_tongue as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->mother_tongue_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group {{ $errors->has('religion_id') ? ' has-error' : '' }}">
                                                            <label for="religion_id" class="control-label">Religion</label>
                                                            <select id="religion_id" required name="religion_id"
                                                                    class="form-control">
                                                                <option value="">Select Religion</option>
                                                                @foreach($dropdowns->religion as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->religion_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn custom-btn-primary custom-btn">
                                                                Next
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
