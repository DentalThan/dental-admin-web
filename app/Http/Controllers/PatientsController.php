<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PatientsController extends BaseController
{    
    function allPatients(){
    	return view('patients.all-patients');
    }
    
    function addPatients(){
    	return view('patients.add-patients');
    }
    public function upload(Request $request)
    {
	    $folderPath = public_path('upload/');
	  
	    $image_parts = explode(";base64,", $request->signed);
	        
	    $image_type_aux = explode("image/", $image_parts[0]);
	      
	    $image_type = $image_type_aux[1];
	      
	    $image_base64 = base64_decode($image_parts[1]);
	      
	    $file = $folderPath . uniqid() . '.'.$image_type;
	    file_put_contents($file, $image_base64);
	    return back()->with('success', 'success');
    }

    function patientsProfile(){
    	return view('patients.patients-profile');
    }
    
    function invoice(){
    	return view('patients.invoice');
    }
}
