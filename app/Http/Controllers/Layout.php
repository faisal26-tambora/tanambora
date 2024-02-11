<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Layout;

class Layout extends Controller
{
    public function index(){
        return view('layout.main');
    }
    public function home()
    {
        return View ('layout.home');
    }
}
