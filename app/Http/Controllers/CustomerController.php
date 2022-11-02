<?php

namespace App\Http\Controllers;

/* Import Model */
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * index
     * 
     *  @return void
     */
    public function index()
    {
        //get posts
        $customer = Customer::paginate(5);
        
        //render view with posts
        return view('customer.index', compact('customer'));
    }
}
