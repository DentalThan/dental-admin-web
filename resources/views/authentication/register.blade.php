@extends('layout.authentication')
@section('title', 'Register')


@section('content')
<div class="container">
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img src="../assets/images/logo.svg" alt="">
                    </div>
                    <h5>Sign Up</h5>
                    <span>Register a new membership</span>
                </div>
                <div class="content">                                                
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter User Name">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-account-circle"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" class="form-control" />
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="Phone" placeholder="Phone" class="form-control" />
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-phone"></i>
                        </span>
                    </div>                 
                </div>
                <div class="checkbox">
                        <input id="terms" type="checkbox">
                        <label for="terms">
                                I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                        </label>
                    </div>
                <div class="footer text-center">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SIGN UP</a>
                    <h5><a class="link" href="{{route('authentication.login')}}">You already have a membership?</a></h5>
                </div>
            </form>
        </div>
    </div>
</div>

@stop