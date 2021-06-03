<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController01;
use App\Http\Controllers\CustomerController01;
use App\Http\Controllers\ItemOwner;
use App\Http\Controllers\CustomerOwner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//auth route
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')-> name
    ('dashboard');
});

Route::post('add',[ItemController::class,'additem']);

Route::post('addc',[CustomerController::class,'addcustomer']);

Route::view('deleteitem','deleteitem');
Route::get('deleteitem',[ItemController01::class,'list']);
Route::get('delete/{id}',[ItemController01::class,'delete']);

Route::get('edit/{id}',[ItemController01::class,'edit']);
Route::post('edit',[ItemController01::class,'update']);


Route::view('deletecustomer','deletecustomer');
Route::get('deletecustomer',[CustomerController01::class,'list']);
Route::get('delete1/{id}',[CustomerController01::class,'delete']);

Route::get('edit1/{id}',[CustomerController01::class,'edit1']);
Route::post('edit1',[CustomerController01::class,'update1']);

Route::view('openitem','openitem');
Route::get('openitem',[ItemOwner::class,'list']);

Route::view('opencustomer','opencustomer');
Route::get('opencustomer',[CustomerOwner::class,'list']);


require __DIR__.'/auth.php';
