<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('cashier')) {
            return view('cashierpage');
        }elseif(Auth::user()->hasRole('manager')) {
            return view('managerpage');
        }elseif(Auth::user()->hasRole('owner')) {
            return view('dashboard');
        }
    }
}
