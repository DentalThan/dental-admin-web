<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
    	return view('authentication.login');
    }

    function register(){
    	return view('authentication.register');
    }

    function lockscreen(){
        return view('authentication.lockscreen');
    }

    function forgotPassword(){
    	return view('authentication.forgot-password');
    }
    
    function pageOffline(){
    	return view('authentication.page-offline');
    }
    
    function page404(){
    	return view('authentication.page404');
    }

    function page500(){
        return view('authentication.page500');
    }

}
