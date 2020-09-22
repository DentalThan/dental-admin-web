<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DepartmentsController extends BaseController
{
    function addDepartment(){
    	return view('departments.add-department');
    }
    function allDepartments(){
    	return view('departments.all-departments');
    }
    function moreDepartments(){
    	return view('departments.more-departments');
    }
}
