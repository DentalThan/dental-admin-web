<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WidgetsController extends BaseController
{
    function apps(){
    	return view('widgets.apps');
    }

    function data(){
    	return view('widgets.data');
    }
}
