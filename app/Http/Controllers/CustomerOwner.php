<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerOwner extends Controller
{
    function list()
    {
        $data=customer::all();
        return view('opencustomer',['customers'=>$data]);
    }
}
