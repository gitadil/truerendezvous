@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$heading}}</div>
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/professionalinformation/store">
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

                            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label for="designation" class="col-md-4 control-label">Designation</label>

                                <div class="col-md-6">
                                    <input id="designation" type="text" class="form-control" name="designation" value="{{ old('designation') }}" autofocus>

                                    @if ($errors->has('designation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('organizaiton_name') ? ' has-error' : '' }}">
                                <label for="organizaiton_name" class="col-md-4 control-label">Organizaiton Name</label>

                                <div class="col-md-6">
                                    <input id="organizaiton_name" type="text" class="form-control" name="organizaiton_name" value="{{ old('organizaiton_name') }}"  autofocus>

                                    @if ($errors->has('organizaiton_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('organizaiton_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country_id" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">
                                    <select id="country_id"  name="country_id" class="form-control">
                                        <option value="">Select Nationality</option>
                                        @foreach($nationality as $key =>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('path') ? ' has-error' : '' }}">
                                <label for="path" class="col-md-4 control-label">Document</label>

                                <div class="col-md-6">
                                    <input id="path" type="file" class="form-control" name="path" value="{{ old('path') }}"  autofocus>

                                    @if ($errors->has('path'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('path') }}</strong>
                                    </span>
                                    @endif
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
