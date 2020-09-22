@extends('layout.authentication')
@section('title', 'Login')


@section('content')
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="">
                    <div class="header">
                        <div class="logo-container">
                            <img src="../assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="id" class="form-control" placeholder="ID Number">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-lg btn-block ">SIGN IN</a>
                        <h5><a href="{{route('authentication.forgot-password')}}" class="link">Forgot Password?</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop