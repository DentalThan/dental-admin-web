<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DoctorController extends BaseController
{    
    function doctors(){
    	return view('doctor.doctors');
    }
    
    function addDoctor(){
    	return view('doctor.add-doctor');
    }
    
    function profile(){
    	return view('doctor.profile');
    }
    
    function events(){
    	return view('doctor.events');
    }
}
