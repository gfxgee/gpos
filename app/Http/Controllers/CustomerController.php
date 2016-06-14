<?php


namespace App\Http\Controllers;
use DB;
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

    	$fname = $request->input('firstname');
        $mname = $request->input('middlename');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $id = DB::table('customers')->insertGetId(
            ['email'    => $email,
             'firstname'    =>  $fname,
             'middlename'   =>  $mname,
             'lastname'     =>  $lname,
             'phonenumber'  =>  $phonenumber]
        );
    }
}
