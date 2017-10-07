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
            <h3 class="text-themecolor">Personal Information</h3>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->

    @foreach($personal as $person)
        @if(count($person) > 0)
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"><img src="/images/{{$person->profile_image}}" class="img-circle"
                                                    height="150" width="150"/>
                            <h4 class="card-title m-t-10">{{$person->first_name}} {{$person->last_name}}</h4>

                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" readonly
                                           placeholder="{{$person->first_name}} {{$person->last_name}}"
                                           placeholder="Johnathan Doe" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" readonly placeholder="{{$person->email}}"
                                           class="form-control form-control-line" name="example-email"
                                           id="example-email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" readonly placeholder="{{$person->phone_no}}"
                                           class="form-control form-control-line">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        @else
            <div class="row">
                <h3>No Record Found.</h3>
            </div>
        @endif

        @endforeach
                <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
@endsection
