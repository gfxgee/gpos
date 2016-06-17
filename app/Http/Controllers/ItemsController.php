<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    public function index()
    {
    	return view('page.item');
    }

    public function add()
    {
    	return view('page.item-new');
    }
}
