<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


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

    public function insert(Request $request)
    {
    	$this->validate($request, [
	        'firstname' => 'required|max:255',
	        'lastname' => 'required|max:255',
	        'email' => 'required|unique:customers|max:255'
	    ]);

    	$name = $request->input('firstname');
    	echo $name;
    }
}
