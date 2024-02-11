<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Layout;
use App\Http\Controllers\coba;
use App\Http\Controllers\booking;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/', [Layout::class, 'index']);

Route::controller(coba::class)->group(function(){
    Route::get('coba/index', 'index');
   
});

Route::controller(booking::class)->group(function(){
    Route::get('/booking/index', 'index');
    Route::get('/booking/add','add');
    Route::get('/booking/ulang','index');
    Route::post('/booking/add','store');
    Route::resource('booking', booking::class);
   
});