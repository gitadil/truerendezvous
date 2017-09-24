@extends('layouts.app')

@section('content')
    <h1 class="page-title">
        Members
    </h1>
    <div class="Members-Search">
        <div class="row">
            <div class="col-md-3">
                <aside>
                    {{--<div class="widget text-center profile-avatar">--}}
                        {{--<h4>Hello Abrar </h4>--}}
                        {{--<div class="member-avatar">--}}
                            {{--<a href="#">--}}
                                {{--<img class="img-responsive" src="images/avatar.png"/>--}}
                                {{--<div class="avatar-icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<label class="btn custom-btn-primary custom-btn btn-block" for="upload-file">--}}
                            {{--<input id="upload-file" type="file">--}}
                            {{--Upload a Photo--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    <div class="widget advance-search">
                        <h4 class="widget-title">
                            Search
                            <span class="pull-right">Advanace <span>
                        </h4>
                        <form method="get">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">I am a:</label>
                                        <div class="select">
                                            <select class="form-control" name="iam" id="sel1">
                                                <option value>I am</option>
                                                @foreach($dropdowns->gender as $key =>$value)
                                                    <option value="{{$key}}" @if ($key==getParamValue($_REQUEST['iam'])) selected @endif  >{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Seeking for</label>
                                        <select class="form-control" name="lookingfor" id="sel1">
                                            <option value>Looking for</option>
                                            @foreach($dropdowns->gender as $key =>$value)
                                                <option value="{{$key}}"  @if ($key==getParamValue($_REQUEST['lookingfor'])) selected @endif >{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="age-limit">
                                    <label>Age (from-to)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <select class="form-control" name="from" id="sel1">
                                                <option value="">From</option>
                                                @foreach($dropdowns->age as $key =>$value)
                                                    <option value="{{$key}}"  @if ($key==getParamValue($_REQUEST['from'])) selected @endif>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">

                                            <select class="form-control" id="sel1">
                                                <option value="">to</option>
                                                @foreach($dropdowns->age as $key =>$value)
                                                    <option value="{{$key}}"  @if ($key==getParamValue($_REQUEST['to'])) selected @endif>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"> </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">Country</label>
                                        <select class="form-control" id="sel1">
                                            <option>Country</option>
                                            @foreach($dropdowns->countries as $key =>$value)
                                                <option value="{{$key}}" @if ($key==getParamValue($_REQUEST['to'])) selected @endif>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">

<input type="text" class="form-control" name="city" placeholder="City"   />
                                    </div>

                                </div>
                                <div class="clearfix"> </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="sel1">Photo</label>
                                        <div class="checkbox keep-login">
                                            <label><input type="checkbox" value="">Yes Profile with a Photo</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"> </div>
                                <div class="clearfix"> </div>
                                <div class="sub-btn text-center col-md-12">

                                    <button type="submit" class="btn custom-btn-primary custom-btn btn-block" value=""><i class="fa fa-search" aria-hidden="true"></i>Search</button>


                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </form>


                    </div>
                    <div class="widget popular-matches">
                        <h4 class="widget-title">
                            Popular Searches
                        </h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i>My Matches </a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i>My Matches </a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i>My Matches </a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i>My Matches </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-9">
                <div class="members">
                    <div class="row">
                        @foreach($Model as $user)
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
                                <div class="member">
                                    <div class="member-pic">
                                        <a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>
                                        <div class="members-functions">
                                            <div class="pr-msg">
                                                <a href="ahh" title="Send a private message to this member">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i></a></div>
                                            <div class="fr-request">
                                                <a href="#" title="Add Friend">
                                                    <i class="fa fa-user-plus" aria-hidden="true"></i></a></div>
                                            <div class="member-photos">
                                                <a href="#"  title="Photos">
                                                    <i class="fa fa-camera" aria-hidden="true"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="members-caption">
                                        <h3 class="member-name">
                                            <a href="#">{{$user->first_name}}, 29</a>
                                            <span class="online-offline pull-right"><i class="fa fa-circle @if($user->is_active==1) online @else offline @endif" aria-hidden="true" title="Offline"></i></span>
                                        </h3>


                                        <p>{{$user->biography}}</p>





                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endforeach

                       <div class="clearfix"></div>

                            {{ $Model->links() }}

                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="ahh" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle offline" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="ahh" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle offline" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="ahh" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle offline" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="ahh" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle offline" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="ahh" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle offline" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="abc"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="ahh" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle offline" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="#"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="#" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle online" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="#"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="#" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle online" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="#"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="#" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i><span>100 </span></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle online" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="#"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="#" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle online" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">--}}
                            {{--<div class="member">--}}
                                {{--<div class="member-pic">--}}
                                    {{--<a href="#"><img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego"></a>--}}
                                    {{--<div class="members-functions">--}}
                                        {{--<div class="pr-msg">--}}
                                            {{--<a href="#" title="Send a private message to this member">--}}
                                                {{--<i class="fa fa-envelope" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="fr-request">--}}
                                            {{--<a href="#" title="Add Friend">--}}
                                                {{--<i class="fa fa-user-plus" aria-hidden="true"></i></a></div>--}}
                                        {{--<div class="member-photos">--}}
                                            {{--<a href="#"  title="Photos">--}}
                                                {{--<i class="fa fa-camera" aria-hidden="true"></i></a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="members-caption">--}}
                                    {{--<h3 class="member-name">--}}
                                        {{--<a href="#">Title, 29</a>--}}
                                        {{--<span class="online-offline pull-right"><i class="fa fa-circle online" aria-hidden="true" title="Offline"></i></span>--}}
                                    {{--</h3>--}}


                                    {{--<p>If you are cold and looking for sunshine - I'll be your Sun...</p>--}}





                                {{--</div>--}}

                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
