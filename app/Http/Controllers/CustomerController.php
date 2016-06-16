<?php


namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;


class CustomerController extends Controller
{
    public function index()
    {
        $cust = DB::table('customers')->get();
        //var_dump($cust);
    	return view('page.customer',['cust' => $cust]);
    }

    public function add()
    {
    	return view('page.customer-new');
    }

    public function edit($id)
    {
        $cust = DB::table('customers')->where('customer_id','=',$id)->get();
        //var_dump($cust);
        return view('page.customer-edit',['cust' => $cust]);
        //return view('page.customer-new');
    }

    public function update($id,Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255'
        ]);

        $fname = $request->input('firstname');
        $mname = $request->input('middlename');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');

        DB::table('customers')->where('customer_id', $id)->update(
            ['email'    => $email,
             'firstname'    =>  $fname,
             'middlename'   =>  $mname,
             'lastname'     =>  $lname,
             'phonenumber'  =>  $phonenumber]
        );
        Session::flash('message','Empty input not accepted');
        return redirect('/customers')->with('status', 'Customer updated!');
    }

    public function insert(Request $request)
    {
    	$this->validate($request, [
	        'firstname' => 'required|max:255',
	        'lastname' => 'required|max:255',
	        'email' => 'required|max:255'
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

        return redirect('/customers')->with('status', 'Customer added!');
    }
}
