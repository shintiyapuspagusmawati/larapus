<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    //


    public function __contract()
    {
    	$this->middleware('auth');
    }

    public function coba()
    {
    	$a = 'shintiya';
    return view('coba', compact($a));
    }
    

}
