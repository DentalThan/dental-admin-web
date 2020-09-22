@extends('layout.master')
@section('parentPageTitle', 'Appointment')
@section('title', 'Book')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
@stop

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Book</strong> Appointment<small>Description text here...</small> </h2>
                <ul class="header-dropdown">                            
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Date of Birth">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick">
                            <option value="">- Gender -</option>
                            <option value="10">Male</option>
                            <option value="20">Female</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick">
                            <option value="">- Service -</option>
                            <option>Select Service</option>
                            <option>Dental Checkup</option>
                            <option>Full Body Checkup</option>
                            <option>ENT Checkup</option>
                            <option>Heart Checkup</option>
                        </select>                                
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-calendar"></i>
                            </span>
                            <input type="text" class="form-control datetimepicker" placeholder="Please choose date & time...">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                        <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
    <script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script>    $.fn.selectpicker.Constructor.DEFAULTS.iconBase = 'zmdi';
    $.fn.selectpicker.Constructor.DEFAULTS.tickIcon = 'zmdi-check';</script>
    <script>
        $(function () {
        //Datetimepicker plugin
        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'dddd DD MMMM YYYY - HH:mm',
            clearButton: true,
            weekStart: 1
        });
    });
    </script>
@stop