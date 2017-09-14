<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimController extends Controller
{
    //
    public  function index(Request $request){
        if($request->isMethod('POST')) {
            print_r($request->all());
        }
        return view('site.tim');
    }
}
