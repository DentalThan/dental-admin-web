@extends('layout.master')
@section('parentPageTitle', 'Doctors')
@section('title', 'All Doctors')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <ul class="nav nav-tabs padding-0">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Permanent</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Consultant</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content m-t-10">
                <div class="tab-pane active" id="Permanent">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member1.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. John</h4>
                                        <p class="text-muted">Dentist</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-khaki member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member2.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Amelia</h4>
                                        <p class="text-muted">Gynecologist</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member3.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Jack </h4>
                                        <p class="text-muted">Dentist</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-parpl member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member4.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Jessica </h4>
                                        <p class="text-muted">Nursing</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-pink member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member5.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Joseph </h4>
                                        <p class="text-muted">Audiology</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-seagreen member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member6.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Charlie </h4>
                                        <p class="text-muted">Physical Therapy</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member7.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. William </h4>
                                        <p class="text-muted">Dentist</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-seagreen member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member8.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Sophie </h4>
                                        <p class="text-muted">Physical Therapy</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="tab-pane" id="Consultant">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-khaki member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member2.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Amelia</h4>
                                        <p class="text-muted">Gynecologist</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member3.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Jack </h4>
                                        <p class="text-muted">Dentist</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-pink member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member5.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Joseph </h4>
                                        <p class="text-muted">Audiology</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-seagreen member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member6.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Charlie </h4>
                                        <p class="text-muted">Physical Therapy</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                        <a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

@stop
