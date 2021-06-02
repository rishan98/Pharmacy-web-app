<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class ItemController01 extends Controller
{
    function list()
    {
        $data=item::all();
        return view('deleteitem',['items'=>$data]);
    }

    function delete($id) 
    {
        $data=item::find($id);
        $data->delete();
        return redirect('deleteitem');
    }

    function edit($id) 
    {
        $data=item::find($id);
        return view('edititem',['data'=>$data]);
    }

    function update(Request $req)
    { 
        $data=item::find($req->id);
        $data->itemname=$req->itemname;
        $data->qty=$req->qty;
        $data->price=$req->price;
        $data->save();
        return redirect('deleteitem');
    }
}
