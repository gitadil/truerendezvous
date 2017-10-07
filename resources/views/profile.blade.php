@extends('layouts.app')

@section('content')
    <section class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="jumbotron member-profile-detail">
                        <div class="member-profile-picture">
                            <img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="380" height="380" alt="Profile picture of Diego">
                        </div>
                        <div class="member-profile-info">
                            <h3 class="member-name">
                                Kaleem, 29
                                <span class="online-offline pull-right"><i class="fa fa-circle online" aria-hidden="true" title="Offline"></i></span>
                            </h3>
                            <p  class="brief-introduction"> asdasdas </p>
                            <div class="form-group"> <textarea class="form-control" rows="5" placeholder="Type a message here" id="comment"></textarea> </div>
                            <button type="button" class="btn custom-btn-primary custom-btn" value=""><i class="fa fa-comments-o" aria-hidden="true"></i>Chat Now</button>
                        </div>
                    </div>
                    <div class="row extra-bio">
                        <div class="col-md-4">
                            <div class="widget">
                                <h4 class="widget-title">
                                    My Intrests
                                </h4>
                                <ul class="intrest-ul">
                                    <li>
                                        <div class="intrest">Music</div>
                                    </li>
                                    <li>
                                        <div class="intrest">Swim</div>
                                    </li>
                                    <li>
                                        <div class="intrest">Shopping</div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget personal-details">
                                <h4 class="widget-title">
                                    Amout Me
                                </h4>
                                <ul class="aboutme-ul">
                                    <li><span>Live in:</span><span>New York</span></li>
                                    <li><span>Work as:</span><span>Student</span></li>
                                    <li><span>Education:</span><span>Graduate Degree</span></li>
                                    <li><span>Relationship:</span><span>Never Married</span></li>
                                    <li><span>Have Kids:</span><span>No</span></li>
                                    <li><span>Smoke/Drink:</span><span>Never</span></li>
                                    <li><span>Height:</span><span>175cm</span></li>
                                    <li><span>Eyes:</span><span>Green</span></li>
                                    <li><span>Hairs:</span><span>Brown</span></li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h4 class="widget-title">
                                    I'm Looking For:
                                </h4>
                                <b class="looking-required">Man, 22 years and older </b>
                                <p class="widget-details">
                                    appreciate intelligence, honesty and sincerity. I need to be beside an open minded, caring and ,most importantly, understanding man, who can be trusted. I appreciate a sense of humor, I want to meet a man who will share my interests, and I'll share his.
                                    I will be very glad to at least
                                    communicate with such a person.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-4">

                    <div class="widget">
                        <h4 class="widget-title">
                            Chat/Friend Requests
                        </h4>
                       <div class="request-list">
                           <div class="avatar-box">
                               <img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="50" height="50" alt="Profile picture of Diego">
                           </div>
                           <div class="request-box">
                               <h2>Rizwan</h2>
                               <p>are you there ...</p>
                               <a> Accept </a>
                           </div>
                       </div>
                        <div class="request-list">
                           <div class="avatar-box">
                               <img class="img-responsive" src="https://19g8e3xdzsi8lh0i-zippykid.netdna-ssl.com/wp-content/uploads/avatars/33/5936900c157eb-bpfull.jpg" class="avatar user-33-avatar avatar-380 photo" width="50" height="50" alt="Profile picture of Diego">
                           </div>
                           <div class="request-box">
                               <h2>Rizwan</h2>
                               <p>are you there ...</p>
                               <a> Reply</a>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
          </div>
    </section>

@endsection
