@extends('layout.authentication')
@section('title', 'Lockscreen')


@section('content')
<div class="container">
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img class="rounded-circle img-raised" src="../assets/images/profile_av.jpg" alt="">
                    </div>
                    <h5>Michael</h5>
                    <span>Locked</span>
                </div>
                <div class="content">
                    <div class="input-group input-lg">
                        <input type="password" class="form-control" placeholder="Enter your Password">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="footer text-center">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">LOG IN</a>
                    <h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>
                </div>
            </form>
        </div>
    </div>
</div>

@stop