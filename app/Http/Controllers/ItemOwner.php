<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;


class ItemOwner extends Controller
{
    function list()
    {
        $data=item::all();
        return view('openitem',['items'=>$data]);
    }
}
