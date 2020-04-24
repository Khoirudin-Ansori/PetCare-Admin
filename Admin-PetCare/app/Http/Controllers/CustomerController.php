<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index($value='')
    {
    	$customer=\App\Customer::all();
    	return view('customer.index',['customer'=>$customer]);
    }
}
