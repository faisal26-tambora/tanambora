<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\coba;
use App\Http\Controllers\DB;

class coba extends Controller
{
    public function index(){
        $title = 'List Data ASN';
        $data = \DB::table('coba')
        ->orderBy('created_at', 'Asc')
        ->paginate(10);
        return view ('coba.coba_index', compact('title','data'));
    }
}
