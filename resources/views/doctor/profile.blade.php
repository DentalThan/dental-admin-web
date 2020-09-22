@extends('layout.master')
@section('parentPageTitle', 'Doctors')
@section('title', 'Profile')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/css/timeline.css')}}">
@stop

@section('content')

    <div class="row clearfix profile-page">
        <div class="col-lg-4 col-md-12">
            <div class="card profile-header">
                <div class="body text-center">
                    <div class="profile-image"> <img src="../assets/images/profile_av.jpg" alt=""> </div>
                    <div>
                        <h4 class="m-b-0"><strong>Dr. Charlotte</strong> Deo</h4>
                        <span class="job_post">Neurologist</span>
                        <p>795 Folsom Ave, Suite 600<br> San Francisco, CADGE 94107</p>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-round">Follow</button>
                        <button class="btn btn-primary btn-round btn-simple">Message</button>
                    </div>
                    <p class="social-icon m-t-5 m-b-0">
                        <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                        <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                        <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                        <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                        <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                    </p>
                </div>                    
            </div>                               
            <div class="card">
                <div class="body">
                    <div class="workingtime">
                        <h6>Working Time</h6>
                        <small class="text-muted">Tuesday</small>
                        <p>06:00 AM - 07:00 AM</p>
                        <hr>
                        <small class="text-muted">Thursday</small>
                        <p>06:00 AM - 07:00 AM</p>
                        <hr>
                    </div>
                    <div class="reviews">
                        <h6>Reviews</h6>
                        <small class="text-muted">Staff</small>
                        <p>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                        </p>
                        <hr>
                        <small class="text-muted">Punctuality</small>
                        <p>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                        </p>
                        <hr>
                        <small class="text-muted">Helpfulness</small>
                        <p>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                        </p>
                        <hr>
                        <small class="text-muted">Knowledge</small>
                        <p>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                        </p>
                        <hr>
                        <small class="text-muted">Cost</small>
                        <p>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                            <i class="zmdi zmdi-star-outline"></i>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="card">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Followers">Followers</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#friends">Friends</a></li>                        
                </ul>
                <div class="tab-content">
                    <div class="tab-pane body active" id="Followers">
                        <ul class="right_chat list-unstyled">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Chris Fox</span>
                                            <span class="message">Designer, Blogger</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Joge Lucky</span>
                                            <span class="message">Java Developer</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella</span>
                                            <span class="message">CEO, Thememakker</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie</span>
                                            <span class="message">Art director, Movie Cut</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander</span>
                                            <span class="message">Writter, Mag Editor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>                        
                        </ul>
                    </div>
                    <div class="tab-pane body" id="friends">
                        <ul class="new_friend_list list-unstyled row">
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="../assets/images/sm/avatar1.jpg" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Jackson</h6>
                                    <small class="join_date">Today</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="../assets/images/sm/avatar2.jpg" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Aubrey</h6>
                                    <small class="join_date">Yesterday</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="../assets/images/sm/avatar3.jpg" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Oliver</h6>
                                    <small class="join_date">08 Nov</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="../assets/images/sm/avatar4.jpg" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Isabella</h6>
                                    <small class="join_date">12 Dec</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="../assets/images/sm/avatar1.jpg" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Jacob</h6>
                                    <small class="join_date">12 Dec</small>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                <a href="">
                                    <img src="../assets/images/sm/avatar5.jpg" class="img-thumbnail" alt="User Image">
                                    <h6 class="users_name">Matthew</h6>
                                    <small class="join_date">17 Dec</small>
                                </a>
                            </li>                            
                        </ul>
                    </div>                        
                </div>
            </div>                 
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account</a></li>                        
                </ul>
                <div class="tab-content">
                    <div class="tab-pane body active" id="about">
                        <p>Dr. Charlotte Deo Leon is a neurosurgeon in East Patchogue,Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. He received his medical degree from Harvard Medical School and has been in practice for 21 years. He is one of 5 doctors at Brookhaven Memorial Hospital Medical Center and one of 9 at Southside Hospital who specialize in Neurological Surgery.</p>
                        <h6>Qualifications</h6>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <p><strong>Hospital Affiliations:</strong> UCSF MEDICAL CENTER</p>
                            </li>
                            <li>
                                <p><strong>Medical School:</strong> Palmer College of Chiropractic 1978</p>
                            </li>
                            <li>
                                <p><strong>Residency:</strong> New york</p>
                            </li>
                            <li>
                                <p><strong>Certifications:</strong> Certified Chiropractic Sports Physician 1982</p>
                            </li>
                            <li>
                                <p><strong>Gender:</strong> Female</p>
                            </li>
                            <li>
                                <p><strong>Experience / Tranining:</strong> Past-President, Int. Fed. 1991</p>
                            </li>
                            <li>
                                <p><strong>Internship:</strong> Palmer Clinic</p>
                            </li>
                        </ul>
                        <h6>Specialties</h6>
                        <hr>
                        <ul class="list-unstyled specialties">
                            <li>Breast Surgery</li>
                            <li>Colorectal Surgery</li>
                            <li>Endocrinology</li>
                            <li>Cardiology</li>
                            <li>Cosmetic Dermatology</li>
                            <li>Mole checks and monitoring</li>
                            <li>Clinical Neurophysiology</li>
                        </ul>
                    </div>
                    <div class="tab-pane body" id="Account">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <button class="btn btn-info btn-round">Save Changes</button>
                        <hr>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>                                    
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group m-b-10">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input id="procheck2" type="checkbox">
                                    <label for="procheck2">New task notifications</label>
                                </div>
                                <div class="checkbox">
                                    <input id="procheck3" type="checkbox">
                                    <label for="procheck3">New friend request notifications</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-round">Save Changes</button>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Recent</strong> Activity</h2>
                    <ul class="header-dropdown">
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body user_activity">
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">General Surgery</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">General Surgery</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced used since the 1500s is reproduced</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
        </div>
    </div>

@stop

@section('page-script')
    <script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
@stop