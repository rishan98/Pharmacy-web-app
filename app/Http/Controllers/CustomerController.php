<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    function addCustomer(Request $req)
    {
        $customer = new customer;
        $customer->cname=$req->cname;
        $customer->telno=$req->telno;
        $customer->iid=$req->iid;
        $customer->save();
        return redirect('dashboard');
    }
}
