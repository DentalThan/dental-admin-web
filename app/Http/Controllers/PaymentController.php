<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PaymentController extends BaseController
{    
    function allPayment(){
    	return view('payment.all-payment');
    }
    
    function addPayment(){
    	return view('payment.add-payment');
    }
}
