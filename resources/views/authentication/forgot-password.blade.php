@extends('layout.authentication')
@section('title', 'Forget Password')


@section('content')
<div class="container">
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img src="../assets/images/logo.svg" alt="">
                    </div>
                    <h5>Forgot Password?</h5>
                    <span>Enter your e-mail address below to reset your password.</span>
                </div>
                <div class="content">
                    <div class="input-group input-lg">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                    </div>
                </div>
                <div class="footer text-center">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SUBMIT</a>
                    <h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>
                </div>
            </form>
        </div>
    </div>
</div>
@stop