@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Partner Information</div>
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="partnerinformation/store">
                            {{ csrf_field() }}

                            @if(Auth::check())
                                <input name="id" type="hidden" value="{{$Model->id}}">
                            @endif

                            <div class="form-group{{ $errors->has('min_height') ? ' has-error' : '' }}">
                                <label for="min_height" class="col-md-4 control-label">Min Height</label>

                                <div class="col-md-6">
                                    <select id="min_height_id" required name="min_height"
                                            class="form-control">
                                        <option value="">Select Min Height</option>
                                        @foreach($dropdowns->height as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->min_height_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('max_height') ? ' has-error' : '' }}">
                                <label for="max_height" class="col-md-4 control-label">Max Height</label>

                                <div class="col-md-6">
                                    <select id="max_height_id" required name="max_height"
                                            class="form-control">
                                        <option value="">Select Max Height</option>
                                        @foreach($dropdowns->height as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->max_height_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                                <label for="country_id" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">
                                    <select id="country_id" required name="country_id"
                                            class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($dropdowns->countries as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->country_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('mother_tongue_id') ? ' has-error' : '' }}">
                                <label for="mother_tongue_id" class="col-md-4 control-label">Mother Tongue</label>

                                <div class="col-md-6">
                                    <select id="mother_tongue_id" required name="mother_tongue_id"
                                            class="form-control">
                                        <option value="">Select Your Mother Tongue</option>
                                        @foreach($dropdowns->mother_tongue as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->mother_tongue_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('religion_id') ? ' has-error' : '' }}">
                                <label for="religion_id" class="col-md-4 control-label">Religion</label>

                                <div class="col-md-6">
                                    <select id="religion_id" required name="religion_id"
                                            class="form-control">
                                        <option value="">Select Religion</option>
                                        @foreach($dropdowns->religion as $key =>$value)
                                            <option value="{{$key}}" @if( $key== $Model->religion_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
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
