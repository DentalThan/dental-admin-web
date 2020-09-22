@extends('layout.master')
@section('parentPageTitle', 'Patients')
@section('title', 'Add Patient')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css')}}">
    <script type="text/javascript" src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('http://keith-wood.name/js/jquery.signature.js')}}"></script>

@stop
<style>
   
        #sig canvas{
            width: 100% !important;
            height: auto;
            border: 1px soild #
        }
</style>
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                     
                    </div>
                    <div class="row clearfix">                            
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-calendar"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Enter date">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Age">
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
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row clearfix">                            
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
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

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Doctor Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Staff on Duty">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ward No.">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-calendar"></i>
                                </span>
                                <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
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
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Checkbox</strong> Information <small>Description text here...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="materialUnchecked">
                                <label for="materialUnchecked">Checkbox1</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_2">
                                <label for="basic_checkbox_2">Checkbox2</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_3">
                                <label for="basic_checkbox_3">Checkbox3</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_4">
                                <label for="basic_checkbox_4">Checkbox4</label>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_5">
                                <label for="basic_checkbox_5">Checkbox1</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_6">
                                <label for="basic_checkbox_6">Checkbox2</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_7">
                                <label for="basic_checkbox_7">Checkbox3</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="checkbox">
                                <input type="checkbox" id="basic_checkbox_8">
                                <label for="basic_checkbox_8">Checkbox4</label>
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
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Signature</strong> Information <small>Description text here...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <div class="body">
                    
                    <div class="row clearfix">
                       	{{-- <div class="sig sigWrapper" style="height:auto;">
										<div class="typed"></div>
										<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
									</div>
                        <button id="btnSaveSign" class="btn btn-primary btn-round">Save</button> --}}

                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success  alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">×</button>  
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('patients.signature') }}">
                                @csrf
                                <div class="col-md-12">
                                    <label class="" for="">Signature:</label>
                                    <br/>
                                    <div id="sig" >
                                    <canvas></canvas>
                                    </div>
                                    <br/>
                                    <button id="clear" class="btn btn-primary btn-round">Clear Signature</button>
                                    <textarea id="signature64" name="signed" style="display: none"></textarea>
                                </div>
                                <br/>
                                <button class="btn btn-primary btn-round">Save</button>
                            </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('page-script')
    <script src="{{asset('assets/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

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

   {{-- <script>

	$(document).ready(function(e){

		$(document).ready(function() {
			$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
		});
		
		$("#btnSaveSign").click(function(e){
			html2canvas([document.getElementById('sign-pad')], {
				onrendered: function (canvas) {
					var canvas_img_data = canvas.toDataURL('image/png');
					var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
					//ajax call to save image inside folder
					$.ajax({
						url: 'save_sign.php',
						data: { img_data:img_data },
						type: 'post',
						dataType: 'json',
						success: function (response) {
						   window.location.reload();
						}
					});
				}
			});
		});

	});
	</script> --}}
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
@stop