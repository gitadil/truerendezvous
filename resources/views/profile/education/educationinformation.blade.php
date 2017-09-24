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

                                    <div class="panel panel-education">
                                        <div class="panel-heading" style="padding-top: 20px;">
                                            <h3 class="modal-title-1">EDUCATIONAL INFORMATION
                                                <a href="/education/add" class="btn btn-edn">
                                                    Add
                                                </a>
                                            </h3>
                                        </div>

                                        @if(Session::has('message'))
                                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                        @endif



                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Degree Title</th>
                                                    <th>Passing Year</th>
                                                    <th>Institute</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($educations AS $education)
                                                    @if(count($education)> 0)
                                                        <tr>
                                                            <td>{{$education->degree_title}}</td>

                                                            <td>{{$education->passing_year}}</td>
                                                            <td>{{$education->institute}}</td>
                                                            <td>
                                                                <a href="/education/edit/{{$education->id}}" class=".btn .btn-app">
                                                                    <button type="button" class="btn btn-warning">
                                                                        <i class="fa fa-edit">Edit</i>
                                                                    </button>
                                                                </a>

                                                                <a href="#" class=".btn .btn-app">
                                                                    <button type="button" class="btn btn-danger">
                                                                        <i class="fa fa-close">Delete</i>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <h3>No Record Found.</h3>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection