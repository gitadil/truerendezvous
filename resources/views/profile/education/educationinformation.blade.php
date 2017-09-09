@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height: 50px;">
                        <div style="float:left;">{{$heading}}</div>
                        <div style="float:right;">
                            <a href="/educationinformation/add" class="collapse-link">
                                <button type="button" class="btn btn-success">Add</button>
                            </a>
                        </div>
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
                                            <a href="/educationinformation/edit/{{$education->id}}" class=".btn .btn-app">
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
@endsection