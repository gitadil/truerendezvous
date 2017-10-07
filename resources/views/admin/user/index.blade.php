@extends('layouts.adminmaster')

@section('content')
        <!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Users</h3>
        </div>
        {{--<div class="col-md-7 align-self-center">
            <a href="https://wrappixel.com/templates/adminpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to Pro</a>
        </div>--}}
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert"
                               aria-label="close">&times;</a>{{ Session::get('message') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone #</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users AS $user)
                                @if(count($user)> 0)
                                    <tr>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->phone_no}}</td>
                                        <td>
                                            <a href="/admin/users/changestatus/{{$user->guid}}" class=".btn .btn-app">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="fa fa-edit">Change Status</i>
                                                </button>
                                            </a>
                                            <a href="/admin/user/detail/{{$user->guid}}" class=".btn .btn-app">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="fa fa-edit">Detail</i>
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
                    <div class="clearfix"></div>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
@endsection
