<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class ItemController extends Controller
{
    function addItem(Request $req)
    {
        $item = new item;
        $item->itemname=$req->itemname;
        $item->qty=$req->qty;
        $item->price=$req->price;
        $item->save();
        return redirect('dashboard');
    }

   
}
