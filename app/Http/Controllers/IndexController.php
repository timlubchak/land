<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
    public  function  execute(Request $request){

            print_r($request->all());



        return view('site.index');
    }
}
