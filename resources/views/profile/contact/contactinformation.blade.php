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
                                    <h1 class="login-hd">CONTACT<br /> <span>INFO</span></h1>
                                </div>
                                <div class="col-md-8 wt-bg">
                                    <div class="col-md-12">
                                        <!-- content goes here -->
                                        <div class="modal-login">
                                            <h3 class="modal-title-1">CONTACT INFORMATION</h3>

                                            @if(Session::has('message'))
                                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                            @endif
                                            <form method="POST" action="/contact/store">
                                                {{ csrf_field() }}

                                                @if(Auth::check())
                                                    <input name="id" type="hidden" value="{{$Model->id}}">
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('cell_number') ? ' has-error' : '' }}">
                                                            <label for="cell_number" class="control-label">Landline Number</label>
                                                            <input id="cell_number" type="text" class="form-control" name="cell_number" value="{{ old('cell_number') }}" placeholder="Landline Number" required autofocus>
                                                            @if ($errors->has('cell_number'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('cell_number') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                                            <label for="phone_no" class="control-label">Phone Number</label>
                                                            <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required autofocus>
                                                            @if ($errors->has('phone_number'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                                            <label for="city" class="control-label">City</label>
                                                            <input id="city" type="text" class="form-control" name="city" value="{{ $Model->city}}" required autofocus placeholder="City">

                                                            @if ($errors->has('city'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
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
                                                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                                            <label for="address" class="control-label">Address</label>
                                                            <input id="address" type="text" class="form-control" name="address" value="{{ $Model->address}}" required autofocus placeholder="Address">

                                                            @if ($errors->has('address'))
                                                                <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
