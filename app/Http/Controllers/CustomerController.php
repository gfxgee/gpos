<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
    	return view('page.customer');
    }

    public function add()
    {
    	return view('page.customer-new');
    }
}
