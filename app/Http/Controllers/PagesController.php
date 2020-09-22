<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blankPage(){
    	return view('pages.blank-page');
    }

    function rtl(){
        return view('pages.rtl');
    }

    function imageGallery(){
    	return view('pages.image-gallery');
    }

    function profile(){
    	return view('pages.profile');
    }

    function timeline(){
    	return view('pages.timeline');
    }

    function invoices(){
        return view('pages.invoices');
    }

    function searchResults(){
        return view('pages.search-results');
    }
}
