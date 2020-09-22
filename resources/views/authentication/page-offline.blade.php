@extends('layout.authentication')
@section('title', 'Page Offline')

@section('content')
<div class="container">
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img src="../assets/images/logo.svg" alt="">
                    </div>
                    <h5>The General Shutdown</h5>
                    <span>Maintanance or not?</span>
                </div>
                <div class="content">
                    <div class="input-group input-lg">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
                <div class="footer text-center">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">GO TO HOMEPAGE</a>
                    <h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>
                </div>
            </form>
        </div>
    </div>
</div>

@stop