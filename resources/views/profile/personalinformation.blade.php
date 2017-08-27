@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   {{--<div class="panel-heading">{{$heading}}</div>--}}
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/personalinformation/store">
                            {{ csrf_field() }}

                            @if(Auth::check())
                            <input name="user_id" type="hidden" value="{{Auth::user()->guid}}">
                            <input name="id" type="hidden" value="{{$Model->id}}">
                            @endif

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">Gender</label>

                                <div class="col-md-6">

                                    <select id="gender_id" required name="gender_id" class="form-control">
                                        <option value="">Select Gender</option>

                                       {{--// @if($dropdowns)--}}

                                        {{--@endif--}}
                                        @foreach($dropdowns->gender as $key =>$value)
                                            <option value="{{$key}}"  @if( $key== $Model->gender_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                <label for="dob" class="col-md-4 control-label">DOB</label>

                                <div class="col-md-6">
                                    <input id="dob" type="text" class="form-control datepicker"  name="dob" value="{{$Model->dob }}" required autofocus>

                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                <label for="biography" class="col-md-4 control-label">Biography</label>

                                <div class="col-md-6">
                                    <input id="biography" type="text" class="form-control" name="biography" value="{{ $Model->biography }}" required autofocus>

                                    @if ($errors->has('biography'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('biography') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="marital_status_id" class="col-md-4 control-label">Marital Status</label>

                                <div class="col-md-6">
                                    <select id="marital_status_id" required name="marital_status_id"
                                            class="form-control">
                                        <option value="">Select Marital Status</option>
                                        @foreach($dropdowns->marital_status as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->marital_status_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                                <label for="religion_id" class="col-md-4 control-label">Religion</label>

                                <div class="col-md-6">
                                    <select id="religion_id" required name="religion_id" class="form-control">
                                        <option value="">Select Gender</option>
                                        @foreach($dropdowns->religion as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->religion_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="body_type_id" class="col-md-4 control-label">Body Type</label>

                                <div class="col-md-6">
                                    <select id="body_type_id" required name="body_type_id" class="form-control">
                                        <option value="">Select Body Type</option>
                                        @foreach($dropdowns->body_type as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->body_type_id ) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="skin_tone_id" class="col-md-4 control-label">Skin Tone Type</label>

                                <div class="col-md-6">
                                    <select id="skin_tone_id" required name="skin_tone_id" class="form-control">
                                        <option value="">Select Skin Type</option>
                                        @foreach($dropdowns->skin_tone as $key =>$value)
                                            <option value="{{$key}}"@if( $key== $Model->skin_tone_id ) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="height" class="col-md-4 control-label">Height</label>

                                <div class="col-md-6">
                                    <select id="height" required name="height" class="form-control">
                                        <option value="">Select Height</option>
                                        @foreach($dropdowns->height as $key =>$value)
                                            <option value="{{$key}}"@if( $key== $Model->height ) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="cast_id" class="col-md-4 control-label">Cast</label>

                                <div class="col-md-6">
                                    <select id="cast_id" required name="cast_id" class="form-control">
                                        <option value="">Select Cast</option>
                                        @foreach($dropdowns->cast as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->cast_id ) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="place_of_birth_id" class="col-md-4 control-label">Birth Place</label>

                                <div class="col-md-6">
                                    <select id="place_of_birth_id" required name="place_of_birth_id"
                                            class="form-control">
                                        <option value="">Select Birth Place</option>
                                        @foreach($dropdowns->nationality as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->place_of_birth_id ) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mother_tongue" class="col-md-4 control-label">Mother Tongue</label>

                                <div class="col-md-6">
                                    <select id="mother_tongue" required name="mother_tongue" class="form-control">
                                        <option value="">Select Cast</option>
                                        @foreach($dropdowns->mother_tongue as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->mother_tongue ) selected @endif>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nationality_id" class="col-md-4 control-label">Birth Place</label>

                                <div class="col-md-6">
                                    <select id="nationality_id" required name="nationality_id" class="form-control">
                                        <option value="">Select Nationality</option>
                                        @foreach($dropdowns->nationality as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->nationality_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
