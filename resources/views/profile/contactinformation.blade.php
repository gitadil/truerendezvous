@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Information</div>
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="contactinformation/store">
                            {{ csrf_field() }}

                            @if(Auth::check())
                                <input name="id" type="hidden" value="{{$Model->id}}">
                            @endif

                            <div class="form-group{{ $errors->has('cell_number') ? ' has-error' : '' }}">
                                <label for="cell_number" class="col-md-4 control-label">Cell Number</label>

                                <div class="col-md-6">
                                    <input id="cell_number" type="text" class="form-control" name="cell_number" value="{{ $Model->cell_number}}" required autofocus>
                                    @if ($errors->has('cell_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cell_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $Model->phone_number }}" required autofocus>

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city" value="{{ $Model->city}}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
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

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" value="{{ $Model->address}}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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
