<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    function inbox(){
    	return view('app.inbox');
    }

    function single(){
    	return view('app.single');
    }

    function compose(){
    	return view('app.compose');
    }

    function chat(){
    	return view('app.chat');
    }

    function contactList(){
    	return view('app.contact-list');
    }
}
