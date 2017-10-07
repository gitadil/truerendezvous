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
                                    <h1 class="login-hd">PERSONAL<br /> <span>INFO</span></h1>
                                </div>
                                <div class="col-md-8 wt-bg">
                                    <div class="col-md-12">
                                        <!-- content goes here -->
                                        <div class="modal-login">
                                            <h3 class="modal-title-1">PERSONAL INFORMATION</h3>

                                            @if(Session::has('message'))
                                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                            @endif
                                            <form method="POST" action="/personal/store">
                                                {{ csrf_field() }}

                                                @if(Auth::check())
                                                    <input name="user_id" type="hidden" value="{{Auth::user()->guid}}">
                                                    <input name="id" type="hidden" value="{{$Model->id}}">
                                                @endif

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('gender_id') ? ' has-error' : '' }}">
                                                            <label for="gender_id" class="control-label">Gender</label>
                                                            <select id="gender_id" required name="gender_id" class="form-control">
                                                                <option value="">Select Gender</option>

                                                                @foreach($dropdowns->gender as $key =>$value)
                                                                    <option value="{{$key}}"  @if( $key== $Model->gender_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('marital_status_id') ? ' has-error' : '' }}">
                                                            <label for="marital_status_id" class="control-label">Marital Status</label>
                                                            <select id="marital_status_id" required name="marital_status_id"
                                                                    class="form-control">
                                                                <option value="">Select Marital Status</option>
                                                                @foreach($dropdowns->marital_status as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->marital_status_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
                                                            <label for="dob" class="control-label">Date of birth</label>

                                                            <input id="dob" type="text" class="form-control datepicker input-md" placeholder="Date of birth"  name="dob" value="{{$Model->dob }}" required>

                                                            @if ($errors->has('dob'))
                                                                <span class="help-block">
                                                    <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('place_of_birth_id') ? ' has-error' : '' }}">
                                                            <label for="place_of_birth_id" class="control-label">Place of Birth</label>
                                                            <select id="place_of_birth_id" required name="place_of_birth_id"
                                                                    class="form-control">
                                                                <option value="">Select Birth Place</option>
                                                                @foreach($dropdowns->countries as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->place_of_birth_id ) selected @endif>{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('religion_id') ? ' has-error' : '' }}">
                                                            <label for="religion_id" class="control-label">Religion</label>
                                                            <select id="religion_id" required name="religion_id" class="form-control">
                                                                <option value="">Select Religion</option>
                                                                @foreach($dropdowns->religion as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->religion_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('body_type_id') ? ' has-error' : '' }}">
                                                            <label for="body_type_id" class="control-label">Body Type</label>
                                                            <select id="body_type_id" required name="body_type_id" class="form-control">
                                                                <option value="">Select Body Type</option>
                                                                @foreach($dropdowns->body_type as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->body_type_id ) selected @endif>{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('skin_tone_id') ? ' has-error' : '' }}">
                                                            <label for="skin_tone_id" class="control-label">Skin Type</label>
                                                            <select id="skin_tone_id" required name="skin_tone_id" class="form-control">
                                                                <option value="">Select Skin Type</option>
                                                                @foreach($dropdowns->skin_tone as $key =>$value)
                                                                    <option value="{{$key}}"@if( $key== $Model->skin_tone_id ) selected @endif>{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('height') ? ' has-error' : '' }}">
                                                            <label for="height" class="control-label">Height</label>
                                                            <select id="height" required name="height" class="form-control">
                                                                <option value="">Select Height</option>
                                                                @foreach($dropdowns->height as $key =>$value)
                                                                    <option value="{{$key}}"@if( $key== $Model->height ) selected @endif>{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('cast_id') ? ' has-error' : '' }}">
                                                            <label for="cast_id" class="control-label">Cast</label>
                                                            <select id="cast_id" required name="cast_id" class="form-control">
                                                                <option value="">Select Cast</option>
                                                                @foreach($dropdowns->cast as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->cast_id ) selected @endif>{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('mother_tongue') ? ' has-error' : '' }}">
                                                            <label for="mother_tongue" class="control-label">Language</label>
                                                            <select id="mother_tongue" required name="mother_tongue" class="form-control">
                                                                <option value="">Select your language</option>
                                                                @foreach($dropdowns->mother_tongue as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->mother_tongue ) selected @endif>{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('nationality_id') ? ' has-error' : '' }}">
                                                            <label for="nationality_id" class="control-label">Nationality</label>
                                                            <select id="nationality_id" required name="nationality_id" class="form-control">
                                                                <option value="">Select Nationality</option>
                                                                @foreach($dropdowns->countries as $key =>$value)
                                                                    <option value="{{$key}}" @if( $key== $Model->nationality_id ) selected @endif >{{$value}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group {{ $errors->has('biography') ? ' has-error' : '' }}">
                                                            <label for="biography" class="control-label">About urself</label>
                                                            <textarea id="biography" class="form-control" name="biography" value="{{ $Model->biography }}" required autofocus placeholder="Tell about yourself"></textarea>

                                                            @if ($errors->has('biography'))
                                                                <span class="help-block">
                                                    <strong>{{ $errors->first('biography') }}</strong>
                                                </span>
                                                            @endif
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
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection