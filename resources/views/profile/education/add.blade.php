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
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                              action="/education/store">
                            {{ csrf_field() }}

                            @if(Auth::check())
                                <input name="id" type="hidden" value="{{$Model->id}}">
                            @endif

                            <div class="form-group{{ $errors->has('degree_title') ? ' has-error' : '' }}">
                                <label for="degree_title" class="col-md-4 control-label">Degree Title</label>

                                <div class="col-md-6">
                                    <input id="degree_title" type="text" class="form-control" name="degree_title"
                                           value="{{$Model->degree_title}}" required autofocus>

                                    @if ($errors->has('degree_title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('degree_title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('institute') ? ' has-error' : '' }}">
                                <label for="institute" class="col-md-4 control-label">Institute</label>

                                <div class="col-md-6">
                                    <input id="institute" type="text" class="form-control" name="institute"
                                           value="{{$Model->institute}}" required autofocus>

                                    @if ($errors->has('institute'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('institute') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('passing_year') ? ' has-error' : '' }}">
                                <label for="passing_year" class="col-md-4 control-label">Passing Year</label>

                                <div class="col-md-6">
                                    <input id="passing_year" type="text" class="form-control datepicker"
                                           name="passing_year" value="{{$Model->passing_year}}" required autofocus>

                                    @if ($errors->has('passing_year'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('passing_year') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="country_id" class="col-md-4 control-label">Country</label>
                                <div class="col-md-6">
                                    <select id="country_id" required name="country_id" class="form-control">
                                        <option value="">Select Nationality</option>
                                        @foreach($dropdowns->countries as $key =>$value)
                                            <option value="{{$key}}"
                                                    @if( $key== $Model->country_id ) selected @endif >{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('path') ? ' has-error' : '' }}">
                                <label for="institute" class="col-md-4 control-label">Document</label>

                                <div class="col-md-6">
                                    <input id="path" type="file" class="form-control" name="path"
                                           value="{{$Model->institute}}" required autofocus>

                                    @if ($errors->has('institute'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('institute') }}</strong>
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
