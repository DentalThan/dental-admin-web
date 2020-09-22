<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UiController extends BaseController
{
    function uiKit(){
    	return view('ui.ui-kit');
    }

    function alerts(){
    	return view('ui.alerts');
    }

    function collapse(){
    	return view('ui.collapse');
    }

    function colors(){
    	return view('ui.colors');
    }

    function dialogs(){
    	return view('ui.dialogs');
    }

    function icons(){
    	return view('ui.icons');
    }

    function listGroup(){
    	return view('ui.list-group');
    }

    function mediaObject(){
    	return view('ui.media-object');
    }

    function modals(){
    	return view('ui.modals');
    }

    function notifications(){
    	return view('ui.notifications');
    }

    function progressbars(){
    	return view('ui.progressbars');
    }

    function rangeSliders(){
    	return view('ui.range-sliders');
    }

    function sortableNestable(){
    	return view('ui.sortable-nestable');
    }

    function tabs(){
    	return view('ui.tabs');
    }

    function waves(){
    	return view('ui.waves');
    }
}
