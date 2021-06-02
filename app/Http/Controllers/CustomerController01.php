<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController01 extends Controller
{
    function list()
    {
        $data=customer::all();
        return view('deletecustomer',['customers'=>$data]);
    }

    function delete($id) 
    {
        $data=customer::find($id);
        $data->delete();
        return redirect('deletecustomer');
    }

    function edit1($id) 
    {
        $data=customer::find($id);
        return view('editcustomer',['data'=>$data]);
    }

    function update1(Request $req)
    { 
        $data=customer::find($req->id);
        $data->cname=$req->cname;
        $data->telno=$req->telno;
        $data->iid=$req->iid;
        $data->save();
        return redirect('deletecustomer');
    }
}
